<div class="testimonials">
    <h2>All Testimonials</h2>
    <ul class="testimonials-list">
        @foreach(config('nova-testimonials.models.testimonial')::active()->ordered()->get() as $testimonial)
            <li class="testimonials-list__item">
                <p>{{ $testimonial->quote }}</p>
                <h3>{{ $testimonial->author_name }}, {{ $testimonial->author_description }}</h3>
            </li>
        @endforeach
    </ul>
</div>