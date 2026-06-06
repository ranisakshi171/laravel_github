@extends('layouts.app')

@section('title', $blog->title . ' - ' . setting('company_name'))
@section('meta_description', $blog->short_description)

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

@section('content')

<!-- Inner Page Banner Area Start Here -->
<section class="m360-page-banner">
    <img class="m360-banner-image" src="{{ asset('frontend/images/banners/pg-banner.jpg') }}" alt="Image" />
    <div class="m360-banner-content">
        <h1 class="m360-page-title">Blog Details</h1>
    </div>
</section>

<div class="m360-breadcrumb">
    <div class="m360-breadcrumb-container">
        <div class="m360-breadcrumb-content">
            <p><a href="{{ route('home') }}">HOME</a> &#x02B9A; <a href="{{ route('blog') }}">BLOG</a> &#x02B9A; <span>BLOG DETAILS</span></p>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->

<div class="m360-container">

    <main class="m360-blog-detail-container">

        <section class="m360-blog-details">
            <h1 class="m360-blog-details-head">{{ $blog->title }}</h1>
            <div class="m360-blog-details-image">
                <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('frontend/images/blog/' . ($blogImages[$blog->slug] ?? '20260528082535Blog.jpg')) }}" alt="{{ $blog->title }}" title="{{ $blog->title }}" />
            </div>
            <ul class="m360-post-meta">
                <li><i class="fa fa-calendar"></i> {{ $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format('d M Y') : '' }}</li>
                <li><i class="fa fa-user"></i> {{ $blog->author ?? setting('company_name') }}</li>
            </ul>

            {!! $blog->content !!}

            <div class="m360-post-keywords mt-3 wow fadeInUp animated">
                <h4>Keywords</h4>
                <ul>
                    <li>{{ $blog->title }}</li>
                </ul>
            </div>

            <div class="social-share">
                <h5>Share on:</h5>
                <div id="social-links">
                    <ul>
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" class="social-button" target="_blank" rel="noopener"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="https://x.com/intent/tweet?text={{ urlencode($blog->title) }}&url={{ urlencode(request()->url()) }}" class="social-button" target="_blank" rel="noopener"><span class="fab fa-x-twitter"></span></a></li>
                        <li><a href="https://wa.me/?text={{ urlencode(request()->url()) }}" class="social-button" target="_blank" rel="noopener"><span class="fa fa-whatsapp"></span></a></li>
                    </ul>
                </div>
            </div>

        </section>

        <aside class="m360-recent-posts">
            <h3>Recent Blog Posts</h3>
            <ul>
                @forelse($recentPosts as $recent)
                <li>
                    <div class="m360-recent-post-item">
                        <img class="blog-img rounded shadow-lg" src="{{ $recent->image ? asset('storage/' . $recent->image) : asset('frontend/images/blog/' . ($blogImages[$recent->slug] ?? '20260528082535Blog.jpg')) }}" alt="{{ $recent->title }}" title="{{ $recent->title }}" />
                        <div class="m360-post-info">
                            <a href="{{ route('blog.detail', $recent->slug) }}">{{ $recent->title }}</a>
                            <p class="m360-post-date">{{ $recent->published_at ? \Carbon\Carbon::parse($recent->published_at)->format('d M Y') : '' }}</p>
                        </div>
                    </div>
                </li>
                @empty
                <li>No recent posts.</li>
                @endforelse
            </ul>
        </aside>

    </main>

</div>

