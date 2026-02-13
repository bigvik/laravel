// app/Console/Commands/ImportYmlCatalog.php
<?php namespace App\Console\Commands;

use App\Services\YmlImportService;
use Illuminate\Console\Command;

class ImportYmlCatalog extends Command
{
    protected $signature = "yml:import {file : Путь к YML файлу}";
    protected $description = "Импорт YML каталога в базу данных";

    public function handle(YmlImportService $importService): int
    {
        $filePath = $this->argument("file");

        $this->info("Начало импорта из файла: {$filePath}");

        try {
            $stats = $importService->import($filePath);

            $this->newLine();
            $this->info("Импорт завершен успешно!");
            $this->newLine();

            $this->table(
                ["Операция", "Количество"],
                [
                    ["Категорий создано", $stats["categories_created"]],
                    ["Категорий обновлено", $stats["categories_updated"]],
                    ["Товаров создано", $stats["offers_created"]],
                    ["Товаров обновлено", $stats["offers_updated"]],
                    ["Картинок создано", $stats["pictures_created"]],
                    ["Параметров создано", $stats["params_created"]],
                    ["Ошибок", count($stats["errors"])],
                ],
            );

            if (!empty($stats["errors"])) {
                $this->newLine();
                $this->error("Ошибки при импорте:");
                foreach ($stats["errors"] as $error) {
                    $this->line("  - {$error}");
                }
            }

            return Command::SUCCESS;
        } catch (\Exception $e) {
            $this->error("Ошибка импорта: " . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
