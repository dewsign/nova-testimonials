<?php

namespace Dewsign\NovaTestimonials;

use Spatie\EloquentSortable\Sortable;
use Maxfactor\Support\Model\Traits\HasSortOrder;
use Dewsign\NovaTestimonials\TestimonialCategory;
use Maxfactor\Support\Model\Traits\CanBeFeatured;
use Maxfactor\Support\Webpage\Model as BaseModel;
use Maxfactor\Support\Model\Traits\HasActiveState;

class Testimonial extends BaseModel
{
    use HasSortOder;
    use CanBeFeatured;
    use HasActiveState;

    public function testimonial_category()
    {
        return $this->belongsTo(config('nova-testimonials.models.category'));
    }

    public function getCategoryAttribute()
    {
        return $this->testimonial_category()->first();
    }
}
