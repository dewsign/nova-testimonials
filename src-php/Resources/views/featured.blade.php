<div class="testimonials">]
    <h3>Featured Testimonials</h3>
    <ul class="testimonials-list">
        @foreach(config('nova-testimonials.models.testimonial')::active()->featured()->ordered()->get() as $testimonial)
            <li class="testimonials-list__item">
                <p>{{ $testimonial->quote }}</p>
                <h3>{{ $testimonial->name }}, {{ $testimonial->job_title }}</h3>
            </li>
        @endforeach
    </ul>
</div>