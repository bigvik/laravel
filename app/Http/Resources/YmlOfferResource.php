// app/Http/Resources/YmlOfferResource.php
<?php namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class YmlOfferResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "external_id" => $this->external_id,
            "name" => $this->name,
            "vendor" => $this->vendor,
            "vendor_code" => $this->vendor_code,
            "price" => (float) $this->price,
            "currency" => $this->currency_id,
            "available" => $this->available,
            "disabled" => $this->disabled,
            "url" => $this->url,
            "description" => $this->description,
            "weight" => $this->weight ? (float) $this->weight : null,
            "dimensions" => $this->dimensions,
            "category" => [
                "id" => $this->category?->id,
                "name" => $this->category?->name,
            ],
            "pictures" => $this->pictures->pluck("url")->toArray(),
            "main_picture" => $this->main_picture,
            "params" => $this->params->mapWithKeys(function ($param) {
                return [$param->name => $param->value];
            }),
        ];
    }
}
