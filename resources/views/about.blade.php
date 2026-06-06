@extends('layouts.app')

@section('title', 'About Us - ' . setting('company_name'))
@section('meta_description', 'Learn more about ' . setting('company_name'))

@section('content')

<!-- Inner Page Banner Area Start Here -->
<section class="m360-page-banner">
    <img class="m360-banner-image" src="{{ asset('frontend/images/banners/pg-banner.jpg') }}" alt="About Us - {{ setting('company_name') }}" />
    <div class="m360-banner-content">
        <h1 class="m360-page-title">About Us</h1>
    </div>
</section>

<div class="m360-breadcrumb">
    <div class="m360-breadcrumb-container">
        <div class="m360-breadcrumb-content">
            <p><a href="{{ route('home') }}">HOME</a> &#x02B9A; <span>ABOUT US</span></p>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->

<!-- About Area Start Here -->
<section class="section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-30">
                <div class="about-layout2">
                    <h2 class="section-title-dark text-left title-bar-primary">Welcome to
                        <span>{{ setting('company_name') }}</span>
                    </h2>
                    <p class="mb-30">We "{{ setting('company_name') }}", are the leading manufacturer of a wide range of Fly Ash Brick Making Machine, Pan Mixer, Block Making Machine, Vibro Forming Table, Interlocking Brick Making Machine and Paver Block Mould. We also offer Fly Ash Bricks Machine Installation Service.<br/><strong>Mr. Rasheed</strong> has played a momentous role in taking the organization to desired preeminence in the industry. He is a man with practical approach thus he practices ethical policies for helping us establish a long relationship with our customers. He also provides our employees with necessary guidance which help them take important decision in situations of dilemma and it also help them work efficiently.</p>
                    <h3>We specialize in the following key aspects:</h3>
                    <ul class="list-body-items">
                        <li class="list-body-item">
                            <span class="list-body-item-icon">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </span>
                            <div class="list-body-item-content">Durable and High-Quality Products.</div>
                        </li>
                        <li class="list-body-item">
                            <span class="list-body-item-icon">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </span>
                            <div class="list-body-item-content">Timely Delivery with Reliable Support.</div>
                        </li>
                        <li class="list-body-item">
                            <span class="list-body-item-icon">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </span>
                            <div class="list-body-item-content">Competitive Pricing and Great Value.</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-30">
                <img src="{{ asset('frontend/images/about/about-1.png') }}" alt="Fly Ash Brick Press Machine Manufacturers in Tamil Nadu" class="img-fluid" />
            </div>
        </div>
    </div>
</section>
<!-- About Area End Here -->

<!-- Service Area Start Here -->
<section class="section-space bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="service-layout1 media">
                    <i class="fa fa-eye icon-circle-primary"></i>
                    <div class="media-body">
                        <h3 class="service-title-dark">
                            <a href="#">Our Vision</a>
                        </h3>
                        <p>Our vision is to drive growth by delivering advanced Fly Ash Brick Making Machines, leveraging reliable and innovative process technology to provide efficient and sustainable brick-making solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="service-layout1 media">
                    <i class="fa fa-bullseye icon-circle-primary"></i>
                    <div class="media-body">
                        <h3 class="service-title-dark">
                            <a href="#">Our Mission</a>
                        </h3>
                        <p>To achieve sustainable growth through quality manufacturing and technological leadership, making {{ setting('company_name') }} the preferred global supplier of Fly Ash Brick Making Machines and solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s">
                <div class="service-layout1 media">
                    <i class="fa fa-diamond icon-circle-primary"></i>
                    <div class="media-body">
                        <h3 class="service-title-dark">
                            <a href="#">Our Values</a>
                        </h3>
                        <p>We uphold integrity, trust, and passion to create a motivating workplace. With honesty and quality at every stage of production, we strive to meet client requirements in the best possible way.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Area End Here -->

<!-- Why Choose Us Area Start Here -->
<section class="section-space bg-accent">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-30 wow fadeInRight" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="overlay-default1">
                    <img src="{{ asset('frontend/images/about/about-2.png') }}" class="img-fluid width-100" alt="Fly Ash Brick Press Machine in Coimbatore" />
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="inner-title-dark lead">
                    <h2 class="section-title-dark text-left title-bar-primary">Why Choose
                        <span>{{ setting('company_name') }}</span>
                    </h2>
                    <p>We have developed our entire product range by keeping quality measures as our major focus. Laid inconsistency on making them faddish amongst our customers, we offer our products at competitive prices in market with assured quality guaranteed. We provide our customers with a facility of customization in terms of packing so as to keep their consignments safe and secure while delivery.</p>
                    <ul class="list-body-items">
                        <li class="list-body-item">
                            <span class="list-body-item-icon">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </span>
                            <div class="list-body-item-content">Excellent quality Fly Ash Brick Making Machine, Plant &#x00026; Equipment.</div>
                        </li>
                        <li class="list-body-item">
                            <span class="list-body-item-icon">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </span>
                            <div class="list-body-item-content">Best Co-Operation and prompt attention to customer calls for service made us to bag repeated orders from Industrial Giants throughout the country.</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Us Area End Here -->

<!-- Engineering Excellence Banner Start Here -->
<section class="overlay-default section-space bg-fixed" style="background-image: url({{ asset('frontend/images/about/about-3.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="text-center">
                    <h2 class="section-lg-title-light">Engineering Excellence</h2>
                    <p class="lead banner-para-light mb-50">We have a team of highly experienced engineers and a well-developed infrastructure equipped with the latest technology. Our facilities are efficient enough to ensure smooth business operations.</p>
                    <a href="{{ route('contact') }}" class="fill-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Engineering Excellence Banner End Here -->

<!-- Leadership & Skills Area Start Here -->
<section class="section-space-less30 bg-light">
    <div class="container">
        <div class="row">
            <div class="inner-title-dark lead col-lg-6 col-md-12 mb-30">
                <h2> Leadership That Drives Excellence
                    <span>{{ setting('company_name') }}</span>
                </h2>
                <p class="mb-none">At <strong>{{ setting('company_name') }}</strong>, strong leadership and ethical practices drive our success. Guided by <strong>Mr. Rasheed</strong>, we excel in <strong>Fly Ash Brick Machine Manufacturing</strong>. His practical approach fosters long-term customer relationships and empowers employees to make informed decisions, ensuring top-quality products and services.</p>
            </div>
            <div class="col-lg-6 col-md-12 mb-30">
                <div class="skill-layout2">
                    <div class="progress">
                        <div class="lead">Customer Satisfaction Ensured</div>
                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 95%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="95%" class="progress-bar progress-bar-striped bg-success wow fadeInLeft animated">
                            <span>95%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="lead">Skilled Professionals</div>
                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 95%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="95%" class="progress-bar progress-bar-striped bg-info wow fadeInLeft animated">
                            <span>95%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="lead">Quality Assurance</div>
                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 100%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="99%" class="progress-bar progress-bar-striped bg-warning wow fadeInLeft animated">
                            <span>99%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="lead">Prompt Delivery</div>
                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 95%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="95%" class="progress-bar progress-bar-striped bg-danger wow fadeInLeft animated">
                            <span>95%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Leadership & Skills Area End Here -->

@endsection
