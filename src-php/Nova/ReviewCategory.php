<?php

namespace Dewsign\NovaReviews\Nova;

use Laravel\Nova\Resource;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\HasMany;
use Dewsign\NovaReviews\Nova\Review;

class ReviewCategory extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'Dewsign\NovaReviews\ReviewCategory';

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
    ];

    public static $group = 'Reviews';

    public static function label()
    {
        return __('Review Categories');
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
            Text::make('Name'),

            HasMany::make('Reviews', 'reviews', config('nova-reviews.resources.review', Review::class)),
        ];
    }
}
