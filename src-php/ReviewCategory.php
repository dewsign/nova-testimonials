<?php

namespace Dewsign\NovaReviews;

use Dewsign\NovaReviews\Review;
use Illuminate\Database\Eloquent\Model;

class ReviewCategory extends Model
{

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
