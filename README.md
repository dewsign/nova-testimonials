# Dewsign Nova Testimonials

A dead simple package to add a testimonials cms to a nova application. Supports testimonial categories out of the box, and is easily extendable to add more functionality.

## Usage

For basic testimonial functionality, this package can be used straight out of the box. Simply add some testimonials in the Nova admin, and include one of the default blade templates in your page layouts.

### Templates

`index.blade.php` - Display all currently active testimonials in the database.

`featured.blade.php` - Display all `featured` testimonials from all categories.

`random.blade.php` - Display a testimonial chosen at random.

#### Specific Category Output

To only output testimonials from a specific category, you can use the included `category.blade.php`. Just pass in a reference to the category model you want to show where you are including the blade template.

```php
// default.blade.php...

@include('nova-testimonials::category', [
    'category' => config('nova-testimonials.models.category')::where(
        'name', 'Customer')->first()
    ])
```

## Customisation and Extending

Whilst this package will work fine as it is, it has been designed to act as a baseline and be extended to fit what each application needs. This is easily achieved by creating a model and resource for the `Testimonial` and/or `TestimonialCategory`, extending the package classes, and updating the config file.

**Note: If you are extending a model, you MUST extend the resource too**

```php
// app/Testimonial.php

use Dewsign\NovaTestimonials\Testimonial as BaseTestimonial;

class Testimonial extends BaseTestimonial
{
    // Extend away!
}
```

```php
//config/nova-testimonials.php

return [
    'models' => [
        'testimonial' => 'App\Testimonial',
        'category' => 'Dewsign\NovaTestimonials\TestimonialCategory',
    ],
    'resources' => [
        'testimonial' => 'App\Nova\Testimonial',
        'category' => 'Dewsign\NovaTestimonials\Nova\TestimonialCategory',
    ]
];
```

### Images

You can use your preferred image field & disk by replacing the default in the `nova-testimonials.php` config. By default the Nova Image field is used.

```php
// config/nova-testimonials.php

    'images' => [
        'field' => 'Laravel\Nova\Fields\Image',
        'disk' => 'public',
    ],
```