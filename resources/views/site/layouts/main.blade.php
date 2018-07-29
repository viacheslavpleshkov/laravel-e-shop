<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Пік Анаконди</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header-->
<div class="line">

</div>
<div class="header">
    <div class="logo">
        <a href="{{ route('site.index') }}"><img src="images/logo.png" alt="" ></a>
    </div>
    <div  class="header-top">
        <div class="header-grid">
            <ul class="header-in">
                <li ><a href="account.html">My Account   </a> </li>
                <li>
                    <select class="in-drop">
                        <option value="Dollars" class="in-of">Dollars</option>
                        <option value="Euro" class="in-of">Euro</option>
                        <option value="Yen" class="in-of">Yen</option>
                    </select>
                </li>
            </ul>
            <div class="search-box">
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"> </span>
                    </form>
                </div>
            </div>
            <!-- search-scripts -->
            <script src="js/classie.js"></script>
            <script src="js/uisearch.js"></script>
            <script>
                new UISearch( document.getElementById( 'sb-search' ) );
            </script>
            <!-- //search-scripts -->
            <div class="online">
                <a href="single.html" >SHOP ONLINE</a>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="header-bottom">
            <div class="h_menu4"><!-- start h_menu4 -->
                <a class="toggleMenu" href="#">Menu</a>
                <ul class="nav">
                    <li class="active"><a href="{{ route('site.index') }}">Home</a></li>
                    <li><a href="{{ route('site.running') }}">Running</a></li>
                    <li><a href="{{ route('site.football') }}">Football</a></li>
                    <li><a href="{{ route('site.cycling') }}">Cycling</a></li>
                    <li><a href="{{ route('site.fitness') }}">Fitness</a></li>
                    <li><a href="{{ route('site.tennis') }}">Tennis</a></li>
                    <li><a href="{{ route('site.contact') }}">Contact</a></li>
                </ul>
                <script type="text/javascript" src="js/nav.js"></script>
            </div><!-- end h_menu4 -->

            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!---->
@yield('content')
<!--footer-->
<div class="footer">
    <div class="col-md-3 footer-left">
        <h4>Sports</h4>
        <div class="run-top">
            <ul class="run-grid">
                <li><a href="product.html">RUNNING</a></li>
                <li><a href="product.html">CYCLING</a></li>
                <li><a href="product.html">TRIATHLON</a></li>
                <li><a href="product.html">FITNESS</a></li>
                <li><a href="product.html">TENNIS</a></li>
                <li><a href="product.html">MORE SPORTS</a></li>
            </ul>
            <ul class="run-grid">
                <li><a href="product.html">STYLE</a></li>
                <li><a href="product.html">SPECIAL</a></li>
                <li><a href="product.html">BRAND EVENTS</a></li>
            </ul>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 footer-left left-footer">
        <h4>Latest</h4>
        <div class="run-top top-run">
            <ul class="run-grid">
                <li><a href="#">News & Events</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="single.html">Shopping</a></li>
                <li><a href="#">Sponsorships</a></li>
                <li><a href="#">more sports</a></li>
            </ul>
            <ul class="run-grid">
                <li><a href="#">Clubs and Training</a></li>
                <li><a href="contact.html">Event Map</a></li>
                <li><a href="#">Challange the world</a></li>
            </ul>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-2 footer-left left-footer">
        <h4>Your Account</h4>
        <ul class="run-grid-in">
            <li><a href="account.html">Login</a></li>
            <li><a href="#">My Sports</a></li>
            <li><a href="#">My Events</a></li>
        </ul>
    </div>
    <div class="col-md-4 footer-left left-footer">
        <ul class="social-in">
            <li><a href="#"><i> </i></a></li>
            <li><a href="#"><i class="youtube"> </i></a></li>
            <li><a href="#"><i class="facebook"> </i></a></li>
            <li><a href="#"><i class="twitter"> </i></a></li>
        </ul>
        <div class="letter">
            <h5>NEWSLETTER</h5>
            <span>in the next article</span>
            <h6>NRL: five things we learned this weekend</h6>
            <p>In support of suburban games; Warriors rip</p>
            <a href="register.html" class="sign">SIGN UP AND GET MORE</a>
            <p class="footer-class">Sport ©{{ date('Y') }}. All rights reserved.</p>
        </div>

    </div>
    <div class="clearfix"> </div>
</div>
</body>
</html>