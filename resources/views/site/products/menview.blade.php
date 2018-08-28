@extends('site.layouts.main')

@section('title',$main->name)

@section('content')
    <div class="container">
        <div class="products-page">
            <div class="products">
                <div class="product-listy">
                    <h2>{{ __('site.men-categories') }}</h2>
                    <ul class="product-list">
                        @foreach($category as $item)
                            <li><a href="{{ route('site.men-category',$item->url) }}"
                                   class="{{ Request::is("*$item->url*") ? 'acti' : '' }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="product-listy">
                    <h2>{{ __('site.men-brands') }}</h2>
                    <ul class="product-list">
                        @foreach($brands as $item)
                            <li><a href="{{ route('site.men-brands',$item->url) }}"
                                   class="{{ Request::is("*$item->url*") ? 'acti' : '' }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="new-product">
                <div class="col-md-5 zoom-grid">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{ asset('storage').'/'.$main->images }}">
                                <div class="thumb-image"><img src="{{ asset('storage').'/'.$main->images }}"
                                                              data-imagezoom="true"
                                                              class="img-responsive" alt=""/></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 dress-info">
                    <div class="dress-name">
                        <h3>{{ $main->name }}</h3>
                        <span>$ {{ $main->price }}</span>
                        <div class="clearfix"></div>
                        <p>{{ $main->description }}</p>
                    </div>

                    <div class="span span1">
                        <p class="left">{{ __('site.menview-sale') }}</p>
                        <p class="right">{{ $main->sale }}%</p>
                        <div class="clearfix"></div>
                    </div>

                    <div class="span span2">
                        <p class="left">{{ __('site.menview-brand') }}</p>
                        <p class="right">{{ $main->brand->name }}</p>
                        <div class="clearfix"></div>
                    </div>

                    <div class="span span3">
                        <p class="left">{{ __('site.menview-madein') }}</p>
                        <p class="right">{{ $main->made->name }}</p>
                        <div class="clearfix"></div>
                    </div>

                    <div class="span span4">
                        <p class="left">{{ __('site.menview-color') }}</p>
                        <p class="right">{{ $main->color }}</p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="span span5">
                        <p class="left">{{ __('site.menview-trend') }}</p>
                        <p class="right">
                            @if($main->trend)
                                {{ __('admin.enabled') }}
                            @else
                                {{ __('admin.disabled') }}
                            @endif
                        </p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="purchase">
                        <div class="simpleCart_shelfItem">
                                <div class="pricey hide"><span class="item_price">$ {{ $main->price }}</span></div>
                                <a class="cbp-vm-icon cbp-vm-add item_add" href="#">Add to cart</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="reviews-tabs">
                    <ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="myTab">
                        <li class="test-class active text-content">{{ __('site.menview-moreinformation') }}</li>
                    </ul>
                    <div class="tab-content responsive hidden-xs hidden-sm">
                        <div class="tab-pane active">
                            <p class="tab-text">{{ $main->information }}</p>
                        </div>
                    </div>
                </div>
                <div class="reviews-tabs">
                    <ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="myTab">
                        <li class="test-class active text-content">{{ __('site.menview-specifications') }}</li>
                    </ul>
                    <div class="tab-content responsive hidden-xs hidden-sm">
                        <div class="tab-pane active">
                            <p class="tab-text">{{ $main->specifications }}</p>
                        </div>
                    </div>
                </div>
                <div class="reviews-tabs">
                    <ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="myTab">
                        <li class="test-class active text-content">{{ __('site.menview-reviews') }}</li>
                    </ul>
                    <div class="tab-content responsive hidden-xs hidden-sm">
                        <div class="tab-pane active">
                            <div class="response">
                                <div class="media response-info">
                                    <div class="media-left response-text-left">
                                        <a href="#">
                                            <img class="media-object" src="{{ asset('images/icon1.png') }}" alt="" />
                                        </a>
                                        <h5><a href="#">Username</a></h5>
                                    </div>
                                    <div class="media-body response-text-right">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <ul>
                                            <li>MARCH 21, 2015</li>
                                            <li><a href="single.html">Reply</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection

