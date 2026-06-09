@extends('layouts.app')

@section('title', 'Contact Us - ' . setting('company_name'))
@section('meta_description', 'Fly Ash Bricks Machine Manufacturers in Tamilnadu, Fly Ash Brick Machine Manufacturers in Tamilnadu, Fully Automatic Fly Ash Bricks Machine in Tamilnadu')

@section('content')

<!-- Inner Page Banner Area Start Here -->
<section class="m360-page-banner">
    <img class="m360-banner-image" src="{{ asset('frontend/images/banners/pg-banner.jpg') }}" alt="Fly Ash Bricks Machine Manufacturers in Tamilnadu" />
    <div class="m360-banner-content">
        <h1 class="m360-page-title">Contact Us</h1>
    </div>
</section>

<div class="m360-breadcrumb">
    <div class="m360-breadcrumb-container">
        <div class="m360-breadcrumb-content">
            <p><a href="{{ route('home') }}">HOME</a> &#x02B9A; <span>CONTACT US</span></p>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->

<!-- Contact Area Start Here -->
<section class="section-space-less30 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 mb-30">
                <div class="contact-info-area">
                    <h2 class="section-title-dark text-left title-bar-primary">Contact Information</h2>
                    <p>Nitin Hydraulics is a leading manufacturer of Fly Ash Brick Machines, Pan Mixers, Vibro Forming Tables, Block Making Machines, and Interlocking Brick Making Machines. Contact us for reliable and cost-effective machinery tailored to your needs.</p>
                    <ul class="company-information">
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> 1805, Industrial Area, Near Pandit Shree Ram Sharma Metro Station,<br>
Bahadurgarh, Haryana—124507, India.</li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+91-8796265233">+91-8796265233</a></li>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@nitinhydraulics.com">info@nitinhydraulics.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 mb-30">
                <div class="contact-form-area">
                    <h2 class="section-title-dark text-left title-bar-primary">Send Us Message</h2>
                    <form enctype="multipart/form-data" class="form" id="contactForm" method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row gutters-15">
                            <div class="col-md-6 col-12 form-group">
                                <input type="text" placeholder="Name / Company Name *" class="form-control" name="contact_name" value="{{ old('contact_name') }}" required />
                                <div class="help-block with-errors">
                                    @error('contact_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12 form-group">
                                <div class="input-container">
                                    <input type="tel" id="phone" class="form-control" name="contact_phone" autocomplete="off" onpaste="return false;" placeholder="Contact No." required />
                                </div>
                                <div class="help-block with-errors">
                                    @error('contact_phone') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12 form-group">
                                <input type="email" placeholder="E-mail *" class="form-control" name="contact_email" value="{{ old('contact_email') }}" required />
                                <div class="help-block with-errors">
                                    @error('contact_email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12 form-group">
                                <input type="text" placeholder="Your Location *" class="form-control" name="contact_location" value="{{ old('contact_location') }}" required />
                                <div class="help-block with-errors">
                                    @error('contact_location') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <textarea placeholder="Your Requirement *" class="textarea form-control" name="contact_message" rows="7" cols="20">{{ old('contact_message') }}</textarea>
                                @error('contact_message') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-12 form-group">
                                <button id="contact-submit" type="submit" class="fill-btn">Send Now</button>
                            </div>
                        </div>
                    </form>
                    @if(session('success'))
                    <div class="alert alert-success mt-3">{{ session('success') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area End Here -->

<!-- Google Map Area Start Here -->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15664.089500691933!2d76.972862!3d11.036948!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x27dbe55e7fc90b5c!2sTechnocrat%20Engineering!5e0!3m2!1sen!2sin!4v1664524485104!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<!-- Google Map Area End Here -->

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
