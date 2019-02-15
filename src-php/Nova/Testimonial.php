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
    public static $title = 'author_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'author_name',
        'author_description',
        'quote',
    ];

    public static function group()
    {
        return __('Testimonials');
    }

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
            Text::make('Author Name'),
            Text::make('Author Description'),
            Textarea::make('Quote'),
            config('nova-testimonials.images.field')::make('Image')
                ->disk(config('nova-testimonials.images.disk', 'public')),
            Text::make('Image Alt'),

            BelongsTo::make('Testimonial Category', 'category', config('nova-testimonials.resources.category'))->nullable(),
        ];
    }
}
