<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    /**
     * Массив свойств, которые могут быть массово назначены
     */
    protected $fillable = [
        'uid',
        'parent_id',
        'category',
        'sku',
        'name',
        'description',
        'measurement',
        'in_stock',
        'price',
    ];

    /**
     * Свойства с преобразованием типов
     */
    protected $casts = [
        'price' => 'decimal:2',
        'in_stock' => 'integer',
    ];

    /**
     * Продукт принадлежит категории
     */
    public function categoryModel(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * Продукт может иметь варианты (если это групповой товар)
     */
    public function variants(): HasMany
    {
        return $this->hasMany(Product::class, 'parent_id');
    }

    /**
     * Продукт может быть вариантом другого товара
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'parent_id');
    }

    /**
     * Получить все доступные товары (в наличии)
     */
    public function scopeAvailable($query)
    {
        return $query->where('in_stock', '>', 0);
    }

    /**
     * Получить товары по категории
     */
    public function scopeByCategory($query, $categoryId)
    {
        return $query->where('parent_id', $categoryId);
    }

    /**
     * Получить товар по SKU
     */
    public static function findBySku($sku)
    {
        return self::where('sku', $sku)->first();
    }

    /**
     * Получить товар по UID
     */
    public static function findByUid($uid)
    {
        return self::where('uid', $uid)->first();
    }

    /**
     * Проверить доступность товара
     */
    public function isAvailable(): bool
    {
        return $this->in_stock > 0;
    }

    /**
     * Получить скидку от оригинальной цены
     */
    public function getDiscountAttribute(): float
    {
        return max(0, $this->price * 0.1); // 10% скидка
    }

    /**
     * Уменьшить количество на складе
     */
    public function decreaseStock($quantity): bool
    {
        if ($this->in_stock >= $quantity) {
            $this->in_stock -= $quantity;
            $this->save();
            return true;
        }
        return false;
    }

    /**
     * Увеличить количество на складе
     */
    public function increaseStock($quantity): void
    {
        $this->in_stock += $quantity;
        $this->save();
    }
}
