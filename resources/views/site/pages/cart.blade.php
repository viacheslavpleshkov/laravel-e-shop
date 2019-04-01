@extends('site.layouts.main')

@section('title', __('site.cart-title'))

@section('content')

	<div class="cart-items">
		<div class="container">
			<div class="dreamcrub">
				<ul class="breadcrumbs">
					<li class="home">
						<a href="{{ route('site.index') }}"
						   title="{{ __('site.breadcrumbs-home-description') }}">{{ __('site.breadcrumbs-home') }}</a>&nbsp; <span>&gt;</span>
					</li>
					<li class="women">
						{{ __('site.cart-title') }}
					</li>
				</ul>
				<ul class="previous">
					<li><a href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<h2>MY SHOPPING BAG ({{ Cart::count() }})</h2>
			@if (session('success'))
				<h3 class="text-center btn-success">{{ session('success') }}</h3>
			@endif
			<div class="cart-gd">
				@foreach(Cart::content() as $item)
					<div class="cart-header">
						<form action="{{ route('cart.destroy', $item->rowId) }}" method="post">
							@csrf
							@method('DELETE')
							<input type="submit" class="close1 border-none" value="">
						</form>
						<div class="cart-sec simpleCart_shelfItem">
							<div class="cart-item cyc">
								<a href="{{ route('site.products',$item->options->url) }}">
									@if($item->options->images == 'none')
										<img src="{{ asset('/images/photo-not-available.png') }}" class="img-responsive" alt="{{ $item->name }}">
									@else
										<img src="{{ asset('storage/'.$item->options->images) }}" class="img-responsive" alt="{{ $item->name }}">
									@endif
								</a>
							</div>
							<div class="cart-item-info">
								<h3><a href="{{ route('site.products',$item->options->url) }}">{{ $item->name }}</a></h3>
								<p>{{ $item->options->description }}</p>
								<ul class="qty">
									<li><p>{{ __('site.cart-sale') }}</p></li>
									<li><p>{{ $item->options->sale }}%</p>
									<li>
								</ul>
								<ul class="qty">
									<li><p>{{ __('site.cart-brand') }}</p></li>
									<li><p>{{ $item->options->brand->name }}</p></li>
								</ul>
								<ul class="qty">
									<li><p>{{ __('site.cart-madein') }}</p></li>
									<li><p>{{ $item->options->made->name }}</p></li>
								</ul>
								<ul class="qty">
									<li><p>{{ __('site.cart-color') }}</p></li>
									<li><p>{{ $item->options->color }}</p></li>
								</ul>
								<ul class="qty">
									<li><p>{{ __('site.cart-trend') }}</p></li>
									<li><p>
											@if($item->options->trend)
												{{ __('site.enabled') }}
											@else
												{{ __('site.disabled') }}
											@endif
										</p></li>
								</ul>
								<ul class="qty">
									<li><p>{{ __('site.cart-price') }}</p></li>
									<li><p>$ {{ $item->price }}</p></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				@endforeach
			</div>
			<div class="row">
				<h4 class="text-center btn-original col-lg-9">{{ __('site.cart-count').Cart::count().' | '.__('site.cart-tax').'$ '.Cart::tax().' | '.__('site.cart-total').'$ '.Cart::subtotal() }}</h4>
				<h4 class="text-center btn-primary col-2 checkout"><a href="{{ route('checkout.index') }}" class="checkout">{{ __('site.cart-proceed-to-checkout') }}</a></h4>
			</div>

		</div>
	</div>

@endsection
