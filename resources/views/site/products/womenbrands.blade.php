@extends('site.layouts.main')

@section('title',$title.' | '.__('site.womenbrands-title'))

@section('content')
	<div class="container">
		<div class="products-page">
			<div class="products">
				<div class="product-listy">
					<h2>{{ __('site.womenbrands-categories') }}</h2>
					<ul class="product-list">
						@foreach($category as $item)
							<li><a href="{{ route('site.women-category',$item->url) }}"
								   class="{{ Request::is("*$item->url*") ? 'acti' : '' }}">{{ $item->name }}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="product-listy">
					<h2>{{ __('site.womenbrands-brands') }}</h2>
					<ul class="product-list">
						@foreach($brands as $item)
							<li><a href="{{ route('site.women-brands',$item->url) }}"
								   class="{{ Request::is("*$item->url*") ? 'acti' : '' }}">{{ $item->name }}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="new-product">
				<div class="new-product-top">
					<ul class="product-top-list">
						<li>
							<a href="{{ route('site.index') }}">{{ __('site.breadcrumbs-home') }}</a>&nbsp;<span>&gt;</span>
						</li>
						<li><a href="{{ route('site.women') }}">{{ __('site.women-title') }}</a>&nbsp;<span>&gt;</span>
						</li>
						<li><span class="act">{{ $title }}</span>&nbsp;</li>
					</ul>
					<p class="back"><a
								href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></p>
					<div class="clearfix"></div>
				</div>
				<div class="mens-toolbar">
					{{ $main->links('vendor.pagination.default') }}
					<div class="clearfix"></div>
				</div>
				<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
					<ul>
						@foreach($main as $item)
							<li>
								@if($item->images == 'none')
									<a class="cbp-vm-image" href="{{ asset('/images/photo-not-available.png') }}"></a>
								@else
									<a class="cbp-vm-image" href="{{ asset('storage').'/'.$item->images }}"></a>
								@endif
								<div class="simpleCart_shelfItem">
									<a class="cbp-vm-image" href="{{ route('site.women-brands',$item->url) }}">
										<div class="view view-first">
											<div class="inner_content clearfix">
												<div class="product_image">
													@if($item->images == 'none')
														<img src="{{ asset('/images/photo-not-available.png') }}" class="img-responsive" alt="">
													@else
														<img src="{{ asset('storage').'/'.$item->images }}" class="img-responsive" alt="">
													@endif
													<div class="mask">
														<div class="info">{{ __('site.womenbrands-quick-view') }}</div>
													</div>
													<div class="product_container">
														<div class="cart-left">
															<p class="title">{{ $item->name }}</p>
														</div>
														<div class="pricey"><span
																	class="item_price">$ {{ $item->price }}</span></div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
										</div>
									</a>
									<div class="cbp-vm-details">{{ $item->description }}</div>
									<form action="{{ route('cart.store', $item) }}" method="post">
										@csrf
										<input type="submit" class="cbp-vm-icon cbp-vm-add item_add border-none"
											   value="{{ __('site.womenbrands-add-to-cart') }}">
									</form>
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
