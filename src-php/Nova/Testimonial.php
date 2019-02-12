<?php

namespace Dewsign\NovaTestimonials\Nova;

use Laravel\Nova\Resource;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use Dewsign\NovaFieldSortable\IsSorted;
use Dewsign\NovaFieldSortable\Sortable;
use Dewsign\NovaTestimonials\Nova\TestimonialCategory;

class Testimonial extends Resource
{
    use IsSorted;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'Dewsign\NovaTestimonials\Testimonial';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
        'job_title',
        'quote',
    ];

    public static $group = 'Testimonials';

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Sortable::make('Sort Order', 'id'),
            ID::make(),
            Boolean::make('Active'),
            Boolean::make('Featured'),
            Text::make('Name'),
            Text::make('Job Title'),
            Textarea::make('Quote'),

            BelongsTo::make('Testimonial Category', 'testimonial_category', config('nova-testimonials.resources.category'))->nullable(),
        ];
    }
}
