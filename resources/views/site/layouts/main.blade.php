<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{__('site.title')}}</title>
    <link rel="author" href="{{ asset ('humans.txt')}}"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset ('icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset ('icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset ('icons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset ('icons/safari-pinned-tab.svg') }}" color="#f8f8f8">
    <link rel="shortcut icon" href="{{ asset ('icons/favicon.ico') }}">
    <meta name="apple-mobile-web-app-title" content="E-Shop">
    <meta name="application-name" content="E-Shop">
    <meta name="msapplication-TileColor" content="#f8f8f8">
    <meta name="msapplication-TileImage" content="{{ asset ('icons/mstile-144x144.png') }}">
    <meta name="msapplication-config" content="{{ asset ('icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#f8f8f8">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <script src="{{ asset('js/site.js') }}"></script>
</head>
<body>
<!-- header-section-starts -->
<div class="header">
    <div class="header-top-strip">
        <div class="container">
            <div class="header-top-left">
                <ul>
                    <li><a href="{{ route('login') }}"><span
                                    class="glyphicon glyphicon-user"> </span>{{ __('site.nav-login') }}</a></li>
                    <li><a href="{{ route('register') }}"><span
                                    class="glyphicon glyphicon-lock"> </span>{{ __('site.nav-register') }}</a></li>
                </ul>
            </div>
            <div class="header-right">
                <div class="cart box_1">
                    <a href="{{ route('site.cart') }}">
                        <h3><span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity"
                                                                                 class="simpleCart_quantity"> 0 </span>)<img
                                    src="images/bag.png" alt=""></h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">{{ __('site.nav-empty-cart') }}</a></p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- header-section-ends -->
<div class="banner-top">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <h1><a href="{{ route('site.index') }}"><span>E</span> -Shop</a></h1>
                </div>
            </div>
            <!--/.navbar-header-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('site.index') }}">{{ __('site.nav-home') }}</a></li>
                    <li><a href="{{ route('site.men') }}">{{ __('site.nav-men') }}</a></li>
                    <li><a href="{{ route('site.women') }}">{{ __('site.nav-women') }}</a></li>
                    <li><a href="{{ route('site.kids') }}">{{ __('site.nav-kids') }}</a></li>
                    <li><a href="{{ route('site.accessories') }}">{{ __('site.nav-accessories') }}</a></li>
                    <li><a href="{{ route('site.contact') }}">{{ __('site.nav-contact') }}</a></li>
                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <!--/.navbar-->
    </div>
</div>
@yield('content')
<div class="news-letter">
    <div class="container">
        <div class="join">
            <h6>{{ __('site.subscribe-join-our-mailing-list') }}</h6>
            <div class="sub-left-right">
                <form method="post">
                    <input type="text" value="{{ __('site.subscribe-enter-your-email-here') }}" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = '{{ __('site.subscribe-enter-your-email-here') }}';}"/>
                    <input type="submit" value="{{ __('site.subscribe') }}"/>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="footer_top">
            <div class="span_of_4">
                <div class="col-md-3 span1_of_4">
                    <h4>{{ __('site.footer-shop') }}</h4>
                    <ul class="f_nav">
                        <li><a href="{{ route('site.new') }}">{{ __('site.footer-new-arrivals') }}</a></li>
                        <li><a href="{{ route('site.men') }}">{{ __('site.footer-men') }}</a></li>
                        <li><a href="{{ route('site.women') }}">{{ __('site.footer-women') }}</a></li>
                        <li><a href="{{ route('site.kids') }}">{{ __('site.footer-kids') }}</a></li>
                        <li><a href="{{ route('site.accessories') }}">{{ __('site.footer-accessories') }}</a></li>
                        <li><a href="{{ route('site.brands') }}">{{ __('site.footer-brands') }}</a></li>
                        <li><a href="{{ route('site.trends') }}">{{ __('site.footer-trends') }}</a></li>
                        <li><a href="{{ route('site.sale') }}">{{ __('site.footer-sale') }}</a></li>
                    </ul>
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>{{ __('site.footer-help') }}</h4>
                    <ul class="f_nav">
                        <li><a href="{{ route('site.faq') }}">{{ __('site.footer-faq') }}</a></li>
                        <li><a href="{{ route('site.help-men') }}">{{ __('site.footer-men') }}</a></li>
                        <li><a href="{{ route('site.help-women') }}">{{ __('site.footer-women') }}</a></li>
                        <li><a href="{{ route('site.help-kids') }}">{{ __('site.footer-kids') }}</a></li>
                        <li><a href="{{ route('site.help-accessories') }}">{{ __('site.footer-accessories') }}</a></li>
                        <li><a href="{{ route('site.help-brands') }}">{{ __('site.footer-brands') }}</a></li>
                    </ul>
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>{{ __('site.footer-account') }}</h4>
                    <ul class="f_nav">
                        <li><a href="{{ route('login') }}">{{ __('site.footer-login') }}</a></li>
                        <li><a href="{{ route('register') }}">{{ __('site.footer-create-an-account') }}</a></li>
                        <li><a href="{{ route('site.create-wishlist') }}">{{ __('site.footer-create-wishlist') }}</a></li>
                        <li><a href="{{ route('site.cart') }}">{{ __('site.footer-my-shopping-bag') }}</a></li>
                    </ul>
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>{{ __('site.footer-popular') }}</h4>
                    <ul class="f_nav">
                        <li><a href="{{ route('site.new') }}">{{ __('site.footer-new-arrivals') }}</a></li>
                        <li><a href="{{ route('site.men') }}">{{ __('site.footer-men') }}</a></li>
                        <li><a href="{{ route('site.women') }}">{{ __('site.footer-women') }}</a></li>
                        <li><a href="{{ route('site.kids') }}">{{ __('site.footer-kids') }}</a></li>
                        <li><a href="{{ route('site.accessories') }}">{{ __('site.footer-accessories') }}</a></li>
                        <li><a href="{{ route('site.brands') }}">{{ __('site.footer-brands') }}</a></li>
                        <li><a href="{{ route('site.trends') }}">{{ __('site.footer-trends') }}</a></li>
                        <li><a href="{{ route('site.sale') }}">{{ __('site.footer-sale') }}</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="cards text-center">
            <img src="{{ asset('images/cards.jpg') }}" alt=""/>
        </div>
        <div class="copyright text-center">
            <p>{{ __('site.title') }} ©{{ date('Y') }}. {{__('site.all-rights-reserved')}}</p>
        </div>
    </div>
</div>
</body>
</html>