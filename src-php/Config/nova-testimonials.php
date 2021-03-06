<?php

return [
    'models' => [
        'testimonial' => 'Dewsign\NovaTestimonials\Testimonial',
        'category' => 'Dewsign\NovaTestimonials\TestimonialCategory',
    ],
    'resources' => [
        'testimonial' => 'Dewsign\NovaTestimonials\Nova\Testimonial',
        'category' => 'Dewsign\NovaTestimonials\Nova\TestimonialCategory',
    ],
    'images' => [
        'field' => 'Laravel\Nova\Fields\Image',
        'disk' => 'public',
    ],
];
