@extends('layouts.app')

@section('title', 'Gallery - ' . setting('company_name'))
@section('meta_description', 'Photo gallery of ' . setting('company_name') . ' - View our products, infrastructure, and manufacturing setup.')

@section('content')

<section class="m360-page-banner">
    <img class="m360-banner-image" src="{{ asset('frontend/images/banners/pg-banner.jpg') }}" alt="Gallery - {{ setting('company_name') }}" />
    <div class="m360-banner-content">
        <h1 class="m360-page-title">Gallery</h1>
    </div>
</section>

<div class="m360-breadcrumb">
    <div class="m360-breadcrumb-container">
        <div class="m360-breadcrumb-content">
            <p><a href="{{ route('home') }}">HOME</a> &#x02B9A; <span>GALLERY</span></p>
        </div>
    </div>
</div>

<section class="section-space-default-less30 bg-light">
    <div class="container">
        @if($categories->count() > 0)
        <div class="text-center mb-40">
            <button class="fill-btn gallery-filter active" data-filter="all" style="margin:3px;padding:8px 20px;">All</button>
            @foreach($categories as $cat)
            <button class="fill-btn gallery-filter" data-filter="{{ Str::slug($cat) }}" style="margin:3px;padding:8px 20px;background:#666;">{{ $cat }}</button>
            @endforeach
        </div>
        @endif

        <div class="row gallery-grid">
            @forelse($galleries as $item)
            <div class="col-lg-4 col-md-6 col-sm-12 gallery-item" data-category="{{ Str::slug($item->category) }}" style="padding-left:12px;padding-right:12px;padding-bottom:24px;">
                <div class="gallery-box" style="position:relative;overflow:hidden;border-radius:5px;box-shadow:0 2px 15px rgba(0,0,0,0.1);">
                    <a href="{{ asset('storage/' . $item->image) }}" data-fancybox="gallery" data-caption="{{ $item->title }}">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="img-fluid" style="width:100%;height:260px;object-fit:cover;" />
                    </a>
                    <div style="padding:12px 15px;background:#fff;">
                        <h5 style="margin:0;font-size:15px;font-weight:600;color:#1a1a2e;">{{ $item->title }}</h5>
                        @if($item->description)
                        <p style="margin:5px 0 0;font-size:13px;color:#666;">{{ $item->description }}</p>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p class="lead">No gallery images available yet.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

@push('scripts')
<script>
    $(document).ready(function() {
        $('.gallery-filter').click(function() {
            $('.gallery-filter').css('background', '#666');
            $(this).css('background', '');
            var filter = $(this).data('filter');
            if (filter === 'all') {
                $('.gallery-item').show();
            } else {
                $('.gallery-item').hide();
                $('.gallery-item[data-category="' + filter + '"]').show();
            }
        });
    });
</script>
@endpush

@endsection
