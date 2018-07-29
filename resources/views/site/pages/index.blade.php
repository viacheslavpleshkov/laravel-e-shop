@extends('site.layouts.main')

@section('title', __('site.home'))

@section('content')
    <div class="banner">
        <div class="container">
            <div class="banner-matter">
                <h1>Get active get running<span>push your limits</h1>
                <div class="out">
                    <a href="single.html" class="find">FIND OUT MORE </a>
                    <a href="single.html" class="shop">SHOP</a>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <div class="content">
        <div class="sport-your">
            <!-- requried-jsfiles-for owl -->
            <link href="css/owl.carousel.css" rel="stylesheet">
            <script src="js/owl.carousel.js"></script>
            <script>
                $(document).ready(function() {
                    $("#owl-demo").owlCarousel({
                        items : 5,
                        lazyLoad : true,
                        autoPlay : true,
                        navigation : true,
                        navigationText :  true,
                        pagination : false,
                    });
                });
            </script>
            <!-- //requried-jsfiles-for owl -->

            <!-- start content_slider -->
            <div class="line1">

            </div>
            <div id="example1">
                <div id="owl-demo" class="owl-carousel text-center">
                    <div class="item">
                        <a href="{{ route('site.running') }}" title="image" rel="title1">
                            <img class="img-responsive " src="images/pic.jpg" alt="">
                            <div class="run">
                                <i class="running"> </i>
                                <p>RUNNING</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ route('site.football') }}" title="image" rel="title1">
                            <img class="img-responsive " src="images/pic1.jpg" alt="">
                            <div class="run">
                                <i class="foot-in"> </i>
                                <p>FOOTBALL</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ route('site.cycling') }}" title="image" rel="title1">
                            <img class="img-responsive " src="images/pic2.jpg" alt="">
                            <div class="run">
                                <i class="cycling"> </i>
                                <p>CYCLING</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ route('site.fitness') }}" title="image" rel="title1">
                            <img class="img-responsive " src="images/pic3.jpg" alt="">
                            <div class="run">
                                <i class="fitness"> </i>
                                <p>FITNESS</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ route('site.tennis') }}" title="image" rel="title1">
                            <img class="img-responsive " src="images/pic4.jpg" alt="">
                            <div class="run">
                                <i class="tennis"> </i>
                                <p>TENNIS</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <h6 class="your-in">Your sport</h6>
            <div class="line2">

            </div>
        </div>
        <!--//sreen-gallery-cursual---->
        <div class="content-grids">

            <div class="col-md-4 content-grid">
                <a href="single.html" class="lot"><img class="img-responsive " src="images/sh.png" alt=""></a>
                <div class="shoe">
                    <p>Nike 3.0 V4 Men Grey Royal
                        Blue with White</p>
                    <label>$67.99</label>
                    <a href="single.html">find a store</a>
                </div>
                <div class="clearfix"> </div>
                <b class="plus-in">+</b>
            </div>
            <div class="col-md-4 content-grid">
                <a href="single.html" class="lot"><img class="img-responsive " src="images/sh1.png" alt=""></a>
                <div class="shoe">
                    <p>Nike 3.0 V4 Men Grey RoyalBlue with White</p>
                    <label>$67.99</label>
                    <a href="single.html">find a store</a>
                </div>
                <div class="clearfix"> </div>
                <b class="plus-in">+</b>
            </div>
            <div class="col-md-4 content-grid">
                <a href="single.html" class="lot"><img class="img-responsive " src="images/sh2.png" alt=""></a>
                <div class="shoe">
                    <p>Nike 3.0 V4 Men Grey RoyalBlue with White</p>
                    <label>$67.99</label>
                    <a href="single.html">find a store</a>
                </div>

                <div class="clearfix"> </div>
                <b class="plus-in">+</b>
            </div>

            <div class="clearfix"> </div>
        </div>
        <!---->
        <div class="content-top">
            <div class="col-md-4 top-content">
                <a href="single.html"><img class="img-responsive " src="images/pi.jpg" alt=""></a>
            </div>
            <div class="col-md-4 top-content">
                <a href="single.html"><img class="img-responsive " src="images/pi1.jpg" alt=""></a>
            </div>
            <div class="col-md-4 top-content">
                <a href="single.html"><img class="img-responsive " src="images/pi2.jpg" alt=""></a>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
@endsection