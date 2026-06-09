@extends('layouts.app')

@section('title', $product->name . ' - ' . setting('company_name'))

@section('content')

<section class="page-banner-area" style="background-image: url({{ asset('frontend/images/banner-bg.jpg') }}); min-height: 250px;">
    <div class="banner-content">
        <h1>{{ $product->name }}</h1>
        <ul>
            <li><a href="{{ route('home') }}">HOME</a></li>
            <li><a href="{{ route('products') }}">PRODUCTS</a></li>
            <li><a href="{{ route('product.category', $product->category->slug) }}">{{ $product->category->name }}</a></li>
            <li>{{ $product->name }}</li>
        </ul>
    </div>
</section>

<section class="section-space-equal bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-detail-img">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/600x500' }}" class="img-fluid" alt="{{ $product->name }}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-detail-content">
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->short_description }}</p>
                    <div class="description mt-20">
                        {!! nl2br(e($product->description)) !!}
                    </div>

                    @if($product->features)
                    <h4 class="mt-30">Features:</h4>
                    <ul class="features-list">
                        @foreach($product->features_list as $feature)
                        <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <a href="{{ route('contact') }}?subject={{ urlencode('Enquiry about ' . $product->name) }}" class="fill-btn mt-30">Enquire Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section class="section-space-equal bg-light">
    <div class="container">
        <h2 class="section-title-dark">Customer Reviews</h2>
        <div class="row mt-30">
            <div class="col-lg-7">
                @forelse($reviews as $review)
                <div class="review-item mb-20" style="border-bottom:1px solid #eee;padding-bottom:15px;">
                    <div style="display:flex;justify-content:space-between;align-items:center;">
                        <strong>{{ $review->name }}</strong>
                        <span>
                            @for($i = 0; $i < $review->rating; $i++)
                            <i class="fa fa-star" style="color:#ffbe00;"></i>
                            @endfor
                            @for($i = $review->rating; $i < 5; $i++)
                            <i class="fa fa-star" style="color:#ddd;"></i>
                            @endfor
                        </span>
                    </div>
                    <p class="mt-10 mb-0">{{ $review->comment }}</p>
                    <small class="text-muted">{{ $review->created_at->format('d M Y') }}</small>
                </div>
                @empty
                <p>No reviews yet. Be the first to review!</p>
                @endforelse
            </div>
            <div class="col-lg-5">
                <div class="review-form-box" style="background:#f8f8f8;padding:25px;border-radius:5px;">
                    <h4 style="margin-bottom:15px;font-size:18px;font-weight:600;color:#1a1a2e;">Write a Review</h4>
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form method="POST" action="{{ route('reviews.store') }}">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required style="border-radius:0;height:40px;">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" style="border-radius:0;height:40px;">
                        </div>
                        <div class="form-group">
                            <label>Rating *</label>
                            <select name="rating" class="form-control" required style="border-radius:0;height:40px;">
                                <option value="5">5 Stars</option>
                                <option value="4">4 Stars</option>
                                <option value="3">3 Stars</option>
                                <option value="2">2 Stars</option>
                                <option value="1">1 Star</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Comment *</label>
                            <textarea name="comment" class="form-control" rows="4" required style="border-radius:0;"></textarea>
                        </div>
                        <button type="submit" class="fill-btn">Submit Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@if($relatedProducts->count() > 0)
<section class="section-space-equal bg-accent">
    <div class="container">
        <h2 class="section-title-dark">Related Products</h2>
        <div class="row mt-30">
            @foreach($relatedProducts as $related)
            <div class="col-md-3 col-sm-6">
                <div class="team-layout1">
                    <div class="item-content">
                        <div class="item-img">
                            <a href="{{ route('product.detail', $related->slug) }}">
                                <img src="{{ $related->image ? asset('storage/' . $related->image) : 'https://via.placeholder.com/400x300' }}" class="img-fluid" alt="{{ $related->name }}">
                            </a>
                        </div>
                    </div>
                    <div class="item-title">
                        <h3 class="team-title-light"><a href="{{ route('product.detail', $related->slug) }}">{{ $related->name }}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
