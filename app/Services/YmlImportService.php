// app/Services/YmlImportService.php
<?php namespace App\Services;

use App\Models\YmlCategory;
use App\Models\YmlOffer;
use App\Models\YmlOfferPicture;
use App\Models\YmlOfferParam;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use SimpleXMLElement;

class YmlImportService
{
    protected array $stats = [
        "categories_created" => 0,
        "categories_updated" => 0,
        "offers_created" => 0,
        "offers_updated" => 0,
        "pictures_created" => 0,
        "params_created" => 0,
        "errors" => [],
    ];

    /**
     * Импорт YML файла
     */
    public function import(string $filePath): array
    {
        try {
            if (!file_exists($filePath)) {
                throw new \Exception("Файл не найден: {$filePath}");
            }

            $xml = simplexml_load_file($filePath);

            if ($xml === false) {
                throw new \Exception("Ошибка парсинга XML файла");
            }

            DB::beginTransaction();

            $this->importCategories($xml->shop->categories->category);
            $this->importOffers($xml->shop->offers->offer);

            DB::commit();

            Log::info("YML импорт завершен успешно", $this->stats);

            return $this->stats;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Ошибка импорта YML: " . $e->getMessage());
            $this->stats["errors"][] = $e->getMessage();

            throw $e;
        }
    }

    /**
     * Импорт из строки XML
     */
    public function importFromString(string $xmlContent): array
    {
        try {
            $xml = simplexml_load_string($xmlContent);

            if ($xml === false) {
                throw new \Exception("Ошибка парсинга XML строки");
            }

            DB::beginTransaction();

            $this->importCategories($xml->shop->categories->category);
            $this->importOffers($xml->shop->offers->offer);

            DB::commit();

            Log::info("YML импорт из строки завершен успешно", $this->stats);

            return $this->stats;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Ошибка импорта YML из строки: " . $e->getMessage());
            $this->stats["errors"][] = $e->getMessage();

            throw $e;
        }
    }

    /**
     * Импорт категорий
     */
    protected function importCategories($categories): void
    {
        foreach ($categories as $category) {
            try {
                $externalId = (int) $category["id"];
                $parentId = isset($category["parentId"])
                    ? (int) $category["parentId"]
                    : null;
                $name = trim((string) $category);

                // Пропускаем категории без названия
                if (empty($name)) {
                    continue;
                }

                $exists = YmlCategory::where(
                    "external_id",
                    $externalId,
                )->exists();

                YmlCategory::updateOrCreate(
                    ["external_id" => $externalId],
                    [
                        "name" => $name,
                        "parent_id" => $parentId,
                    ],
                );

                if ($exists) {
                    $this->stats["categories_updated"]++;
                } else {
                    $this->stats["categories_created"]++;
                }
            } catch (\Exception $e) {
                $this->stats["errors"][] =
                    "Ошибка импорта категории ID {$externalId}: " .
                    $e->getMessage();
                Log::error("Ошибка импорта категории", [
                    "external_id" => $externalId ?? null,
                    "error" => $e->getMessage(),
                ]);
            }
        }
    }

    /**
     * Импорт товаров
     */
    protected function importOffers($offers): void
    {
        foreach ($offers as $offer) {
            try {
                $externalId = (string) $offer["id"];
                $available = ((string) $offer["available"]) === "true";

                // Получаем category_id из базы
                $categoryId = null;
                if (isset($offer->categoryId)) {
                    $externalCategoryId = (int) $offer->categoryId;
                    $category = YmlCategory::where(
                        "external_id",
                        $externalCategoryId,
                    )->first();
                    $categoryId = $category?->id;
                }

                // Очищаем HTML из description если есть CDATA
                $description = null;
                if (isset($offer->description)) {
                    $description = trim((string) $offer->description);
                    // Удаляем лишние пробелы и переносы строк
                    $description = preg_replace("/\s+/", " ", $description);
                }

                $data = [
                    "available" => $available,
                    "disabled" => isset($offer->disabled)
                        ? ((string) $offer->disabled) === "true"
                        : false,
                    "name" => trim((string) $offer->name),
                    "url" => isset($offer->url)
                        ? trim((string) $offer->url)
                        : null,
                    "vendor" => isset($offer->vendor)
                        ? trim((string) $offer->vendor)
                        : null,
                    "vendor_code" => isset($offer->vendorCode)
                        ? trim((string) $offer->vendorCode)
                        : null,
                    "category_id" => $categoryId,
                    "description" => $description,
                    "dimensions" => isset($offer->dimensions)
                        ? trim((string) $offer->dimensions)
                        : null,
                    "weight" => isset($offer->weight)
                        ? (float) $offer->weight
                        : null,
                    "price" => (float) $offer->price,
                    "currency_id" => isset($offer->currencyId)
                        ? (string) $offer->currencyId
                        : "USD",
                ];

                $exists = YmlOffer::where("external_id", $externalId)->exists();

                $ymlOffer = YmlOffer::updateOrCreate(
                    ["external_id" => $externalId],
                    $data,
                );

                if ($exists) {
                    $this->stats["offers_updated"]++;
                } else {
                    $this->stats["offers_created"]++;
                }

                // Импортируем картинки
                if (isset($offer->picture)) {
                    $this->importPictures($ymlOffer, $offer->picture);
                }

                // Импортируем параметры
                if (isset($offer->param)) {
                    $this->importParams($ymlOffer, $offer->param);
                }
            } catch (\Exception $e) {
                $this->stats["errors"][] =
                    "Ошибка импорта товара ID {$externalId}: " .
                    $e->getMessage();
                Log::error("Ошибка импорта товара", [
                    "external_id" => $externalId ?? null,
                    "error" => $e->getMessage(),
                ]);
            }
        }
    }

    /**
     * Импорт картинок товара
     */
    protected function importPictures(YmlOffer $offer, $pictures): void
    {
        // Удаляем старые картинки
        $offer->pictures()->delete();

        $sortOrder = 0;
        foreach ($pictures as $picture) {
            $url = trim((string) $picture);

            if (!empty($url)) {
                YmlOfferPicture::create([
                    "offer_id" => $offer->id,
                    "url" => $url,
                    "sort_order" => $sortOrder++,
                ]);

                $this->stats["pictures_created"]++;
            }
        }
    }

    /**
     * Импорт параметров товара
     */
    protected function importParams(YmlOffer $offer, $params): void
    {
        // Удаляем старые параметры
        $offer->params()->delete();

        foreach ($params as $param) {
            $name = trim((string) $param["name"]);
            $value = trim((string) $param);

            if (!empty($name) && !empty($value)) {
                YmlOfferParam::create([
                    "offer_id" => $offer->id,
                    "name" => $name,
                    "value" => $value,
                ]);

                $this->stats["params_created"]++;
            }
        }
    }

    /**
     * Получить статистику импорта
     */
    public function getStats(): array
    {
        return $this->stats;
    }
}
