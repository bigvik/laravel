// app/Models/YmlOfferParam.php
<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class YmlOfferParam extends Model
{
    protected $fillable = ["offer_id", "name", "value"];

    public function offer(): BelongsTo
    {
        return $this->belongsTo(YmlOffer::class, "offer_id");
    }
}
