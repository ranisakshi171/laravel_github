@extends('layouts.app')

@section('title', setting('meta_title', 'Technocrat Engineering - Fly Ash Bricks Machine Manufacturers in Coimbatore'))
@section('meta_description', setting('meta_description', 'Fly Ash Bricks Machine Manufacturers in Coimbatore, Fly Ash Brick Making Machine in Coimbatore, Fly Ash Brick Making Machine Manufacturers in Coimbatore'))
@section('meta_keywords', setting('meta_keywords', 'Fly Ash Bricks Machine Manufacturers in Coimbatore, Fly Ash Brick Making Machine in Coimbatore, Fly Ash Brick Making Machine Manufacturers in Coimbatore'))

@section('content')

<div id="header-area-space" class="slider-area">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
            @forelse($sliders as $slider)
            <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title ?? 'Slider Image' }}" title="{{ $slider->title ?? '' }}" />
            @empty
            <img src="{{ asset('frontend/images/slider/20250204200102img1.jpg') }}" alt="Fully Automatic Fly Ash Brick Making Machine" title="Fully Automatic Fly Ash Brick Making Machine" />
            <img src="{{ asset('frontend/images/slider/20250204200113img1.jpg') }}" alt="Fly Ash Brick Press Machines" title="Fly Ash Brick Press Machines" />
            <img src="{{ asset('frontend/images/slider/20250204200123img1.jpg') }}" alt="Pan Mixer Machine" title="Pan Mixer Machine" />
            @endforelse
        </div>
    </div>
</div>

