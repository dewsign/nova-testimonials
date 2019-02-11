<div class="review">
    @if($review = config('nova-reviews.models.review', Dewsign\NovaReviews\Review::class)::active()->inRandomOrder()->first())
        <p>{{ $review->quote }}</p>
        <h3>{{ $review->name }}, {{ $review->job_title }}</h3>
    @endif
</div>