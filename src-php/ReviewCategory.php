<?php

namespace Dewsign\NovaReviews;

use Dewsign\NovaReviews\Review;
use Illuminate\Database\Eloquent\Model;

class ReviewCategory extends Model
{

    public function reviews()
    {
        return $this->hasMany(config('nova-reviews.models.review', Review::class));
    }
}
