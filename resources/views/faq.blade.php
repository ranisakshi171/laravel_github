@extends('layouts.app')

@section('title', 'FAQ - ' . setting('company_name'))
@section('meta_description', 'Frequently Asked Questions about ' . setting('company_name') . ' products and services.')

@section('content')

<section class="m360-page-banner">
    <img class="m360-banner-image" src="{{ asset('frontend/images/banners/pg-banner.jpg') }}" alt="FAQ - {{ setting('company_name') }}" />
    <div class="m360-banner-content">
        <h1 class="m360-page-title">FAQ</h1>
    </div>
</section>

<div class="m360-breadcrumb">
    <div class="m360-breadcrumb-container">
        <div class="m360-breadcrumb-content">
            <p><a href="{{ route('home') }}">HOME</a> &#x02B9A; <span>FAQ</span></p>
        </div>
    </div>
</div>

<section class="section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-title-dark text-center mb-50">
                    <h2 class="section-title-dark title-bar-primary">Frequently Asked Questions</h2>
                    <p>Find answers to common questions about our products and services.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 mx-auto">
                @forelse($faqs as $index => $faq)
                <div class="faq-item" style="margin-bottom:15px;border:1px solid #e0e0e0;border-radius:5px;overflow:hidden;">
                    <div class="faq-question" style="padding:15px 20px;background:#f8f8f8;cursor:pointer;display:flex;justify-content:space-between;align-items:center;font-weight:600;font-size:16px;color:#1a1a2e;border-bottom:1px solid #e0e0e0;" onclick="toggleFaq(this)">
                        <span>{{ $faq->question }}</span>
                        <i class="fa fa-plus" style="font-size:14px;color:#4da8da;transition:transform 0.3s;"></i>
                    </div>
                    <div class="faq-answer" style="padding:0 20px;max-height:0;overflow:hidden;transition:all 0.3s ease;background:#fff;">
                        <div style="padding:15px 0;line-height:1.8;color:#555;">
                            {!! nl2br(e($faq->answer)) !!}
                        </div>
                    </div>
                </div>
                @empty
                <div class="text-center">
                    <p class="lead">No FAQs available yet. Please check back later.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    function toggleFaq(el) {
        var answer = el.nextElementSibling;
        var icon = el.querySelector('i');
        if (answer.style.maxHeight && answer.style.maxHeight !== '0px') {
            answer.style.maxHeight = '0';
            icon.className = 'fa fa-plus';
        } else {
            answer.style.maxHeight = answer.scrollHeight + 'px';
            icon.className = 'fa fa-minus';
        }
    }
</script>
@endpush

@endsection
