<div class="testimonials">
    <h2>All Testimonials</h2>
    <ul class="testimonials-list">
        @foreach(config('nova-testimonials.models.testimonial')::active()->get() as $testimonial)
            <li class="testimonials-list__item">
                <p>{{ $testimonial->quote }}</p>
                <h3>{{ $testimonial->name }}, {{ $testimonial->job_title }}</h3>
            </li>
        @endforeach
    </ul>
</div>