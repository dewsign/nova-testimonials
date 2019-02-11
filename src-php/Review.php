<?php

namespace Dewsign\NovaReviews;

use Dewsign\NovaReviews\ReviewCategory;
use Maxfactor\Support\Model\Traits\CanBeFeatured;
use Maxfactor\Support\Webpage\Model as BaseModel;
use Maxfactor\Support\Model\Traits\HasActiveState;

class Review extends BaseModel
{
    use CanBeFeatured;
    use HasActiveState;

    public function review_category()
    {
        return $this->belongsTo(config('nova-reviews.models.category'));
    }

    public function getCategoryAttribute()
    {
        return $this->review_category()->first();
    }
}
