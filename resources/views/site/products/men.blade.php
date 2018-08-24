@extends('site.layouts.main')

@section('title',__('site.men-title'))

@section('content')
    <div class="container">
        <div class="products-page">
            <div class="products">
                <div class="product-listy">
                    <h2>{{ __('site.men-categories') }}</h2>
                    <ul class="product-list">
                        @foreach($category as $item)
                        <li><a href="{{ route('site.men-category',$item->url) }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="product-listy">
                    <h2>{{ __('site.men-manufacturers') }}</h2>
                    <ul class="product-list">
                        @foreach($brands as $item)
                            <li><a href="{{ route('site.men-brands',$item->url) }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="new-product">
                <div class="new-product-top">
                    <ul class="product-top-list">
                        <li><a href="{{ route('site.index') }}">{{ __('site.breadcrumbs-home') }}</a>&nbsp;<span>&gt;</span></li>
                        <li><span class="act">{{ __('site.men-title') }}</span>&nbsp;</li>
                    </ul>
                    <p class="back"><a href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></p>
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
                    {{ $main->links('vendor.pagination.default') }}
                    <div class="clearfix"></div>
                </div>
                <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                    <ul>
                        @foreach($main as $item)
                        <li>
                            <a class="cbp-vm-image" href="{{ url($item->url) }}">
                            </a><div class="simpleCart_shelfItem"><a class="cbp-vm-image" href="{{ url($item->url) }}">
                                    <div class="view view-first">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="" class="img-responsive" alt="">
                                                <div class="mask">
                                                    <div class="info">{{ __('site.men-quick-view') }}</div>
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
                                <a class="cbp-vm-icon cbp-vm-add item_add" href="#">{{ __('site.men-add-to-cart') }}</a>
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
