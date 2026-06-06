<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - {{ setting('company_name') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f4f4f4;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .login-wrapper {
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .login-body {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }
        .login-box {
            background: #fff;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 420px;
            border-top: 4px solid #4da8da;
        }
        .login-box h2 {
            text-align: center;
            margin-bottom: 10px;
            color: #1a1a2e;
            font-size: 28px;
            font-weight: 700;
        }
        .login-box h2 span { color: #4da8da; }
        .login-box .sub-title {
            text-align: center;
            color: #888;
            margin-bottom: 30px;
            font-size: 14px;
        }
        .form-control {
            height: 50px;
            border-radius: 0;
            border: 1px solid #ddd;
        }
        .form-control:focus { border-color: #4da8da; box-shadow: none; }
        .btn-login {
            background: #4da8da;
            color: #1a1a2e;
            font-weight: 600;
            text-transform: uppercase;
            height: 50px;
            border: none;
            width: 100%;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 15px;
        }
        .btn-login:hover { background: #3a8ab8; }
        .alert { border-radius: 0; }
        .login-logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-logo img { max-height: 60px; }
        .header-top-bar { position: relative !important; }
        @media (max-width: 768px) {
            .login-box { padding: 25px; }
            .header-address-textprimary ul li { font-size: 12px; }
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="header-top-bar bg-dark" style="position: relative !important; width: 100%;">
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
                </div>
            </div>
        </div>
        <div class="login-body">
            <div class="login-box">
                <div class="login-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="{{ setting('company_name') }}" />
                    </a>
                </div>
                <h2><span>Admin</span> Login</h2>
                <p class="sub-title">Sign in to manage your website</p>
                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <p class="mb-0">{{ $error }}</p>
                    @endforeach
                </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="remember"> Remember Me</label>
                    </div>
                    <button type="submit" class="btn-login">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
