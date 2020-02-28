<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'product_id'            =>$this->id,
            'product_title'         =>$this->title,
            'product_description'   =>$this->description,
            'product_price'         =>$this->price,
            'product_category'      =>new CategoryResource($this->category),// why new ?
            'product_images'        =>ImageResource::collection($this->images),
            'product_reviews_count' =>count($this->reviews) ,
            'product_reviews'       =>ReviewResource::collection($this->reviews),
            'product_nb_sales'      =>$this->nb_sales,
            'product_quantity'      =>$this->product_quantity,

        ];
    }
}
