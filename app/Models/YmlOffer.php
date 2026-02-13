// app/Models/YmlOffer.php
<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class YmlOffer extends Model
{
    protected $fillable = [
        "external_id",
        "available",
        "disabled",
        "name",
        "url",
        "vendor",
        "vendor_code",
        "category_id",
        "description",
        "dimensions",
        "weight",
        "price",
        "currency_id",
    ];

    protected $casts = [
        "available" => "boolean",
        "disabled" => "boolean",
        "price" => "decimal:2",
        "weight" => "decimal:4",
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(YmlCategory::class, "category_id");
    }

    public function pictures(): HasMany
    {
        return $this->hasMany(YmlOfferPicture::class, "offer_id");
    }

    public function params(): HasMany
    {
        return $this->hasMany(YmlOfferParam::class, "offer_id");
    }

    /**
     * Получить первую картинку
     */
    public function getMainPictureAttribute(): ?string
    {
        return $this->pictures()->orderBy("sort_order")->first()?->url;
    }

    /**
     * Получить значение параметра по имени
     */
    public function getParam(string $name): ?string
    {
        return $this->params()->where("name", $name)->first()?->value;
    }
}
