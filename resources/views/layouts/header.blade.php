<header>
    <div id="header-one" class="header-area header-fixed header-style-one">
        <div class="header-top-bar bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="header-address-textprimary">
                            <ul>
                                @if(setting('company_phone'))
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{{ setting('company_phone') }}">{{ setting('company_phone') }}</a>
                                </li>
                                @endif
                                @if(setting('company_phone2'))
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{{ setting('company_phone2') }}">{{ setting('company_phone2') }}</a>
                                </li>
                                @endif
                                @if(setting('company_email'))
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:{{ setting('company_email') }}">{{ setting('company_email') }}</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="header-social-textprimary">
                            <ul>
                                @if(setting('facebook_url'))
                                <li>
                                    <a target="_new" href="{{ setting('facebook_url') }}">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                @endif
                                @if(setting('instagram_url'))
                                <li>
                                    <a target="_new" href="{{ setting('instagram_url') }}">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                                @endif
                                @if(setting('linkedin_url'))
                                <li>
                                    <a target="_new" href="{{ setting('linkedin_url') }}">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                                @endif
                                @if(setting('youtube_url'))
                                <li>
                                    <a target="_new" href="{{ setting('youtube_url') }}">
                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-area bg-light" id="sticker">
            <div class="container container-fluid-sm">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-lg-2 col-md-3">
                        <div class="logo-area">
                            <a href="{{ route('home') }}" class="logo-dark" title="{{ setting('company_name', 'Nitin Hydraulics') }}">
                                <img src="{{ asset('frontend/images/logo.png') }}" alt="Logo - {{ setting('company_name', 'Nitin Hydraulics') }}" class="img-fluid" style="max-height:65px;" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 possition-static">
                        <div class="builder-main-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                        <a href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li class="{{ request()->routeIs('products*') || request()->routeIs('product*') ? 'active' : '' }}">
                                        <a href="#">Products</a>
                                        <ul class="rt-dropdown-menu">
                                            @php $navCategories = \App\Models\Category::where('status', true)->orderBy('sort_order')->get(); @endphp
                                            @foreach($navCategories as $cat)
                                            <li>
                                                <a href="{{ route('product.category', $cat->slug) }}" title="{{ setting('company_name', 'Nitin Hydraulics') }}">{{ $cat->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="{{ request()->routeIs('blog*') ? 'active' : '' }}">
                                        <a href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li class="{{ request()->routeIs('gallery') ? 'active' : '' }}">
                                        <a href="{{ route('gallery') }}">Gallery</a>
                                    </li>
                                    <li class="{{ request()->routeIs('certifications') ? 'active' : '' }}">
                                        <a href="{{ route('certifications') }}">Certifications</a>
                                    </li>
                                    <li class="{{ request()->routeIs('catalog.videos') ? 'active' : '' }}">
                                        <a href="{{ route('catalog.videos') }}">Catalog/Videos</a>
                                    </li>
                                    <li class="{{ request()->routeIs('faq') ? 'active' : '' }}">
                                        <a href="{{ route('faq') }}">FAQ</a>
                                    </li>
                                    <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                    <li>
                                        <a target="_new" href="{{ route('brochure') }}">Brochure</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .main-menu-area .logo-area { padding-left: 30px; margin-left: 60px; }
            .builder-main-menu { text-align: left; margin-left: 60px; }
            .builder-main-menu nav > ul > li > a { padding: 40px 10px; font-size: 13px; }
            @media (max-width: 1199px) {
                .builder-main-menu nav > ul > li > a { padding: 40px 7px; font-size: 12px; }
            }
            @media (max-width: 991px) {
                .builder-main-menu nav > ul > li > a { padding: 10px 7px; font-size: 12px; }
            }
        </style>
    </div>
</header>
