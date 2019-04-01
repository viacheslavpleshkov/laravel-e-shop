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
				@if(count($men)>0)
					<header>
						<h3 class="head text-center">{{ __('site.home-latest-products-men') }}</h3>
					</header>
					@foreach($men as $item)
						<div class="col-md-4 product simpleCart_shelfItem text-center">
							<a href="{{ route('site.men-view', $item->url) }}">
								@if($item->images == 'none')
									<img src="{{ asset('/images/photo-not-available.png') }}" alt="">
								@else
									<img src="{{ asset('storage').'/'.$item->images }}"/>
								@endif
							</a>
							<div class="mask">
								<a href="{{ route('site.men-view',$item->url) }}">Quick View</a>
							</div>
							<a class="product_name" href="{{ route('site.men-view',$item->url) }}">{{ $item->name }}</a>
							<p><a class="item_add" href="{{ route('site.men-view',$item->url) }}"><i></i> <span
											class="item_price">$ {{ $item->price }}</span></a></p>
						</div>
					@endforeach
				@endif
				@if(count($women)>0)
					<header>
						<h3 class="head text-center">{{ __('site.home-latest-products-women') }}</h3>
					</header>
					@foreach($women as $item)
						<div class="col-md-4 product simpleCart_shelfItem text-center">
							<a href="{{ route('site.women-view', $item->url) }}">
								@if($item->images == 'none')
									<img src="{{ asset('/images/photo-not-available.png') }}" alt="">
								@else
									<img src="{{ asset('storage').'/'.$item->images }}"/>
								@endif
							</a>
							<div class="mask">
								<a href="{{ route('site.women-view',$item->url) }}">Quick View</a>
							</div>
							<a class="product_name"
							   href="{{ route('site.women-view',$item->url) }}">{{ $item->name }}</a>
							<p><a class="item_add" href="{{ route('site.women-view',$item->url) }}"><i></i> <span
											class="item_price">$ {{ $item->price }}</span></a></p>
						</div>
					@endforeach
				@endif
				@if(count($kids)>0)
					<header>
						<h3 class="head text-center">{{ __('site.home-latest-products-kids') }}</h3>
					</header>
					@foreach($kids as $item)
						<div class="col-md-4 product simpleCart_shelfItem text-center">
							<a href="{{ route('site.kids-view', $item->url) }}">
								@if($item->images == 'none')
									<img src="{{ asset('/images/photo-not-available.png') }}" alt="">
								@else
									<img src="{{ asset('storage').'/'.$item->images }}"/>
								@endif
							</a>
							<div class="mask">
								<a href="{{ route('site.kids-view',$item->url) }}">Quick View</a>
							</div>
							<a class="product_name"
							   href="{{ route('site.kids-view',$item->url) }}">{{ $item->name }}</a>
							<p><a class="item_add" href="{{ route('site.kids-view',$item->url) }}"><i></i> <span
											class="item_price">$ {{ $item->price }}</span></a></p>
						</div>
					@endforeach
				@endif
				@if(count($accessories)>0)
					<header>
						<h3 class="head text-center">{{ __('site.home-latest-products-accessories') }}</h3>
					</header>
					@foreach($accessories as $item)
						<div class="col-md-4 product simpleCart_shelfItem text-center">
							<a href="{{ route('site.accessories-view', $item->url) }}">
								@if($item->images == 'none')
									<img src="{{ asset('/images/photo-not-available.png') }}" alt="">
								@else
									<img src="{{ asset('storage').'/'.$item->images }}"/>
								@endif
							</a>
							<div class="mask">
								<a href="{{ route('site.accessories-view',$item->url) }}">Quick View</a>
							</div>
							<a class="product_name" href="{{ route('site.accessories-view',$item->url) }}">{{ $item->name }}</a>
							<p><a class="item_add" href="{{ route('site.accessories-view',$item->url) }}"><i></i> <span
											class="item_price">$ {{ $item->price }}</span></a></p>
						</div>
					@endforeach
				@endif
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
@endsection