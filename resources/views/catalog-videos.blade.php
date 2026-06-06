@extends('layouts.app')

@section('title', 'Catalog & Videos - ' . setting('company_name'))
@section('meta_description', 'Explore our product catalog and corporate videos from ' . setting('company_name'))

@section('content')

<!-- Inner Page Banner Area Start Here -->
<section class="m360-page-banner">
    <img class="m360-banner-image" src="{{ asset('frontend/images/banners/pg-banner.jpg') }}" alt="Catalog & Videos - {{ setting('company_name') }}" />
    <div class="m360-banner-content">
        <h1 class="m360-page-title">Catalog & Videos</h1>
    </div>
</section>

<div class="m360-breadcrumb">
    <div class="m360-breadcrumb-container">
        <div class="m360-breadcrumb-content">
            <p><a href="{{ route('home') }}">HOME</a> &#x02B9A; <span>CATALOG & VIDEOS</span></p>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->

<!-- Catalog Section Start Here -->
<section class="section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb-30">
                <div class="about-layout2 text-center">
                    <h2 class="section-title-dark title-bar-primary">Our <span style="display:inline;">Product Catalog</span></h2>
                    <p class="mb-30">Download our detailed product catalog to explore the complete range of Fly Ash Brick Making Machines, Block Making Machines, Pan Mixers, Vibro Forming Tables, and Interlocking Brick Making Machines. Our catalog provides comprehensive specifications, features, and technical details.</p>
                    <a href="{{ route('brochure') }}" target="_blank" class="fill-btn" style="display: inline-block; margin-bottom: 20px;">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download Catalog
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Catalog Section End Here -->

<!-- Videos Section Start Here -->
<section class="section-space bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb-30">
                <div class="text-center">
                    <h2 class="section-title-dark title-bar-primary">Our <span style="display:inline;">Corporate Videos</span></h2>
                    <p class="mb-30">Watch our corporate videos to learn more about our manufacturing capabilities, product range, and commitment to quality. See our machines in action and understand what makes {{ setting('company_name') }} a trusted name in the industry.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-30 wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="team-layout1">
                    <div class="item-content">
                        <div class="video-container" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 8px;">
                            <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/rVpjyqDKVws" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-30 wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="about-layout2">
                    <h3 class="section-title-dark text-left title-bar-primary" style="text-align:left;">See Our Machines in <span style="display:inline;">Action</span></h3>
                    <p>At <strong>{{ setting('company_name') }}</strong>, we take pride in our advanced manufacturing facility and state-of-the-art machinery. Our videos showcase:</p>
                    <ul class="list-body-items">
                        <li class="list-body-item">
                            <span class="list-body-item-icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <div class="list-body-item-content">Manufacturing process and quality control.</div>
                        </li>
                        <li class="list-body-item">
                            <span class="list-body-item-icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <div class="list-body-item-content">Machine demonstrations and production capabilities.</div>
                        </li>
                        <li class="list-body-item">
                            <span class="list-body-item-icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <div class="list-body-item-content">Customer testimonials and success stories.</div>
                        </li>
                        <li class="list-body-item">
                            <span class="list-body-item-icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <div class="list-body-item-content">Facility tour and infrastructure overview.</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Videos Section End Here -->

<!-- CTA Banner Start Here -->
<section class="overlay-default section-space bg-fixed" style="background-image: url({{ asset('frontend/images/about/about-3.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="text-center">
                    <h2 class="section-lg-title-light">Explore Our Complete Range</h2>
                    <p class="lead banner-para-light mb-50">Browse our product catalog or contact us for more information about our machines and services.</p>
                    <a href="{{ route('contact') }}" class="fill-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Banner End Here -->

<!-- Keyword Footer -->
<div class="container-fluid keyword-footer" data-wow-delay="0.5s">
    <div class="keyword-container">
        <p class="keyword-text">Fly Ash Brick Making Machine Catalog, Brick Machine Corporate Video, Pan Mixer Video Demonstration, Block Making Machine Product Catalog, Construction Machinery Video, Fly Ash Brick Plant Video, Automatic Brick Machine Video, Brick Manufacturing Machine Catalog.</p>
    </div>
    <div class="tag-container">
        @php
        $tags = [
            'Fly Ash Brick Making Machine Catalog',
            'Brick Machine Corporate Video',
            'Pan Mixer Video Demonstration',
            'Block Making Machine Product Catalog',
            'Construction Machinery Video',
            'Fly Ash Brick Plant Video',
            'Automatic Brick Machine Video',
            'Brick Manufacturing Machine Catalog',
            'Vibro Forming Table Video',
            'Interlocking Brick Machine Video',
        ];
        @endphp
        @foreach($tags as $tag)
        <h2>{{ $tag }}</h2>
        @endforeach
    </div>
</div>

@endsection
