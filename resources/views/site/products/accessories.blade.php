@extends('site.layouts.main')

@section('title',__('site.men-title'))

@section('content')
    <div class="container">
        <div class="products-page">
            <div class="products">
                <div class="product-listy">
                    <h2>{{ __('site.accessories-categories') }}</h2>
                    <ul class="product-list">
                        @foreach($category as $item)
                            <li><a href="{{ route('site.accessories-category',$item->url) }}" class="{{ Request::is("*$item->url*") ? 'acti' : '' }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="product-listy">
                    <h2>{{ __('site.accessories-brands') }}</h2>
                    <ul class="product-list">
                        @foreach($brands as $item)
                            <li><a href="{{ route('site.accessories-brands',$item->url) }}" class="{{ Request::is("*$item->url*") ? 'acti' : '' }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="new-product">
                <div class="new-product-top">
                    <ul class="product-top-list">
                        <li><a href="{{ route('site.index') }}">{{ __('site.breadcrumbs-home') }}</a>&nbsp;<span>&gt;</span></li>
                        <li><span class="act">{{ __('site.accessories-title') }}</span>&nbsp;</li>
                    </ul>
                    <p class="back"><a href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></p>
                    <div class="clearfix"></div>
                </div>
                <div class="mens-toolbar">
                    <div class="sort">
                        <div class="sort-by">
                            <label>Sort By</label>
                            <select>
                                <option value="">Position</option>
                                <option value="">Name</option>
                                <option value="">Price</option>
                            </select>
                        </div>
                    </div>
                    {{ $main->links('vendor.pagination.default') }}
                    <div class="clearfix"></div>
                </div>
                <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                    <ul>
                        @foreach($main as $item)
                            <li>
                                <a class="cbp-vm-image" href="{{ asset('storage').'/'.$item->images }}">
                                </a><div class="simpleCart_shelfItem"><a class="cbp-vm-image" href="{{ route('site.accessories-view',$item->url) }}">
                                        <div class="view view-first">
                                            <div class="inner_content clearfix">
                                                <div class="product_image">
                                                    <img src="{{ asset('storage').'/'.$item->images }}" class="img-responsive" alt="">
                                                    <div class="mask">
                                                        <div class="info">{{ __('site.accessories-quick-view') }}</div>
                                                    </div>
                                                    <div class="product_container">
                                                        <div class="cart-left">
                                                            <p class="title">{{ $item->name }}</p>
                                                        </div>
                                                        <div class="pricey"><span class="item_price">$ {{ $item->price }}</span></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="cbp-vm-details">{{ $item->description }}</div>
                                    <a class="cbp-vm-icon cbp-vm-add item_add" href="#">{{ __('site.accessories-add-to-cart') }}</a>
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