<div class="container-fluid keyword-footer" data-wow-delay="0.5s">
    <div class="keyword-container">
        <p class="keyword-text">Fly Ash Brick Making Machine in Coimbatore, Fly Ash Brick Press Machine in Coimbatore, Fly Ash Brick Making Machine in Tamilnadu, Advanced Fly Ash Brick Machine Manufacturers in India, Fly Ash Brick Machine Manufacturers in India, Fly Ash Brick Machine Seller in India, Fully Automatic Fly Ash Brick Machine Manufacturers in India, Fly Ash Brick Making Machine Manufacturers in India, Fly Ash Brick Making Machine Seller in India, Fully Automatic Fly Ash Brick Making Machine Manufacturers in India, Latest Fly Ash Brick Machines, Advanced Technology Fly Ash Brick Press Machines, Fly Ash Brick Press Machine in Tamilnadu, Fly Ash Block Making Machine Manufacturers in Tamilnadu, Fly Ash Block Making Machine Manufacturers in Coimbatore, Hydraulic Brick Making Machine in Coimbatore, Top 10 Fly Ash Bricks Machine Manufacturers in Tamilnadu, Fly Ash Bricks Machine Manufacturers in Coimbatore, Fully Automatic Fly Ash Bricks Machine, Semi Automatic Fly Ash Bricks Machine, Pan Mixer Manufacturers in Coimbatore, Pan Mixer Machines in Coimbatore, Pan Mixer Machines in Tamilnadu, Interlocking Brick Making Machines in Coimbatore, Interlocking Brick Making Machine Manufacturers in Tamil Nadu, Interlocking Brick Making Machine Manufacturers in Coimbatore, Hollow Block Making Machines Manufacturers in Coimbatore, Hollow Block Making Machines Manufacturers in Tamil Nadu, Fly Ash Bricks Making Machine at low price, Fly Ash Bricks Making Machine Cost, Fly Ash brick Manufacturing Plant, Fly Ash brick Manufacturing Plant Supplier in Coimbatore, Fly Ash brick Manufacturing Plant Supplier in Tamil Nadu, Fly Ash Brick Making Machinery Manufacturer India, Automatic Fly Ash Brick Machine, Fly Ash Brick Making Machine at Best Price, Fully Automatic Fly Ash Brick Making Machine in Coimbatore, Automatic Fly Ash Brick Making Machines, Hydraulic Fly Ash Brick Making Machine in Coimbatore, Fully Automatic Fly Ash Bricks Making Machine Manufacturers in Coimbatore, Tamilnadu, Fly Ash Brick Making Machine Manufacturers in Coimbatore, High Pressure Fly Ash Brick Making Machine, Fly Ash Brick Press Machine Manufacturers in Coimbatore, Fly Ash Brick Machine Manufacturers in Coimbatore, Fully Automatic Fly Ash Bricks Machine in Coimbatore, Fly Ash Brick Machine Seller in Coimbatore, Fly Ash Brick Machine Seller in Tamil Nadu, Fully Automatic Fly Ash Brick Making Machine Seller in Tamil Nadu, Fully Automatic Fly Ash Brick Making Machine Seller in Coimbatore, Hydraulic Fly Ash Brick Making Machine Seller in Coimbatore, Hydraulic Fly Ash Brick Making Machine Seller in Tamil Nadu, Fully Automatic Fly Ash Brick Making Machine Manufacturer in Coimbatore, Fully Automatic Fly Ash Brick Making Machine Manufacturer in Tamil Nadu, Semi Automatic Fly Ash Brick Making Machine Manufacturer in Tamil Nadu, Semi Automatic Fly Ash Brick Making Machine Manufacturer in Coimbatore, Semi Automatic Fly Ash Brick Making Machine Seller in Tamil Nadu, Semi Automatic Fly Ash Brick Making Machine Seller in Coimbatore, Fully Automatic Fly Ash Brick Machine Seller in Tamil Nadu, Fully Automatic Fly Ash Brick Machine Seller in Coimbatore, Hydraulic Fly Ash Brick Machine Seller in Coimbatore, Hydraulic Fly Ash Brick Machine Seller in Tamil Nadu, Fully Automatic Fly Ash Brick Machine Manufacturer in Coimbatore, Fully Automatic Fly Ash Brick Machine Manufacturer in Tamil Nadu, Semi Automatic Fly Ash Brick Machine Manufacturer in Tamil Nadu, Semi Automatic Fly Ash Brick Machine Manufacturer in Coimbatore, Semi Automatic Fly Ash Brick Machine Seller in Tamil Nadu, Semi Automatic Fly Ash Brick Machine Seller in Coimbatore, Fly Ash Brick Machine Seller in Near Me, Fly Ash Brick Making Machine Seller in Near Me, Concrete Block Making Machine Manufacturers in Coimbatore, Concrete Block Making Machine Manufacturers in Tamil Nadu, Solid Block Making Machine Manufacturers in Coimbatore, Solid Block Making Machine Manufacturers in Tamil Nadu, Solid Block Making Machine Manufacturers in India, Interlocking Brick Machine Manufacturers in Coimbatore, Interlocking Brick Machine Manufacturers in Tamil Nadu, Interlocking Brick Machine Manufacturers in India, Vibro Forming Table in Coimbatore, Vibro Forming Table Manufacturers in Tamil Nadu, Vibro Forming Table Manufacturers in India, Vibro Forming Table Manufacturers in Coimbatore, Portable Pan Mixer Machine Manufacturers in Tamil Nadu, Portable Pan Mixer Machine Manufacturers in Coimbatore, Portable Pan Mixer Machine Manufacturers in India, Pan Mixer Machine Manufacturers in Tamil Nadu, Pan Mixer Machine Manufacturers in Coimbatore, Pan Mixer Machine Manufacturers in India, Concrete Pan Mixer Machine Manufacturers in Tamil Nadu, Concrete Pan Mixer Machine Manufacturers in Coimbatore, Concrete Pan Mixer Machine Manufacturers in India, Pan Mixer Machine Seller in Tamil Nadu, Pan Mixer Machine Seller in Coimbatore, Pan Mixer Machine Seller in India, Paver Block Vibro Forming Table Manufacturers in Tamil Nadu, Paver Block Vibro Forming Table Manufacturers in Coimbatore, Paver Block Mould Seller in Coimbatore, Paver Block Mould Supplier in Coimbatore, Paver Block Mould Seller in Tamil Nadu, Paver Block Plastic Moulds Seller in Coimbatore, Paver Block Plastic Moulds Supplier in Coimbatore, Paver Block Plastic Moulds Seller in Tamil Nadu.</p>
    </div>
    <div class="tag-container">
        @php
        $tags = [
            'Fly Ash Brick Making Machine in Coimbatore',
            'Fly Ash Brick Press Machine in Coimbatore',
            'Fly Ash Brick Making Machine in Tamilnadu',
            'Advanced Fly Ash Brick Machine Manufacturers in India',
            'Fly Ash Brick Machine Manufacturers in India',
            'Fly Ash Brick Machine Seller in India',
            'Fully Automatic Fly Ash Brick Machine Manufacturers in India',
            'Fly Ash Brick Making Machine Manufacturers in India',
            'Fly Ash Brick Making Machine Seller in India',
            'Fully Automatic Fly Ash Brick Making Machine Manufacturers in India',
            'Latest Fly Ash Brick Machines',
            'Advanced Technology Fly Ash Brick Press Machines',
            'Fly Ash Brick Press Machine in Tamilnadu',
            'Fly Ash Block Making Machine Manufacturers in Tamilnadu',
            'Fly Ash Block Making Machine Manufacturers in Coimbatore',
            'Hydraulic Brick Making Machine in Coimbatore',
            'Top 10 Fly Ash Bricks Machine Manufacturers in Tamilnadu',
            'Fly Ash Bricks Machine Manufacturers in Coimbatore',
            'Fully Automatic Fly Ash Bricks Machine',
            'Semi Automatic Fly Ash Bricks Machine',
            'Pan Mixer Manufacturers in Coimbatore',
            'Pan Mixer Machines in Coimbatore',
            'Pan Mixer Machines in Tamilnadu',
            'Interlocking Brick Making Machines in Coimbatore',
            'Interlocking Brick Making Machine Manufacturers in Tamil Nadu',
            'Interlocking Brick Making Machine Manufacturers in Coimbatore',
            'Hollow Block Making Machines Manufacturers in Coimbatore',
            'Hollow Block Making Machines Manufacturers in Tamil Nadu',
            'Fly Ash Bricks Making Machine at low price',
            'Fly Ash Bricks Making Machine Cost',
            'Fly Ash brick Manufacturing Plant',
            'Fly Ash brick Manufacturing Plant Supplier in Coimbatore',
            'Fly Ash brick Manufacturing Plant Supplier in Tamil Nadu',
            'Fly Ash Brick Making Machinery Manufacturer India',
            'Automatic Fly Ash Brick Machine',
            'Fly Ash Brick Making Machine at Best Price',
            'Fully Automatic Fly Ash Brick Making Machine in Coimbatore',
            'Automatic Fly Ash Brick Making Machines',
            'Hydraulic Fly Ash Brick Making Machine in Coimbatore',
            'Fully Automatic Fly Ash Bricks Making Machine Manufacturers in Coimbatore, Tamilnadu',
            'Fly Ash Brick Making Machine Manufacturers in Coimbatore',
            'High Pressure Fly Ash Brick Making Machine',
            'Fly Ash Brick Press Machine Manufacturers in Coimbatore',
            'Fly Ash Brick Machine Manufacturers in Coimbatore',
            'Fully Automatic Fly Ash Bricks Machine in Coimbatore',
            'Fly Ash Brick Machine Seller in Coimbatore',
            'Fly Ash Brick Machine Seller in Tamil Nadu',
            'Fully Automatic Fly Ash Brick Making Machine Seller in Tamil Nadu',
            'Fully Automatic Fly Ash Brick Making Machine Seller in Coimbatore',
            'Hydraulic Fly Ash Brick Making Machine Seller in Coimbatore',
            'Hydraulic Fly Ash Brick Making Machine Seller in Tamil Nadu',
            'Fully Automatic Fly Ash Brick Making Machine Manufacturer in Coimbatore',
            'Fully Automatic Fly Ash Brick Making Machine Manufacturer in Tamil Nadu',
            'Semi Automatic Fly Ash Brick Making Machine Manufacturer in Tamil Nadu',
            'Semi Automatic Fly Ash Brick Making Machine Manufacturer in Coimbatore',
            'Semi Automatic Fly Ash Brick Making Machine Seller in Tamil Nadu',
            'Semi Automatic Fly Ash Brick Making Machine Seller in Coimbatore',
            'Fully Automatic Fly Ash Brick Machine Seller in Tamil Nadu',
            'Fully Automatic Fly Ash Brick Machine Seller in Coimbatore',
            'Hydraulic Fly Ash Brick Machine Seller in Coimbatore',
            'Hydraulic Fly Ash Brick Machine Seller in Tamil Nadu',
            'Fully Automatic Fly Ash Brick Machine Manufacturer in Coimbatore',
            'Fully Automatic Fly Ash Brick Machine Manufacturer in Tamil Nadu',
            'Semi Automatic Fly Ash Brick Machine Manufacturer in Tamil Nadu',
            'Semi Automatic Fly Ash Brick Machine Manufacturer in Coimbatore',
            'Semi Automatic Fly Ash Brick Machine Seller in Tamil Nadu',
            'Semi Automatic Fly Ash Brick Machine Seller in Coimbatore',
            'Fly Ash Brick Machine Seller in Near Me',
            'Fly Ash Brick Making Machine Seller in Near Me',
            'Concrete Block Making Machine Manufacturers in Coimbatore',
            'Concrete Block Making Machine Manufacturers in Tamil Nadu',
            'Solid Block Making Machine Manufacturers in Coimbatore',
            'Solid Block Making Machine Manufacturers in Tamil Nadu',
            'Solid Block Making Machine Manufacturers in India',
            'Interlocking Brick Machine Manufacturers in Coimbatore',
            'Interlocking Brick Machine Manufacturers in Tamil Nadu',
            'Interlocking Brick Machine Manufacturers in India',
            'Vibro Forming Table in Coimbatore',
            'Vibro Forming Table Manufacturers in Tamil Nadu',
            'Vibro Forming Table Manufacturers in India',
            'Vibro Forming Table Manufacturers in Coimbatore',
            'Portable Pan Mixer Machine Manufacturers in Tamil Nadu',
            'Portable Pan Mixer Machine Manufacturers in Coimbatore',
            'Portable Pan Mixer Machine Manufacturers in India',
            'Pan Mixer Machine Manufacturers in Tamil Nadu',
            'Pan Mixer Machine Manufacturers in Coimbatore',
            'Pan Mixer Machine Manufacturers in India',
            'Concrete Pan Mixer Machine Manufacturers in Tamil Nadu',
            'Concrete Pan Mixer Machine Manufacturers in Coimbatore',
            'Concrete Pan Mixer Machine Manufacturers in India',
            'Pan Mixer Machine Seller in Tamil Nadu',
            'Pan Mixer Machine Seller in Coimbatore',
            'Pan Mixer Machine Seller in India',
            'Paver Block Vibro Forming Table Manufacturers in Tamil Nadu',
            'Paver Block Vibro Forming Table Manufacturers in Coimbatore',
            'Paver Block Mould Seller in Coimbatore',
            'Paver Block Mould Supplier in Coimbatore',
            'Paver Block Mould Seller in Tamil Nadu',
            'Paver Block Plastic Moulds Seller in Coimbatore',
            'Paver Block Plastic Moulds Supplier in Coimbatore',
            'Paver Block Plastic Moulds Seller in Tamil Nadu',
        ];
        @endphp
        @foreach($tags as $tag)
        <h2>{{ $tag }}</h2>
        @endforeach
    </div>
</div>

@endsection
