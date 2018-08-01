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
                                    class="glyphicon glyphicon-user"> </span>{{ __('site.login') }}</a></li>
                    <li><a href="{{ route('register') }}"><span
                                    class="glyphicon glyphicon-lock"> </span>{{ __('site.register') }}</a></li>
                </ul>
            </div>
            <div class="header-right">
                <div class="cart box_1">
                    <a href="{{ route('site.cart') }}">
                        <h3><span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity"
                                                                                 class="simpleCart_quantity"> 0 </span>)<img
                                    src="images/bag.png" alt=""></h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">{{ __('site.empty-cart') }}</a></p>
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
                    <li><a href="{{ route('site.index') }}">{{ __('site.home') }}</a></li>
                    <li><a href="{{ route('site.men') }}">{{ __('site.men') }}</a></li>
                    <li><a href="{{ route('site.women') }}">{{ __('site.women') }}</a></li>
                    <li><a href="{{ route('site.kids') }}">{{ __('site.kids') }}</a></li>
                    <li><a href="{{ route('site.accessories') }}">{{ __('site.accessories') }}</a></li>
                    <li><a href="{{ route('site.contact') }}">{{ __('site.contact') }}</a></li>
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
            <h6>{{ __('site.join-our-mailing-list') }}</h6>
            <div class="sub-left-right">
                <form method="post">
                    <input type="text" value="{{ __('site.enter-your-email-here') }}" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = '{{ __('site.enter-your-email-here') }}';}"/>
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
                    <h4>Shop</h4>
                    <ul class="f_nav">
                        <li><a href="{{ route('site.new') }}">New arrivals</a></li>
                        <li><a href="{{ route('site.men') }}">Men</a></li>
                        <li><a href="{{ route('site.women') }}">Women</a></li>
                        <li><a href="{{ route('site.kids') }}">Kids</a></li>
                        <li><a href="{{ route('site.accessories') }}">Accessories</a></li>
                        <li><a href="{{ route('site.brands') }}">Brands</a></li>
                        <li><a href="{{ route('site.trends') }}">Trends</a></li>
                        <li><a href="{{ route('site.sale') }}">Sale</a></li>
                    </ul>
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>Help</h4>
                    <ul class="f_nav">
                        <li><a href="{{ route('site.faq') }}">Frequently asked questions</a></li>
                        <li><a href="{{ route('site.help-men') }}">Men</a></li>
                        <li><a href="{{ route('site.help-women') }}">Women</a></li>
                        <li><a href="{{ route('site.help-kids') }}">Kids</a></li>
                        <li><a href="{{ route('site.help-accessories') }}">Accessories</a></li>
                        <li><a href="{{ route('site.help-brands') }}">Brands</a></li>
                    </ul>
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>{{ __('site.account') }}</h4>
                    <ul class="f_nav">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Create an account</a></li>
                        <li><a href="#">Create wishlist</a></li>
                        <li><a href="{{ route('site.cart') }}">My shopping bag</a></li>
                        <li><a href="#">Brands</a></li>
                        <li><a href="#">Create wishlist</a></li>
                    </ul>
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>popular</h4>
                    <ul class="f_nav">
                        <li><a href="{{ route('site.new') }}">New arrivals</a></li>
                        <li><a href="{{ route('site.men') }}">Men</a></li>
                        <li><a href="{{ route('site.women') }}">Women</a></li>
                        <li><a href="{{ route('site.kids') }}">Kids</a></li>
                        <li><a href="{{ route('site.accessories') }}">Accessories</a></li>
                        <li><a href="{{ route('site.brands') }}">Brands</a></li>
                        <li><a href="{{ route('site.trends') }}">Trends</a></li>
                        <li><a href="{{ route('site.sale') }}">Sale</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="cards text-center">
            <img src="images/cards.jpg" alt=""/>
        </div>
        <div class="copyright text-center">
            <p>{{ __('site.title') }} ©{{ date('Y') }}. {{__('site.all-rights-reserved')}}</p>
        </div>
    </div>
</div>
</body>
</html>