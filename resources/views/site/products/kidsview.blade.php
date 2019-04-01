@extends('site.layouts.main')

@section('title',$main->name.' | '.__('site.kids-title'))

@section('content')
	<div class="container">
		<div class="products-page">
			<div class="products">
				<div class="product-listy">
					<h2>{{ __('site.kidsview-categories') }}</h2>
					<ul class="product-list">
						@foreach($category as $item)
							<li><a href="{{ route('site.kids-category',$item->url) }}" class="{{ Request::is("*$item->url*") ? 'acti' : '' }}">{{ $item->name }}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="product-listy">
					<h2>{{ __('site.menview-brands') }}</h2>
					<ul class="product-list">
						@foreach($brands as $item)
							<li><a href="{{ route('site.kids-brands',$item->url) }}" class="{{ Request::is("*$item->url*") ? 'acti' : '' }}">{{ $item->name }}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="new-product">
				<div class="col-md-5 zoom-grid">
					<div class="flexslider">
						<ul class="slides">
							@if($main->images == 'none')
								<li data-thumb="{{ asset('/images/photo-not-available.png') }}">
							@else
								<li data-thumb="{{ asset('storage').'/'.$main->images }}">
									@endif
									<div class="thumb-image">
										@if($main->images == 'none')
											<img src="{{ asset('/images/photo-not-available.png') }}" data-imagezoom="true" class="img-responsive" alt=""/>
										@else
											<img src="{{ asset('storage').'/'.$main->images }}" data-imagezoom="true" class="img-responsive" alt=""/>
										@endif
									</div>
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
						<p class="left">{{ __('site.kidsview-sale') }}</p>
						<p class="right">{{ $main->sale }}%</p>
						<div class="clearfix"></div>
					</div>

					<div class="span span2">
						<p class="left">{{ __('site.kidsview-brand') }}</p>
						<p class="right">{{ $main->brand->name }}</p>
						<div class="clearfix"></div>
					</div>

					<div class="span span3">
						<p class="left">{{ __('site.kidsview-madein') }}</p>
						<p class="right">{{ $main->made->name }}</p>
						<div class="clearfix"></div>
					</div>

					<div class="span span4">
						<p class="left">{{ __('site.kidsview-color') }}</p>
						<p class="right">{{ $main->color }}</p>
						<div class="clearfix"></div>
					</div>
					<div class="span span5">
						<p class="left">{{ __('site.kidsview-trend') }}</p>
						<p class="right">
							@if($main->trend)
								{{ __('site.enabled') }}
							@else
								{{ __('site.disabled') }}
							@endif
						</p>
						<div class="clearfix"></div>
					</div>
					<div class="purchase">
						@auth
							<form action="{{ route('site.wishlist',$main->id) }}" method="post">
								@csrf
								@method('PUT')
								<input class="simpleCart_shelfItem cbp-vm-icon cbp-vm-add item_add btn-form"
									   type="submit"
									   value="{{ __('site.kidsview-add-to-wishlist') }}">
							</form>
						@endif
						<div class="clearfix"></div>
						<div class="simpleCart_shelfItem">
							<form action="{{ route('cart.store', $main->id) }}" method="post">
								@csrf
								<input type="submit"
									   class="border-none simpleCart_shelfItem cbp-vm-icon cbp-vm-add item_add btn-form"
									   value="{{ __('site.kidsview-add-to-cart') }}">
							</form>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="reviews-tabs">
					<ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="myTab">
						<li class="test-class active text-content">{{ __('site.kidsview-moreinformation') }}</li>
					</ul>
					<div class="tab-content responsive hidden-xs hidden-sm">
						<div class="tab-pane active">
							<p class="tab-text">{{ $main->information }}</p>
						</div>
					</div>
				</div>
				<div class="reviews-tabs">
					<ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="myTab">
						<li class="test-class active text-content">{{ __('site.kidsview-specifications') }}</li>
					</ul>
					<div class="tab-content responsive hidden-xs hidden-sm">
						<div class="tab-pane active">
							<p class="tab-text">{{ $main->specifications }}</p>
						</div>
					</div>
				</div>
				<div class="reviews-tabs">
					<ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="myTab">
						<li class="test-class active text-content">{{ __('site.kidsview-reviews') }}</li>
					</ul>
					<div class="tab-content responsive hidden-xs hidden-sm">
						<div class="tab-pane active">
							<div class="response">
								@foreach($review as $item)
									<div class="media response-info">
										<div class="media-left response-text-left">
											<a href="#">
												<img class="media-object" src="{{ asset('images/icon1.png') }}" alt=""/>
											</a>
											<h5><a href="#">{{ $item->user->name }}</a></h5>
										</div>
										<div class="media-body response-text-right">
											<p>{{ $item->text }}</p>
											<ul>
												<li>{{ $item->created_at }}</li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								@endforeach
								@guest
									<p>{{ __('site.review-text') }}</p>
								@else
									<form action="{{ route('site.review',$main->id) }}" method="post">
										@csrf
										@method('PUT')
										<textarea name="text" id="" cols="130" rows="4"></textarea>
										@if ($errors->has('text'))
											{{ $errors->first('text') }}
										@endif
										<input type="submit" class="cbp-vm-icon cbp-vm-add item_add">
									</form>
								@endif
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
@endsection

