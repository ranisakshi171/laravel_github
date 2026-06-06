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
