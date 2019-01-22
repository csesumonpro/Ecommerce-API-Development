<?php

namespace App\Http\Resources\Product;

// use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends jsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'totalPrice' => round($this->price - $this->price * $this->discount / 100, 2),
            'href' => [
                'details' => route('products.show', $this->id)
            ]
        ];
    }
}
