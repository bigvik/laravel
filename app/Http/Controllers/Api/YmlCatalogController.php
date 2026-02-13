// app/Http/Controllers/Api/YmlCatalogController.php
<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\YmlOfferResource;
use App\Models\YmlOffer;
use App\Models\YmlCategory;
use Illuminate\Http\Request;

class YmlCatalogController extends Controller
{
    /**
     * Список всех товаров с фильтрацией
     */
    public function offers(Request $request)
    {
        $query = YmlOffer::with(["category", "pictures", "params"]);

        // Фильтр по категории
        if ($request->has("category_id")) {
            $query->where("category_id", $request->category_id);
        }

        // Фильтр по доступности
        if ($request->has("available")) {
            $query->where("available", $request->boolean("available"));
        }

        // Фильтр по производителю
        if ($request->has("vendor")) {
            $query->where("vendor", $request->vendor);
        }

        // Поиск по названию
        if ($request->has("search")) {
            $query->where("name", "like", "%" . $request->search . "%");
        }

        // Сортировка
        $sortBy = $request->get("sort_by", "created_at");
        $sortDir = $request->get("sort_dir", "desc");
        $query->orderBy($sortBy, $sortDir);

        $offers = $query->paginate($request->get("per_page", 15));

        return YmlOfferResource::collection($offers);
    }

    /**
     * Получить один товар
     */
    public function show($id)
    {
        $offer = YmlOffer::with(["category", "pictures", "params"])->findOrFail(
            $id,
        );

        return new YmlOfferResource($offer);
    }

    /**
     * Список категорий
     */
    public function categories()
    {
        $categories = YmlCategory::with(["parent", "children"])
            ->withCount("offers")
            ->get();

        return response()->json($categories);
    }
}
