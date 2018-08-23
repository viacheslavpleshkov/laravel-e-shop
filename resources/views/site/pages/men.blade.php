@extends('site.layouts.main')

@section('title',__('site.home-title'))

@section('content')
    <div class="container">
        <div class="products-page">
            <div class="products">
                <div class="product-listy">
                    <h2>our Products</h2>
                    <ul class="product-list">
                        <li><a href="">New Products</a></li>
                        <li><a href="">Old Products</a></li>
                        <li><a href="">T-shirts</a></li>
                        <li><a href="">pants</a></li>
                        <li><a href="">Dress</a></li>
                        <li><a href="">Shorts</a></li>
                        <li><a href="#">Shirts</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </div>
                <div class="latest-bis">
                    <img src="images/l4.jpg" class="img-responsive" alt="">
                    <div class="offer">
                        <p>40%</p>
                        <small>Top Offer</small>
                    </div>
                </div>
                <div class="tags">
                    <h4 class="tag_head">Tags Widget</h4>
                    <ul class="tags_links">
                        <li><a href="#">Kitesurf</a></li>
                        <li><a href="#">Super</a></li>
                        <li><a href="#">Duper</a></li>
                        <li><a href="#">Theme</a></li>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Equipment</a></li>
                        <li><a href="#">Best</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Apparel</a></li>
                        <li><a href="#">Super</a></li>
                        <li><a href="#">Duper</a></li>
                        <li><a href="#">Theme</a></li>
                        <li><a href="#">Responsive</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Equipment</a></li>
                    </ul>

                </div>

            </div>
            <div class="new-product">
                <div class="new-product-top">
                    <ul class="product-top-list">
                        <li><a href="index.html">Home</a>&nbsp;<span>&gt;</span></li>
                        <li><span class="act">Best Sales</span>&nbsp;</li>
                    </ul>
                    <p class="back"><a href="index.html">Back to Previous</a></p>
                    <div class="clearfix"></div>
                </div>
                <div class="mens-toolbar">
                    <div class="sort">
                        <div class="sort-by">
                            <label>Sort By</label>
                            <select>
                                <option value="">
                                    Position                </option>
                                <option value="">
                                    Name                </option>
                                <option value="">
                                    Price                </option>
                            </select>
                            <a href=""><img src="images/arrow2.gif" alt="" class="v-middle"></a>
                        </div>
                    </div>
                    <ul class="women_pagenation">
                        <li>Page:</li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                    <ul>
                        @foreach($main as $item)
                        <li>
                            <a class="cbp-vm-image" href="single.html">
                            </a><div class="simpleCart_shelfItem"><a class="cbp-vm-image" href="single.html">
                                    <div class="view view-first">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="images/p1.jpg" class="img-responsive" alt="">
                                                <div class="mask">
                                                    <div class="info">Quick View</div>
                                                </div>
                                                <div class="product_container">
                                                    <div class="cart-left">
                                                        <p class="title">perspiciatis</p>
                                                    </div>
                                                    <div class="pricey"><span class="item_price">$259.00</span></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="cbp-vm-details">
                                    Silver beet shallot wakame tomatillo salsify mung bean beetroot groundnut.
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add item_add" href="#">Add to cart</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
