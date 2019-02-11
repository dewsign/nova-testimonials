<div class="testimonial">
    @if($testimonial = config('nova-testimonials.models.testimonial')::active()->inRandomOrder()->first())
        <p>{{ $testimonial->quote }}</p>
        <h3>{{ $testimonial->name }}, {{ $testimonial->job_title }}</h3>
    @endif
</div>