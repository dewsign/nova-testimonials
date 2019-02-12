# Dewsign Nova Testimonials

A dead simple package to add a testimonials cms to a nova application. Supports testimonial categories out of the box, and is easily extendable to add more functionality.

## Usage

For basic testimonial functionality, this package can be used straight out of the box. Simply add some testimonials in the Nova admin, and include one of the default blade templates in your page layouts.


### Specific Category Output

To only output testimonials from a specific category, you can use the included `category.blade.php`. Just pass in a reference to the category model you want to show where you are including the blade template.

```php
// default.blade.php...

@include('nova-testimonials::category', [
    'category' => config('nova-testimonials.models.category')::where(
        'name', 'Customer')->first()
    ])
```