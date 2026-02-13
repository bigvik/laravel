// app/Models/YmlCategory.php
<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class YmlCategory extends Model
{
    protected $fillable = ["external_id", "parent_id", "name"];

    protected $casts = [
        "external_id" => "integer",
        "parent_id" => "integer",
    ];

    public function offers(): HasMany
    {
        return $this->hasMany(YmlOffer::class, "category_id");
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(YmlCategory::class, "parent_id", "external_id");
    }

    public function children(): HasMany
    {
        return $this->hasMany(YmlCategory::class, "parent_id", "external_id");
    }
}
