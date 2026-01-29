<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /**
     * Массив свойств, которые могут быть массово назначены
     */
    protected $fillable = [
        'name',
        'uid',
        'description',
        'slug',
        'is_active',
    ];

    /**
     * Свойства, которые должны быть преобразованы в логические значения
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Категория имеет много товаров
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Получить все активные категории
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Получить категорию по ID
     */
    public static function findByUid($uid)
    {
        return self::where('uid', $uid)->first();
    }

    /**
     * Получить все категории с количеством товаров
     */
    public function scopeWithProductCount($query)
    {
        return $query->withCount('products');
    }
}
