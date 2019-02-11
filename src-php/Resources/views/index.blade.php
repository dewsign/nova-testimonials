<div class="reviews">
    <h2>All Reviews</h2>
    <ul class="reviews-list">
        @foreach(config('nova-reviews.models.review', Dewsign\NovaReviews\Review::class)::active()->get() as $review)
            <li class="reviews-list__item">
                <p>{{ $review->quote }}</p>
                <h3>{{ $review->name }}, {{ $review->job_title }}</h3>
            </li>
        @endforeach
    </ul>
</div>