<footer>
    <div class="footer-area-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-box">
                        <div class="footer-logo">
                            <a href="{{ route('home') }}" title="{{ setting('company_name', 'Technocrat Engineering') }}">
                                <img src="{{ asset('frontend/images/footer-logo.png') }}" alt="Logo - {{ setting('company_name', 'Technocrat Engineering') }}" class="img-fluid" />
                            </a>
                        </div>
                        <div class="footer-about">
                            <p>&#x0201C;{{ setting('company_name', 'Technocrat Engineering') }}&#x0201D; are the leading manufacturer of a wide range of Fly Ash Brick Making Machine, Block Making Machine, Vibro Forming Table, Interlocking Brick Making Machine, etc. We also offer Fly Ash Bricks Machine Installation Service.</p>
                        </div>
                        <ul class="footer-social">
                            @if(setting('facebook_url'))
                            <li><a target="_new" href="{{ setting('facebook_url') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            @endif
                            @if(setting('instagram_url'))
                            <li><a target="_new" href="{{ setting('instagram_url') }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            @endif
                            @if(setting('linkedin_url'))
                            <li><a target="_new" href="{{ setting('linkedin_url') }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            @endif
                            @if(setting('youtube_url'))
                            <li><a target="_new" href="{{ setting('youtube_url') }}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-box">
                        <h3 class="title-bar-footer">Useful Links</h3>
                        <ul class="recent-post-link">
                            <li><a href="{{ route('about') }}">Company Profile</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('page', 'sitemap') }}">Sitemap</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a target="_new" href="{{ route('brochure') }}">Brochure</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-box">
                        <h3 class="title-bar-footer">Product Links</h3>
                        <ul class="quick-link">
                            @php $footerCats = \App\Models\Category::where('status', true)->orderBy('sort_order')->get(); @endphp
                            @foreach($footerCats as $cat)
                            <li>
                                <a href="{{ route('product.category', $cat->slug) }}">{{ $cat->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-box">
                        <h3 class="title-bar-footer">Information</h3>
                        <ul class="corporate-address">
                            @if(setting('company_address'))
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>{{ setting('company_address') }},<br>
                                {{ setting('company_city') }}, {{ setting('company_state') }},<br>
                                {{ setting('company_city2') ?? '' }} - {{ setting('company_pincode') }}.
                            </li>
                            @endif
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
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <p>&#x000A9; {{ date('Y') }} {{ setting('company_name', 'Technocrat Engineering') }}. All Rights Reserved.</p>
        </div>
    </div>
</footer>
