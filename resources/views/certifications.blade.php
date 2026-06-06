@extends('layouts.app')

@section('title', 'Certifications - ' . setting('company_name'))
@section('meta_description', 'Certifications and credentials of ' . setting('company_name'))

@section('content')

<!-- Inner Page Banner Area Start Here -->
<section class="m360-page-banner">
    <img class="m360-banner-image" src="{{ asset('frontend/images/banners/pg-banner.jpg') }}" alt="Certifications - {{ setting('company_name') }}" />
    <div class="m360-banner-content">
        <h1 class="m360-page-title">Certifications</h1>
    </div>
</section>

<div class="m360-breadcrumb">
    <div class="m360-breadcrumb-container">
        <div class="m360-breadcrumb-content">
            <p><a href="{{ route('home') }}">HOME</a> &#x02B9A; <span>CERTIFICATIONS</span></p>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->

<!-- Certifications Area Start Here -->
<section class="section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb-30">
                <div class="about-layout2">
                    <h2 class="section-title-dark text-left title-bar-primary">Our Certifications &amp; Commitment to <span style="display:inline;">Quality</span></h2>
                    <p class="mb-30">At <strong>{{ setting('company_name') }}</strong>, we are committed to maintaining the highest quality standards. Our certifications reflect our dedication to excellence, quality assurance, and customer satisfaction in the manufacturing of Fly Ash Brick Making Machines, Block Making Machines, Pan Mixers, and other construction machinery.</p>
                </div>
            </div>
        </div>
        @php
        $credentials = [
            ['file' => '20250111101755logo1.png', 'title' => 'Quality Certification 1'],
            ['file' => '20250111102144logo1.png', 'title' => 'Quality Certification 2'],
            ['file' => '20250111102124logo1.png', 'title' => 'Industry Recognition 1'],
            ['file' => '20250111102106logo1.png', 'title' => 'Industry Recognition 2'],
            ['file' => '20250111101915logo1.png', 'title' => 'ISO Certification'],
            ['file' => '20250111101824logo1.png', 'title' => 'Membership Certificate'],
        ];
        @endphp
        <div class="row">
            @foreach($credentials as $cred)
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-30 wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="team-layout1">
                    <div class="item-content">
                        <div class="item-img">
                            <img src="{{ asset('frontend/images/credentials/' . $cred['file']) }}" class="img-fluid" alt="{{ $cred['title'] }}" title="{{ $cred['title'] }}" style="padding: 20px; background: #fff; border: 1px solid #e0e0e0; border-radius: 8px;" />
                        </div>
                    </div>
                    <div class="item-title">
                        <h3 class="team-title-light">{{ $cred['title'] }}</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-30">
            <div class="col-lg-12">
                <div class="about-layout2">
                    <p>We adhere to stringent quality control measures at every stage of manufacturing. Our certifications validate our processes and affirm our commitment to delivering products that meet international standards. We continuously invest in upgrading our infrastructure and processes to maintain our position as a trusted manufacturer in the industry.</p>
                    <p>Our certifications demonstrate:</p>
                    <ul class="list-body-items">
                        <li class="list-body-item">
                            <span class="list-body-item-icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <div class="list-body-item-content">Adherence to industry quality standards.</div>
                        </li>
                        <li class="list-body-item">
                            <span class="list-body-item-icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <div class="list-body-item-content">Commitment to continuous improvement.</div>
                        </li>
                        <li class="list-body-item">
                            <span class="list-body-item-icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <div class="list-body-item-content">Customer-focused quality management approach.</div>
                        </li>
                        <li class="list-body-item">
                            <span class="list-body-item-icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <div class="list-body-item-content">Environmentally responsible manufacturing practices.</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Certifications Area End Here -->

<!-- CTA Banner Start Here -->
<section class="overlay-default section-space bg-fixed" style="background-image: url({{ asset('frontend/images/about/about-3.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="text-center">
                    <h2 class="section-lg-title-light">Trust Our Certified Quality</h2>
                    <p class="lead banner-para-light mb-50">We ensure every machine meets the highest quality standards. Contact us to learn more about our certified products and services.</p>
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
        <p class="keyword-text">Certified Fly Ash Brick Making Machine Manufacturer, ISO Certified Brick Machine Manufacturer in Coimbatore, Quality Certified Pan Mixer Manufacturer, Certified Block Making Machine Supplier in Tamil Nadu, Certified Construction Machinery Manufacturer India.</p>
    </div>
    <div class="tag-container">
        @php
        $tags = [
            'Certified Fly Ash Brick Making Machine Manufacturer',
            'ISO Certified Brick Machine Manufacturer in Coimbatore',
            'Quality Certified Pan Mixer Manufacturer',
            'Certified Block Making Machine Supplier in Tamil Nadu',
            'Certified Construction Machinery Manufacturer India',
            'Certified Vibro Forming Table Manufacturer',
            'Quality Certified Interlocking Brick Machine Supplier',
            'Certified Fly Ash Brick Plant Manufacturer in Coimbatore',
        ];
        @endphp
        @foreach($tags as $tag)
        <h2>{{ $tag }}</h2>
        @endforeach
    </div>
</div>

@endsection
