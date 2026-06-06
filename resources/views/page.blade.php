@extends('layouts.app')

@section('title', $page->title . ' - ' . setting('company_name'))

@section('content')

<section class="page-banner-area" style="background-image: url({{ asset('frontend/images/banner-bg.jpg') }}); min-height: 250px;">
    <div class="banner-content">
        <h1>{{ $page->title }}</h1>
        <ul>
            <li><a href="{{ route('home') }}">HOME</a></li>
            <li>{{ $page->title }}</li>
        </ul>
    </div>
</section>

<section class="section-space-equal bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    {!! nl2br(e($page->content)) !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
