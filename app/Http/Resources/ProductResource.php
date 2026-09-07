<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // 'id' => $this->id,
            'title' => $this->title,
            'tracking_code' => $this->tracking_code,
            'price' => $this->price,
            'price_discounted' => $this->price_discounted,
            'poster' => $this->poster,
            'in_stock' => $this->stock > 0,
            'category' => new CategoryResource($this->whenLoaded('category')),
            'category_id' => $this->category_id,
        ];
    }
}
