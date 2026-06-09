@extends('layouts.app')

@section('title', 'Search: ' . $query . ' - ' . setting('company_name'))

@section('content')

<section class="m360-page-banner">
    <img class="m360-banner-image" src="{{ asset('frontend/images/banners/pg-banner.jpg') }}" alt="Search - {{ setting('company_name') }}" />
    <div class="m360-banner-content">
        <h1 class="m360-page-title">Search Results</h1>
    </div>
</section>

<div class="m360-breadcrumb">
    <div class="m360-breadcrumb-container">
        <div class="m360-breadcrumb-content">
            <p><a href="{{ route('home') }}">HOME</a> &#x02B9A; <span>SEARCH</span></p>
        </div>
    </div>
</div>

<section class="section-space-default-less30 bg-light">
    <div class="container">
        <h2 class="section-title-dark">Search results for: "{{ $query }}"</h2>

        @if($products->count() > 0)
        <h3 class="mt-40 mb-20" style="font-size:22px;font-weight:600;color:#1a1a2e;">Products</h3>
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-30">
                <div class="team-layout1">
                    <div class="item-content">
                        <div class="item-img">
                            <a href="{{ route('product.detail', $product->slug) }}">
                                <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/400x300' }}" class="img-fluid" alt="{{ $product->name }}">
                            </a>
                        </div>
                    </div>
                    <div class="item-title">
                        <h3 class="team-title-light"><a href="{{ route('product.detail', $product->slug) }}">{{ $product->name }}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $products->links() }}
        @endif

        @if($blogs->count() > 0)
        <h3 class="mt-40 mb-20" style="font-size:22px;font-weight:600;color:#1a1a2e;">Blogs</h3>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                <div class="blog-layout1 shine-hover">
                    <div class="item-img">
                        <a href="{{ route('blog.detail', $blog->slug) }}">
                            <img src="{{ $blog->image ? asset('storage/' . $blog->image) : 'https://via.placeholder.com/400x250' }}" class="img-fluid" alt="{{ $blog->title }}">
                        </a>
                    </div>
                    <div class="item-content">
                        <h3 class="blog-title"><a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->title }}</a></h3>
                        <p>{{ Str::limit($blog->short_description, 120) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $blogs->links() }}
        @endif

        @if($products->count() == 0 && $blogs->count() == 0)
        <div class="text-center mt-40">
            <p class="lead">No results found for "{{ $query }}". Please try different keywords.</p>
            <a href="{{ route('products') }}" class="fill-btn">Browse Products</a>
            <a href="{{ route('blog') }}" class="fill-btn ml-10">Browse Blog</a>
        </div>
        @endif
    </div>
</section>

@endsection
