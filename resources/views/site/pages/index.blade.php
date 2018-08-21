@extends('site.layouts.main')

@section('title',__('site.home-title'))

@section('content')
    <div class="banner">
        <div class="container">
            <div class="banner-bottom">
                <div class="banner-bottom-left">
                    <h2>B<br>U<br>Y</h2>
                </div>
                <div class="banner-bottom-right">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider4">
                            <li>
                                <div class="banner-info">
                                    <h3>{{ __('site.home-smart-but-casual') }}</h3>
                                    <p>Start your shopping here...</p>
                                </div>
                            </li>
                            <li>
                                <div class="banner-info">
                                    <h3>Shop Online</h3>
                                    <p>Start your shopping here...</p>
                                </div>
                            </li>
                            <li>
                                <div class="banner-info">
                                    <h3>Pack your Bag</h3>
                                    <p>Start your shopping here...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="shop">
                <a href="single.html">SHOP COLLECTION NOW</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-content">
            <div class="online-strip">
                <div class="col-md-4 online-order">
                    <h3>Write to us</h3>
                    <h3>Email: {{ $setting->email }}</h3>
                </div>
                <div class="col-md-4 shipping-grid">
                    <div class="shipping">
                        <img src="images/shipping.png" alt=""/>
                    </div>
                    <div class="shipping-text">
                        <h3>Free Shipping</h3>
                        <p>{{ $setting->delivery }}</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 online-order">
                    <h3>Call us</h3>
                    <h3>Tel: {{ $setting->tel }}</h3>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="products-grid">
                <header>
                    <h3 class="head text-center">Latest Products Men</h3>
                </header>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="images/p1.jpg" alt=""/></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">Sed ut perspiciatis</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$329</span></a></p>
                </div>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="images/p2.jpg" alt=""/></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">great explorer</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$599.8</span></a></p>
                </div>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="images/p3.jpg" alt=""/></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">similique sunt</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$359.6</span></a></p>
                </div>
                <header>
                    <h3 class="head text-center">Latest Products Women</h3>
                </header>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="images/p4.jpg" alt=""/></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">shrinking </a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$649.99</span></a></p>
                </div>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="images/p5.jpg" alt=""/></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">perfectly simple</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$750</span></a></p>
                </div>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="images/p6.jpg" alt=""/></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">equal blame</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$295.59</span></a></p>
                </div>
                <header>
                    <h3 class="head text-center">Latest Products Kids</h3>
                </header>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="images/p7.jpg" alt=""/></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">Neque porro</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$380</span></a></p>
                </div>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="images/p8.jpg" alt=""/></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">perfectly simple</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$540.6</span></a></p>
                </div>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="images/p9.jpg" alt=""/></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">praising pain</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$229.5</span></a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection