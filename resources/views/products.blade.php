@extends('layouts.app')

@section('title', (isset($category) ? $category->name . ' - ' : '') . 'Products - ' . setting('company_name'))
@section('meta_description', (isset($category) ? $category->name . ' - ' : '') . setting('company_name'))

@section('content')

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

<!-- Inner Page Banner Area Start Here -->
<section class="m360-page-banner">
    <img class="m360-banner-image" src="{{ asset('frontend/images/banners/pg-banner.jpg') }}" alt="{{ isset($category) ? $category->name : 'Products' }} - {{ setting('company_name') }}" />
    <div class="m360-banner-content">
        <h1 class="m360-page-title">Products</h1>
    </div>
</section>

<div class="m360-breadcrumb">
    <div class="m360-breadcrumb-container">
        <div class="m360-breadcrumb-content">
            <p><a href="{{ route('home') }}">HOME</a> &#x02B9A; <span>PRODUCTS</span> @if(isset($category)) &#x02B9A; <span>{{ $category->name }}</span> @endif</p>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->

<!-- Product Area Start Here -->
<section class="section-space-default-less30 bg-light">
    <div class="container">
        <div class="row">
            @forelse($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="team-layout1">
                    <div class="item-content">
                        <div class="item-img">
                            <a href="{{ route('product.detail', $product->slug) }}">
                                <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('frontend/images/products/' . ($productImages[$product->slug] ?? '1738769570img1.jpg')) }}" class="img-fluid" alt="{{ $product->name }}" title="{{ $product->name }}" />
                            </a>
                        </div>
                    </div>
                    <div class="item-title">
                        <h3 class="team-title-light">
                            <a href="{{ route('product.detail', $product->slug) }}" title="{{ $product->name }}">{{ $product->name }}</a>
                        </h3>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>No products found.</p>
            </div>
            @endforelse
        </div>
        @if($products->hasPages())
        <div class="row">
            <div class="col-12">
                {{ $products->links('pagination::bootstrap-4') }}
            </div>
        </div>
        @endif
    </div>
</section>
<!-- Product Area End Here -->

<!-- Keyword Footer -->
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
