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
                                    <p>{{ __('site.home-start-your-shopping-here') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="banner-info">
                                    <h3>{{ __('site.home-pack-shop-online') }}</h3>
                                    <p>{{ __('site.home-start-your-shopping-here') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="banner-info">
                                    <h3>{{ __('site.home-pack-your-bag') }}</h3>
                                    <p>{{ __('site.home-start-your-shopping-here') }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="shop">
                <a href="{{ route('site.women') }}">{{ __('site.home-shop-collection-now') }}</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-content">
            <div class="online-strip">
                <div class="col-md-4 online-order">
                    <h3>{{ __('site.home-write-to-us') }}</h3>
                    <h3>{{ __('site.home-email').': '.$setting->email }}</h3>
                </div>
                <div class="col-md-4 shipping-grid">
                    <div class="shipping">
                        <img src="{{ asset('images/shipping.png') }}" alt=""/>
                    </div>
                    <div class="shipping-text">
                        <h3>{{ __('site.home-free-shipping') }}</h3>
                        <p>{{ $setting->delivery }}</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 online-order">
                    <h3>{{ __('site.home-call-us') }}</h3>
                    <h3>{{ __('site.home-tel').': '. $setting->tel }}</h3>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="products-grid">
                <header>
                    <h3 class="head text-center">{{ __('site.home-latest-products-men') }}</h3>
                </header>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="images/p1.jpg" alt=""/></a>
                    <div class="mask">
                        <a href="single.html">{{ __('site.home-quick-view') }}</a>
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
                    <h3 class="head text-center">{{ __('site.home-latest-products-women') }}</h3>
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
                    <h3 class="head text-center">{{ __('site.home-latest-products-kids') }}</h3>
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
                <header>
                    <h3 class="head text-center">{{ __('site.home-latest-products-accessories') }}</h3>
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