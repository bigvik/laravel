// app/Models/YmlOfferPicture.php
<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class YmlOfferPicture extends Model
{
    protected $fillable = ["offer_id", "url", "sort_order"];

    protected $casts = [
        "sort_order" => "integer",
    ];

    public function offer(): BelongsTo
    {
        return $this->belongsTo(YmlOffer::class, "offer_id");
    }
}
