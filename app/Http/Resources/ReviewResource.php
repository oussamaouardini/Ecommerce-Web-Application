<?php

namespace App\Http\Resources;

use App\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $avg = Review::where('product_id', $this->product_id)->avg('stars');
        $created_at = \Carbon\Carbon::parse($this->created_at);

        return [
            'review_id' => $this->id,
            'stars_avg' => doubleval(number_format($avg, 2)),
            'stars' => doubleval(number_format($this->stars, 2)),
            'review' => $this->review,
            'date' => $created_at->format('M d Y'),
            'reviewer' => new UserResource($this->customer),
            'userEmail' => $this->customer->email,
        ];
    }
}
