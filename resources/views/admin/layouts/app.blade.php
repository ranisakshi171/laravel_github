<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - {{ setting('company_name', 'Technocrat Engineering') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/owlcarousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/meanmenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/static/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/static/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/static/css/share.css') }}">
    <style>
        /* Admin-specific overrides using frontend theme */
        body { background: #f4f4f4; }
        .admin-wrapper { display: flex; min-height: calc(100vh - 130px); }
        .admin-sidebar {
            width: 260px;
            background: #1a1a2e;
            color: #fff;
            flex-shrink: 0;
            min-height: 100%;
            padding-top: 0;
        }
        .admin-sidebar .sidebar-header {
            padding: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            text-align: center;
        }
        .admin-sidebar .sidebar-header h3 { color: #4da8da; margin: 0; font-size: 18px; }
        .admin-sidebar .sidebar-header small { color: rgba(255,255,255,0.6); font-size: 12px; }
        .admin-sidebar .sidebar-menu { padding: 0; margin: 0; list-style: none; }
        .admin-sidebar .sidebar-menu li { list-style: none; }
        .admin-sidebar .sidebar-menu li a {
            display: block;
            padding: 12px 20px;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            border-left: 3px solid transparent;
            transition: all 0.3s;
            font-size: 14px;
        }
        .admin-sidebar .sidebar-menu li a:hover,
        .admin-sidebar .sidebar-menu li a.active {
            background: rgba(255,255,255,0.05);
            color: #4da8da;
            border-left-color: #4da8da;
        }
        .admin-sidebar .sidebar-menu li a i { margin-right: 10px; width: 20px; text-align: center; }
        .admin-content {
            flex: 1;
            padding: 25px 30px;
            background: #f4f4f4;
            min-height: 100%;
        }
        .admin-top-bar {
            background: #fff;
            padding: 15px 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        .admin-top-bar h4 { margin: 0; font-size: 18px; color: #1a1a2e; font-weight: 700; }
        .admin-top-bar .user-info { display: flex; align-items: center; gap: 15px; }
        .admin-top-bar .user-info span { color: #555; font-size: 14px; }
        .admin-top-bar .user-info a { color: #4da8da; font-size: 16px; }
        .card { border-radius: 0; border: none; box-shadow: 0 0 20px rgba(0,0,0,0.05); margin-bottom: 25px; }
        .card-header {
            background: #1a1a2e;
            color: #fff;
            border-bottom: none;
            padding: 14px 20px;
            font-weight: 600;
            font-size: 15px;
        }
        .card-body { padding: 20px; }
        .btn { border-radius: 0; padding: 8px 20px; font-size: 14px; font-weight: 500; }
        .btn-primary { background: #4da8da; border-color: #4da8da; color: #1a1a2e; font-weight: 600; }
        .btn-primary:hover { background: #3a8ab8; border-color: #3a8ab8; color: #1a1a2e; }
        .btn-danger { background: #dc3545; border-color: #dc3545; }
        .btn-info { background: #17a2b8; border-color: #17a2b8; color: #fff; }
        .btn-sm { padding: 5px 12px; font-size: 12px; }
        .table { margin: 0; }
        .table th {
            border-top: none;
            background: #f8f8f8;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            color: #1a1a2e;
        }
        .table td { vertical-align: middle; font-size: 14px; }
        .badge { border-radius: 0; padding: 5px 10px; font-size: 11px; font-weight: 500; }
        .badge-success { background: #28a745; color: #fff; }
        .badge-warning { background: #4da8da; color: #1a1a2e; }
        .badge-info { background: #17a2b8; color: #fff; }
        .badge-secondary { background: #6c757d; color: #fff; }
        .form-control { border-radius: 0; height: 45px; border: 1px solid #ddd; font-size: 14px; }
        .form-control:focus { border-color: #4da8da; box-shadow: none; }
        textarea.form-control { height: 120px; }
        select.form-control { height: 45px; }
        .alert { border-radius: 0; }
        .page-header-title { font-size: 24px; font-weight: 700; color: #1a1a2e; margin-bottom: 20px; }
        .stat-card {
            background: #fff;
            padding: 25px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
            text-align: center;
            margin-bottom: 20px;
            border-top: 3px solid #4da8da;
        }
        .stat-card .icon { font-size: 36px; color: #4da8da; margin-bottom: 10px; }
        .stat-card h3 { font-size: 32px; font-weight: 700; margin: 0; color: #1a1a2e; }
        .stat-card p { color: #666; margin: 5px 0 0; font-size: 14px; }
        .action-btns { display: flex; gap: 5px; }
        .action-btns form { display: inline; }
        .table-img { width: 60px; height: 60px; object-fit: cover; }
        .pagination { margin: 0; }
        .pagination .page-link { color: #1a1a2e; border-radius: 0 !important; }
        .pagination .page-item.active .page-link { background: #4da8da; border-color: #4da8da; color: #1a1a2e; }
        .modal-header { background: #1a1a2e; color: #fff; border-radius: 0; }
        .modal-header .close { color: #fff; }
        .modal-content { border-radius: 0; border: none; }
        .footer-area-top { padding: 50px 0 30px; }
        .footer-area-bottom { padding: 15px 0; }
        @media (max-width: 768px) {
            .admin-sidebar { width: 200px; display: none; }
            .admin-sidebar.show { display: block; position: fixed; z-index: 999; height: 100vh; }
            .admin-content { padding: 15px; }
        }
        .sidebar-toggle { display: none; cursor: pointer; color: #1a1a2e; font-size: 20px; padding: 5px; }
        @media (max-width: 768px) {
            .sidebar-toggle { display: inline-block; }
        }
    </style>
    @stack('styles')
</head>
<body>
    <div id="wrapper">
        <!-- Frontend Header with Theme -->
        <header>
            <div id="header-one" class="header-area header-fixed header-style-one">
                <div class="header-top-bar bg-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="header-address-textprimary">
                                    <ul>
                                        @if(setting('company_phone'))
                                        <li><i class="fa fa-phone"></i><a href="tel:{{ setting('company_phone') }}">{{ setting('company_phone') }}</a></li>
                                        @endif
                                        @if(setting('company_phone2'))
                                        <li><i class="fa fa-phone"></i><a href="tel:{{ setting('company_phone2') }}">{{ setting('company_phone2') }}</a></li>
                                        @endif
                                        @if(setting('company_email'))
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:{{ setting('company_email') }}">{{ setting('company_email') }}</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="header-social-textprimary">
                                    <ul>
                                        @if(setting('facebook_url'))
                                        <li><a target="_new" href="{{ setting('facebook_url') }}"><i class="fa fa-facebook"></i></a></li>
                                        @endif
                                        @if(setting('instagram_url'))
                                        <li><a target="_new" href="{{ setting('instagram_url') }}"><i class="fa fa-instagram"></i></a></li>
                                        @endif
                                        @if(setting('linkedin_url'))
                                        <li><a target="_new" href="{{ setting('linkedin_url') }}"><i class="fa fa-linkedin"></i></a></li>
                                        @endif
                                        @if(setting('youtube_url'))
                                        <li><a target="_new" href="{{ setting('youtube_url') }}"><i class="fa fa-youtube-play"></i></a></li>
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
                            <div class="col-lg-4 col-md-4">
                                <div class="logo-area">
                                    <a href="{{ route('home') }}" class="logo-dark" title="{{ setting('company_name') }}">
                                        <img src="{{ asset('frontend/images/logo.png') }}" alt="{{ setting('company_name') }}" class="img-fluid" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 possition-static">
                                <div class="builder-main-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                                            <li><a href="{{ route('admin.sliders.index') }}">Sliders</a></li>
                                            <li><a href="{{ route('admin.categories.index') }}">Categories</a></li>
                                            <li><a href="{{ route('admin.products.index') }}">Products</a></li>
                                            <li><a href="{{ route('admin.blogs.index') }}">Blogs</a></li>
                                            <li><a href="{{ route('admin.pages.index') }}">Pages</a></li>
                                            <li><a href="{{ route('admin.settings.index') }}"><i class="fa fa-gears"></i> Settings</a></li>
                                            <li><a href="{{ route('home') }}" target="_blank"><i class="fa fa-external-link"></i> Site</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Admin Content Area -->
        <div class="admin-wrapper">
            <!-- Sidebar -->
            <div class="admin-sidebar" id="adminSidebar">
                <div class="sidebar-header">
                    <h3>{{ setting('company_name') }}</h3>
                    <small>Admin Panel</small>
                </div>
                <ul class="sidebar-menu">
                    <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="{{ route('admin.sliders.index') }}" class="{{ request()->routeIs('admin.sliders*') ? 'active' : '' }}"><i class="fa fa-image"></i> Sliders</a></li>
                    <li><a href="{{ route('admin.categories.index') }}" class="{{ request()->routeIs('admin.categories*') ? 'active' : '' }}"><i class="fa fa-list"></i> Categories</a></li>
                    <li><a href="{{ route('admin.products.index') }}" class="{{ request()->routeIs('admin.products*') ? 'active' : '' }}"><i class="fa fa-cogs"></i> Products</a></li>
                    <li><a href="{{ route('admin.blogs.index') }}" class="{{ request()->routeIs('admin.blogs*') ? 'active' : '' }}"><i class="fa fa-file-text"></i> Blogs</a></li>
                    <li><a href="{{ route('admin.pages.index') }}" class="{{ request()->routeIs('admin.pages*') ? 'active' : '' }}"><i class="fa fa-files-o"></i> Pages</a></li>
                    <li><a href="{{ route('admin.contacts.index') }}" class="{{ request()->routeIs('admin.contacts*') ? 'active' : '' }}"><i class="fa fa-envelope"></i> Contacts</a></li>
                    <li><a href="{{ route('admin.testimonials.index') }}" class="{{ request()->routeIs('admin.testimonials*') ? 'active' : '' }}"><i class="fa fa-comments"></i> Testimonials</a></li>
                    <li><a href="{{ route('admin.counters.index') }}" class="{{ request()->routeIs('admin.counters*') ? 'active' : '' }}"><i class="fa fa-bar-chart"></i> Counters</a></li>
                    <li><a href="{{ route('admin.about.index') }}" class="{{ request()->routeIs('admin.about*') ? 'active' : '' }}"><i class="fa fa-info-circle"></i> About Us</a></li>
                    <li><a href="{{ route('admin.settings.index') }}" class="{{ request()->routeIs('admin.settings*') ? 'active' : '' }}"><i class="fa fa-gears"></i> Settings</a></li>
                    <li style="border-top:1px solid rgba(255,255,255,0.1);margin-top:10px;padding-top:10px;">
                        <a href="{{ route('home') }}" target="_blank"><i class="fa fa-external-link"></i> View Site</a>
                    </li>
                    <li>
                        <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="admin-content">
                <div class="admin-top-bar">
                    <div>
                        <span class="sidebar-toggle" onclick="document.getElementById('adminSidebar').classList.toggle('show')">
                            <i class="fa fa-bars"></i>
                        </span>
                        <h4 style="display:inline-block;margin-left:10px;">@yield('page-title', 'Dashboard')</h4>
                    </div>
                    <div class="user-info">
                        <span>{{ auth()->user()->name }}</span>
                        <a href="{{ route('home') }}" target="_blank" title="View Site"><i class="fa fa-external-link"></i></a>
                        <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="Logout" style="color:#dc3545;"><i class="fa fa-sign-out"></i></a>
                    </div>
                </div>

                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                @endif

                @yield('content')
            </div>
        </div>

        <!-- Frontend Footer with Theme -->
        <footer>
            <div class="footer-area-top" style="padding:50px 0 30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-box">
                                <div class="footer-logo">
                                    <a href="{{ route('home') }}" title="{{ setting('company_name') }}">
                                        <img src="{{ asset('frontend/images/footer-logo.png') }}" alt="{{ setting('company_name') }}" class="img-fluid" />
                                    </a>
                                </div>
                                <div class="footer-about">
                                    <p>&#x0201C;{{ setting('company_name') }}&#x0201D; are the leading manufacturer of a wide range of Fly Ash Brick Making Machine, Block Making Machine, Vibro Forming Table, Interlocking Brick Making Machine, etc. We also offer Fly Ash Bricks Machine Installation Service.</p>
                                </div>
                                <ul class="footer-social">
                                    @if(setting('facebook_url'))<li><a target="_new" href="{{ setting('facebook_url') }}"><i class="fa fa-facebook"></i></a></li>@endif
                                    @if(setting('instagram_url'))<li><a target="_new" href="{{ setting('instagram_url') }}"><i class="fa fa-instagram"></i></a></li>@endif
                                    @if(setting('linkedin_url'))<li><a target="_new" href="{{ setting('linkedin_url') }}"><i class="fa fa-linkedin"></i></a></li>@endif
                                    @if(setting('youtube_url'))<li><a target="_new" href="{{ setting('youtube_url') }}"><i class="fa fa-youtube-play"></i></a></li>@endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-box">
                                <h3 class="title-bar-footer">Quick Links</h3>
                                <ul class="recent-post-link">
                                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                    <li><a href="{{ route('admin.products.index') }}">Products</a></li>
                                    <li><a href="{{ route('admin.blogs.index') }}">Blogs</a></li>
                                    <li><a href="{{ route('admin.contacts.index') }}">Contacts</a></li>
                                    <li><a href="{{ route('admin.settings.index') }}">Settings</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-box">
                                <h3 class="title-bar-footer">Product Links</h3>
                                <ul class="quick-link">
                                    @php $footerCats = \App\Models\Category::where('status', true)->orderBy('sort_order')->get(); @endphp
                                    @foreach($footerCats as $cat)
                                    <li><a href="{{ route('product.category', $cat->slug) }}">{{ $cat->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-box">
                                <h3 class="title-bar-footer">Information</h3>
                                <ul class="corporate-address">
                                    @if(setting('company_address'))
                                    <li><i class="fa fa-map-marker"></i>{{ setting('company_address') }},<br>{{ setting('company_city') }}, {{ setting('company_state') }} - {{ setting('company_pincode') }}.</li>
                                    @endif
                                    @if(setting('company_phone'))<li><i class="fa fa-phone"></i><a href="tel:{{ setting('company_phone') }}">{{ setting('company_phone') }}</a></li>@endif
                                    @if(setting('company_phone2'))<li><i class="fa fa-phone"></i><a href="tel:{{ setting('company_phone2') }}">{{ setting('company_phone2') }}</a></li>@endif
                                    @if(setting('company_email'))<li><i class="fa fa-envelope-o"></i><a href="mailto:{{ setting('company_email') }}">{{ setting('company_email') }}</a></li>@endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <p>&#x000A9; {{ date('Y') }} {{ setting('company_name') }}. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('frontend/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.knob.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend/js/switch-style.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/static/js/fancybox.umd.js') }}"></script>
    <script src="{{ asset('frontend/static/js/share.js') }}"></script>
    <script src="{{ asset('frontend/static/js/jquery.validate.min.js') }}"></script>
    <script>
        // Fix header overlap with admin content
        $(document).ready(function() {
            var headerHeight = $('#header-one').outerHeight();
            $('.admin-wrapper').css('margin-top', headerHeight + 'px');
            $('.admin-sidebar').css('top', headerHeight + 'px');
        });
        $(window).resize(function() {
            var headerHeight = $('#header-one').outerHeight();
            $('.admin-wrapper').css('margin-top', headerHeight + 'px');
            $('.admin-sidebar').css('top', headerHeight + 'px');
        });
    </script>
    @stack('scripts')
</body>
</html>