<section class="section-space-less30 bg-light">
    <div class="container">
        <div class="row diff-offer">
            <ul>
                <li class="we-offer-cont">
                    <h2>We offer <span>Complete Solution</span></h2>
                </li>
                <li class="we-offer-cont2">
                    <p>&#x0201C;{{ setting('company_name', 'Technocrat Engineering') }}&#x0201D; are the leading manufacturer of a wide range of Fly Ash Brick Making Machine, Block Making Machine, Vibro Forming Table, Interlocking Brick Making Machine, Mixer Machine, PLC Control System and Fly Ash Brick Mould.</p>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="section-space bg-light">
    <div class="container-fluid">
        <div class="row">
            @foreach($categories->take(3) as $category)
            <div class="col-md-4 col-sm-6">
                <div class="product_category_boxs">
                    <div class="img_block">
                        <a href="{{ route('product.category', $category->slug) }}">
                            <img src="{{ $category->image ? asset('storage/' . $category->image) : asset('frontend/images/home-page/WE_OFFER_0' . $loop->iteration . '.jpg') }}" alt="{{ $category->name }}" title="{{ $category->name }}" />
                        </a>
                        <div class="r_m_colom">
                            <div class="text_block">
                                <h5>Features</h5>
                                <ul>
                                    @foreach($category->products->take(4) as $product)
                                    <li>{{ $product->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text_block"><h5><a href="{{ route('product.category', $category->slug) }}">{{ $category->name }}</a></h5></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section-space bg-accent">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                <img src="{{ asset('frontend/images/banners/footprint.jpg') }}" class="img-fluid width-100" alt="Our Footprint - {{ setting('company_name', 'Technocrat Engineering') }}" />
            </div>
        </div>
    </div>
</section>

<section class="section-space bg-accent">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="inner-title-dark lead">
                    <h2>What We Do? <span>{{ setting('company_name', 'Technocrat Engineering') }}</span></h2>
                    <p>At <b>{{ setting('company_name', 'Technocrat Engineering') }}</b>, we are a customer-centric company committed to creating a positive impact through our <b>advanced Fly Ash Brick Machines</b>. Our intelligent approach to brick production and productivity solutions ensures efficiency, durability, and superior performance. By integrating modern technology and engineering, our machines are widely trusted in the infrastructure and construction industries for various commercial and industrial applications. We prioritize quality at every stage, ensuring our products meet the highest industry standards.</p>
                    <a href="{{ route('about') }}" class="fill-btn mt-30">Read More</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-30 wow fadeInRight" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="overlay-default">
                    <img src="{{ asset('frontend/images/banners/video.jpg') }}" class="img-fluid width-100" alt="What We Do - {{ setting('company_name', 'Technocrat Engineering') }}" />
                    <a class="popup-youtube" href="https://www.youtube.com/watch?time_continue=5&v=p1C8jK_ObCY">
                        <div class="button is-play">
                            <div class="yt-button-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="white" d="M7 6v12l10-6z"></path></svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overlay-default section-space bg-fixed" style="background-image: url({{ asset('frontend/images/banners/section1.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="text-center">
                    <h2 class="section-lg-title-light">Expert Engineering & Advanced Infrastructure</h2>
                    <p class="lead banner-para-light">We have highly experienced engineers and a well-developed infrastructure equipped with the newest amenities and advanced equipment, ensuring smooth and efficient business operations.</p>
                    <a href="{{ route('contact') }}" class="fill-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-space-less30 bg-light">
    <div class="container">
        <h2 class="section-title-dark">Our Product Line</h2>
        <p class="section-sub-title-dark lead">We offer a wide range of high-quality machines, including <b>Fly Ash Brick Machines, Pan Mixers, Vibro Forming Tables, Block Making Machines, and Interlocking Brick Making Machines</b>, designed for efficiency, durability, and superior performance.</p>
    </div>
    <div class="container">
        @php
        $productImages = [
            'automatic-fly-ash-bricks-making-machine-techno-24' => '1738769570img1.jpg',
            'fly-ash-bricks-making-machine-techno-15' => '1738768134img1.jpg',
            'automatic-fly-ash-brick-plant-techno-18' => '1738768524img1.jpg',
            'fly-ash-automatic-brick-making-machine-techno-12' => '1738767646img1.jpg',
            'fully-automatic-fly-ash-brick-machine-techno-10' => '1738767801img1.jpg',
            'fly-ash-brick-machine-techno-08' => '1738749724img1.jpg',
            'concrete-block-making-machine' => '1738771934img1.jpg',
            'vibro-forming-table' => '1738778399img1.jpg',
            'interlocking-brick-machine' => '1754292280img1.jpg',
            'pan-mixer-500' => '1738778670img1.jpg',
            'pan-mixer-750' => '1738778775img1.jpg',
            'pan-mixer-1000' => '1738778879img1.jpg',
        ];
        @endphp
        <div class="rc-carousel nav-control-middle" data-loop="true" data-items="2" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false">
            @forelse($featuredProducts as $product)
            <div class="team-layout1">
                <div class="item-content">
                    <div class="item-img">
                        <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('frontend/images/products/' . ($productImages[$product->slug] ?? '1738769570img1.jpg')) }}" class="img-fluid" alt="{{ $product->name }}" title="{{ $product->name }}" />
                    </div>
                </div>
                <div class="item-title">
                    <h3 class="team-title-light">
                        <a href="{{ route('product.detail', $product->slug) }}" title="{{ $product->name }}">{{ $product->name }}</a>
                    </h3>
                </div>
            </div>
            @empty
            <div class="team-layout1">
                <div class="item-content">
                    <div class="item-img">
                        <img src="{{ asset('frontend/images/products/1738769570img1.jpg') }}" class="img-fluid" alt="Automatic Fly Ash Bricks Making Machine (Techno 24)" title="Automatic Fly Ash Bricks Making Machine (Techno 24)" />
                    </div>
                </div>
                <div class="item-title">
                    <h3 class="team-title-light">
                        <a href="#" title="Automatic Fly Ash Bricks Making Machine (Techno 24)">Automatic Fly Ash Bricks Making Machine (Techno 24)</a>
                    </h3>
                </div>
            </div>
            <div class="team-layout1">
                <div class="item-content">
                    <div class="item-img">
                        <img src="{{ asset('frontend/images/products/1738771934img1.jpg') }}" class="img-fluid" alt="Concrete Block Making Machine" title="Concrete Block Making Machine" />
                    </div>
                </div>
                <div class="item-title">
                    <h3 class="team-title-light">
                        <a href="#" title="Concrete Block Making Machine">Concrete Block Making Machine</a>
                    </h3>
                </div>
            </div>
            <div class="team-layout1">
                <div class="item-content">
                    <div class="item-img">
                        <img src="{{ asset('frontend/images/products/1738778399img1.jpg') }}" class="img-fluid" alt="Vibro Forming Table" title="Vibro Forming Table" />
                    </div>
                </div>
                <div class="item-title">
                    <h3 class="team-title-light">
                        <a href="#" title="Vibro Forming Table">Vibro Forming Table</a>
                    </h3>
                </div>
            </div>
            <div class="team-layout1">
                <div class="item-content">
                    <div class="item-img">
                        <img src="{{ asset('frontend/images/products/1754292280img1.jpg') }}" class="img-fluid" alt="Interlocking Brick Machine" title="Interlocking Brick Machine" />
                    </div>
                </div>
                <div class="item-title">
                    <h3 class="team-title-light">
                        <a href="#" title="Interlocking Brick Machine">Interlocking Brick Machine</a>
                    </h3>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<section class="section-space-counter overlay-default" style="background-image: url({{ asset('frontend/images/banners/section3.jpg') }});">
    <div class="container">
        <div class="row">
            @forelse($counters as $counter)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="2s" data-wow-delay=".{{ 2 + ($loop->iteration * 2) }}s">
                <div class="skill-layout1 mb-20">
                    <div class="progress-circular">
                        <input type="text" class="knob knob-nopercent" value="0" data-max="{{ $counter->max ?? 1000 }}" data-rel="{{ $counter->value }}" data-linecap="solid" data-width="140" data-bgcolor="#e1e1e1" data-fgcolor="#ffbe00" data-thickness=".075" data-readonly="true" disabled>
                        <h3>{{ $counter->label }}</h3>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="skill-layout1 mb-20">
                    <div class="progress-circular">
                        <input type="text" class="knob knob-nopercent" value="0" data-max="1000" data-rel="324" data-linecap="solid" data-width="140" data-bgcolor="#e1e1e1" data-fgcolor="#ffbe00" data-thickness=".075" data-readonly="true" disabled>
                        <h3>Satisfied Clients</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="skill-layout1 mb-20">
                    <div class="progress-circular">
                        <input type="text" class="knob knob-nopercent" value="0" data-max="5000" data-rel="1288" data-linecap="solid" data-width="140" data-bgcolor="#e1e1e1" data-fgcolor="#ffbe00" data-thickness=".075" data-readonly="true" disabled>
                        <h3>Successfull Delivery</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="2s" data-wow-delay=".6s">
                <div class="skill-layout1 mb-20">
                    <div class="progress-circular">
                        <input type="text" class="knob knob-nopercent" value="0" data-max="200" data-rel="50" data-linecap="solid" data-width="140" data-bgcolor="#e1e1e1" data-fgcolor="#ffbe00" data-thickness=".075" data-readonly="true" disabled>
                        <h3>Skilled Workers</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="2s" data-wow-delay=".8s">
                <div class="skill-layout1 mb-20">
                    <div class="progress-circular">
                        <input type="text" class="knob knob-nopercent" value="0" data-max="2000" data-rel="800" data-linecap="solid" data-width="140" data-bgcolor="#e1e1e1" data-fgcolor="#ffbe00" data-thickness=".075" data-readonly="true" disabled>
                        <h3>Recurring Order</h3>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<section class="section-space-less30 bg-accent">
    <div class="container">
        <h2 class="section-title-dark">Our Latest Blog</h2>
        <p class="section-sub-title-dark lead">Explore our latest blogs for valuable insights, expert tips, and industry trends to keep you informed and inspired!</p>
    </div>
    <div class="container">
        <div class="row">
            @php
            $blogImages = [
                'fly-ash-brick-production-machine-manufacturers-in-india' => '20260528082535Blog.jpg',
                'automatic-fly-ash-brick-machine-manufacturers-in-coimbatore' => '20260424121233Blog.jpg',
                'hydraulic-pan-mixer-machine-sellers-in-tamil-nadu' => '20260326092123Blog.jpg',
                'concrete-pan-mixer-machine-for-fly-ash-bricks-making' => '20260227120557Blog.jpg',
                'turn-key-manufacturing-plant-for-fly-ash-brick-production' => '20260127100859Blog.jpg',
                'concrete-block-making-machine-manufacturers-in-tamil-nadu' => '20260103144632Blog.jpg',
                'automatic-fly-ash-brick-plant-suppliers-in-india' => '20251120162925Blog.jpg',
                'concrete-pan-mixer-machine-manufacturers-in-tamil-nadu' => '20251025121350Blog.jpg',
                'pan-mixer-machine-manufacturer-in-india' => '20250926163121Blog.jpg',
                'fly-ash-brick-machine-manufacturer-in-india' => '20250821170853Blog.jpg',
            ];
            @endphp
            @forelse($blogs as $blog)
            <div class="col-md-4 col-sm-12">
                <div class="blog-layout1 shine-hover">
                    <div class="item-img">
                        <figure>
                            <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('frontend/images/blog/' . ($blogImages[$blog->slug] ?? '20260528082535Blog.jpg')) }}" class="img-fluid" alt="{{ $blog->title }}" title="{{ $blog->title }}" />
                        </figure>
                        <ul class="published-date-comment">
                            <li>
                                <a href="#">
                                    <i class="fa fa-calendar-o" aria-hidden="true"></i>{{ $blog->published_at ? $blog->published_at->format('d M Y') : '' }}</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>{{ $blog->author ?? setting('company_name', 'Technocrat Engineering') }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item-content">
                        <h3 class="blog-title">
                            <a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->title }}</a>
                        </h3>
                        <p>{{ Str::limit($blog->short_description, 150) }}</p>
                        <a href="{{ route('blog.detail', $blog->slug) }}" class="read-more-btn">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-4 col-sm-12">
                <div class="blog-layout1 shine-hover">
                    <div class="item-img">
                        <figure>
                            <img src="{{ asset('frontend/images/blog/20260528082535Blog.jpg') }}" class="img-fluid" alt="Fly Ash Brick Production Machine Manufacturers in India" title="Fly Ash Brick Production Machine Manufacturers in India" />
                        </figure>
                        <ul class="published-date-comment">
                            <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i>19 May 2026</a></li>
                            <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>Technocrat Engineering</a></li>
                        </ul>
                    </div>
                    <div class="item-content">
                        <h3 class="blog-title"><a href="#">Fly Ash Brick Production Machine Manufacturers in India</a></h3>
                        <p>Technocrat Engineering is a leading Fly Ash Brick Production Machine manufacturer in India, offering durable and high-performance machines for efficient brick manufacturing.</p>
                        <a href="#" class="read-more-btn">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="blog-layout1 shine-hover">
                    <div class="item-img">
                        <figure>
                            <img src="{{ asset('frontend/images/blog/20260424121233Blog.jpg') }}" class="img-fluid" alt="Automatic Fly Ash Brick Machine Manufacturers in Coimbatore" title="Automatic Fly Ash Brick Machine Manufacturers in Coimbatore" />
                        </figure>
                        <ul class="published-date-comment">
                            <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i>20 Apr 2026</a></li>
                            <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>Technocrat Engineering</a></li>
                        </ul>
                    </div>
                    <div class="item-content">
                        <h3 class="blog-title"><a href="#">Automatic Fly Ash Brick Machine Manufacturers in Coimbatore</a></h3>
                        <p>Technocrat Engineering is a leading Automatic Fly Ash Brick Machine Manufacturer in Coimbatore, offering high-performance machines for efficient and eco-friendly brick production.</p>
                        <a href="#" class="read-more-btn">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="blog-layout1 shine-hover">
                    <div class="item-img">
                        <figure>
                            <img src="{{ asset('frontend/images/blog/20260326092123Blog.jpg') }}" class="img-fluid" alt="Hydraulic Pan Mixer Machine Sellers in Tamil Nadu" title="Hydraulic Pan Mixer Machine Sellers in Tamil Nadu" />
                        </figure>
                        <ul class="published-date-comment">
                            <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i>21 Mar 2026</a></li>
                            <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>Technocrat Engineering</a></li>
                        </ul>
                    </div>
                    <div class="item-content">
                        <h3 class="blog-title"><a href="#">Hydraulic Pan Mixer Machine Sellers in Tamil Nadu</a></h3>
                        <p>Technocrat Engineering is a leading Hydraulic Pan Mixer Machine seller in Tamil Nadu, offering high-performance machines for concrete and brick manufacturing.</p>
                        <a href="#" class="read-more-btn">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<section class="section-space-quote bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 text-center mb-30">
                <a href="{{ route('products') }}" class="btn-light">Purchase Now</a>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 text-center--md mb-30">
                <h1 class="title-light-medium">If You Need Bricks and Blocks Making Machinery Solution ...<br/>We Are Available For You</h1>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid keyword-footer" data-wow-delay="0.5s">
    <div class="keyword-container">
        <p class="keyword-text">Fly Ash Brick Making Machine in Coimbatore, Fly Ash Brick Press Machine in Coimbatore, Fly Ash Brick Making Machine in Tamilnadu, Advanced Fly Ash Brick Machine Manufacturers in India, Fly Ash Brick Machine Manufacturers in India, Fly Ash Brick Machine Seller in India, Fully Automatic Fly Ash Brick Machine Manufacturers in India, Fly Ash Brick Making Machine Manufacturers in India, Fly Ash Brick Making Machine Seller in India, Fully Automatic Fly Ash Brick Making Machine Manufacturers in India, Latest Fly Ash Brick Machines, Advanced Technology Fly Ash Brick Press Machines, Fly Ash Brick Press Machine in Tamilnadu, Fly Ash Block Making Machine Manufacturers in Tamilnadu, Fly Ash Block Making Machine Manufacturers in Coimbatore, Hydraulic Brick Making Machine in Coimbatore, Top 10 Fly Ash Bricks Machine Manufacturers in Tamilnadu, Fly Ash Bricks Machine Manufacturers in Coimbatore, Fully Automatic Fly Ash Bricks Machine, Semi Automatic Fly Ash Bricks Machine, Pan Mixer Manufacturers in Coimbatore, Pan Mixer Machines in Coimbatore, Pan Mixer Machines in Tamilnadu, Interlocking Brick Making Machines in Coimbatore, Interlocking Brick Making Machine Manufacturers in Tamil Nadu, Interlocking Brick Making Machine Manufacturers in Coimbatore, Hollow Block Making Machines Manufacturers in Coimbatore, Hollow Block Making Machines Manufacturers in Tamil Nadu, Fly Ash Bricks Making Machine at low price, Fly Ash Bricks Making Machine Cost, Fly Ash brick Manufacturing Plant, Fly Ash brick Manufacturing Plant Supplier in Coimbatore, Fly Ash brick Manufacturing Plant Supplier in Tamil Nadu, Fly Ash Brick Making Machinery Manufacturer India, Automatic Fly Ash Brick Machine, Fly Ash Brick Making Machine at Best Price, Fully Automatic Fly Ash Brick Making Machine in Coimbatore, Automatic Fly Ash Brick Making Machines.</p>
    </div>
</div>

@endsection

@push('scripts')
<script type="text/javascript">
$(document).ready(function() {
    let url = window.location.href;
    $("nav ul li a").each(function() {
        if (this.href === url) {
            $(this).parent().addClass("active");
            $(this).closest("li").parents("li").addClass("active");
        }
    });
});
</script>
@endpush
