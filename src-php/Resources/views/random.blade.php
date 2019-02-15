<div class="testimonial">
    @if($testimonial = config('nova-testimonials.models.testimonial')::active()->inRandomOrder()->first())
        <p>{{ $testimonial->quote }}</p>
        <h3>{{ $testimonial->author_name }}, {{ $testimonial->author_description }}</h3>
    @endif
</div>