<div class="testimonials">]
    <h3>Featured Testimonials</h3>
    <ul class="testimonials-list">
        @foreach(config('nova-testimonials.models.testimonial')::active()->featured()->ordered()->get() as $testimonial)
            <li class="testimonials-list__item">
                <p>{{ $testimonial->quote }}</p>
                <h3>{{ $testimonial->author_name }}, {{ $testimonial->author_description }}</h3>
            </li>
        @endforeach
    </ul>
</div>