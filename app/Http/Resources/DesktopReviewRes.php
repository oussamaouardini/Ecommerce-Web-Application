<?php

namespace App\Http\Resources;

use App\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;

class DesktopReviewRes extends JsonResource
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
        $user = new UserResource($this->customer);
        return [
            'review_id' => $this->id,
            'stars_avg' => doubleval(number_format($avg, 2)),
            'stars' => doubleval(number_format($this->stars, 2)),
            'review' => $this->review,
            'date' => $created_at->format('M d Y'),
            'email' => $user->email,
            'last_name' => $user->last_name,
            'first_name' => $user->first_name,
        ];
    }
}
