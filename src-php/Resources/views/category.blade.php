@if($category)
    <div class="testimonials">
        <h2>{{ $category->name }} Testimonials</h2>
        <ul class="{{ $category }}-testimonials">
            @foreach($category->testimonials as $item)
                <li>
                    <p>{{ $item->quote }}</p>
                    <h3>{{ $item->author_name }}, {{ $item->author_description }}</h3>
                </li>
            @endforeach
        </ul>
    </div>
@else
<div class="testimonials">
    <!-- No Testimonial Category found -->
</div>
@endif