<?php

namespace Dewsign\NovaTestimonials;

use Dewsign\NovaTestimonials\Testimonial;
use Illuminate\Database\Eloquent\Model;

class TestimonialCategory extends Model
{

    public function testimonials()
    {
        return $this->hasMany(config('nova-testimonials.models.testimonial'));
    }
}
