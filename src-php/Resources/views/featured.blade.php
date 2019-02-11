<div class="reviews">]
    <h3>Featured Reviews</h3>
    <ul class="reviews-list">
        @foreach(config('nova-reviews.models.review', Dewsign\NovaReviews\Review::class)::active()->featured()->get() as $review)
            <li class="reviews-list__item">
                <p>{{ $review->quote }}</p>
                <h3>{{ $review->name }}, {{ $review->job_title }}</h3>
            </li>
        @endforeach
    </ul>
</div>