// routes/api.php
use App\Http\Controllers\Api\YmlCatalogController;

Route::prefix('catalog')->group(function () {
    Route::get('/offers', [YmlCatalogController::class, 'offers']);
    Route::get('/offers/{id}', [YmlCatalogController::class, 'show']);
    Route::get('/categories', [YmlCatalogController::class, 'categories']);
});
