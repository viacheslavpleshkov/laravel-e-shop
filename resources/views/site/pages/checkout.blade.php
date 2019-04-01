@extends('site.layouts.main')

@section('title', __('site.checkout-title'))

@section('content')
	<div class="registration-form">
		<div class="container">
			<div class="dreamcrub">
				<ul class="breadcrumbs">
					<li class="home">
						<a href="{{ route('site.index') }}"
						   title="{{ __('site.breadcrumbs-home-description') }}">{{ __('site.breadcrumbs-home') }}</a>&nbsp;
						<span>&gt;</span>
					</li>
					<li class="women">
						{{ __('site.checkout-title') }}
					</li>
				</ul>
				<ul class="previous">
					<li><a href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<h2>{{ __('site.checkout-title') }}</h2>
			<div class="registration-grids">
				<div class="reg-form">
					<div class="reg">
						<form method="post" action="{{ route('checkout.store') }}"
							  aria-label="{{ __('auth.registration-title') }}" id="payment-form">
							@csrf
							<ul>
								<li class="text-info">{{ __('site.checkout-name-and-surname') }}</li>
								<li>
									<input type="text"
										   class="{{ $errors->has('name-and-surname') ? ' is-invalid' : '' }}"
										   name="name-and-surname" value="{{ old('name-and-surname') }}" required>

									@if ($errors->has('name-and-surname'))
										{{ $errors->first('name-and-surname') }}
									@endif
								</li>
							</ul>
							<ul>
								<li class="text-info">{{ __('site.checkout-email') }}</li>
								<li>
									<input id="email" type="text"
										   class="{{ $errors->has('email') ? ' is-invalid' : '' }}"
										   name="email" value="{{ old('email') }}" required>

									@if ($errors->has('email'))
										{{ $errors->first('email') }}
									@endif
								</li>
							</ul>
							<ul>
								<li class="text-info">{{ __('site.checkout-number') }}</li>
								<li>
									<input type="text"
										   class="{{ $errors->has('number') ? ' is-invalid' : '' }}"
										   name="number" value="{{ old('number') }}" required>

									@if ($errors->has('number'))
										{{ $errors->first('number') }}
									@endif
								</li>
							</ul>
							<ul>
								<li class="text-info">{{ __('site.checkout-city') }}</li>
								<li>
									<input type="text" class="{{ $errors->has('city') ? ' is-invalid' : '' }}"
										   name="city" value="{{ old('city') }}" required>

									@if ($errors->has('city'))
										{{ $errors->first('city') }}
									@endif
								</li>
							</ul>
							<ul>
								<li class="text-info">{{ __('site.checkout-address') }}</li>
								<li>
									<input type="text" class="{{ $errors->has('address') ? ' is-invalid' : '' }}"
										   name="address" value="{{ old('address') }}" required>

									@if ($errors->has('address'))
										{{ $errors->first('address') }}
									@endif
								</li>
							</ul>
							<ul>
								<li class="text-info">{{ __('site.checkout-postal-code') }}</li>
								<li>
									<input type="text" class="{{ $errors->has('postal-code') ? ' is-invalid' : '' }}"
										   name="postal-code" value="{{ old('postal-code') }}" required>

									@if ($errors->has('postal-code'))
										{{ $errors->first('postal-code') }}
									@endif
								</li>
							</ul>
							<hr>
							<ul>
								<li class="text-info">{{ __('site.checkout-name-on-card') }}</li>
								<li>
									<input type="text" class="{{ $errors->has('name-on-card') ? ' is-invalid' : '' }}"
										   name="name-on-card" value="{{ old('name-on-card') }}" required>

									@if ($errors->has('name-on-card'))
										{{ $errors->first('name-on-card') }}
									@endif
								</li>
							</ul>
							<ul>
								<li class="text-info">{{ __('site.checkout-credit-or-debit-card') }}</li>
								<li>
									<div id="card-element">
										<!-- A Stripe Element will be inserted here. -->
									</div>
									<div id="card-errors" role="alert"></div>
								</li>
							</ul>
							<input type="submit" value="{{ __('site.checkout-complete-order') }}">
						</form>
					</div>
				</div>
				<div class="reg-right">
					<h3>{{ __('site.cart-title') }}</h3>
					<p>{{ __('site.cart-count').Cart::count().' | '.__('site.cart-tax').'$ '.Cart::tax().' | '.__('site.cart-total').'$ '.Cart::subtotal() }}</p>
					<div class="strip"></div>
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
											@if($item->images == 'none')
												<img src="{{ asset('/images/photo-not-available.png') }}" class="img-responsive" alt="{{ $item->name }}">
											@else
												<img src="{{ asset('storage/'.$item->options->images) }}" class="img-responsive" alt="{{ $item->name }}">
											@endif
										</a>
									</div>
									<div class="cart-item-info">
										<h3>
											<a href="{{ route('site.products',$item->options->url) }}">{{ $item->name }}</a>
										</h3>
										<p>{{ $item->options->description }}</p>
										<ul class="qty">
											<li>{{ __('site.cart-sale') }}</li>
											<li>{{ $item->options->sale }}%
											<li>
										</ul>
										<ul class="qty">
											<li>{{ __('site.cart-brand') }}</li>
											<li>{{ $item->options->brand->name }}</li>
										</ul>
										<ul class="qty">
											<li>{{ __('site.cart-madein') }}</li>
											<li>{{ $item->options->made->name }}</li>
										</ul>
										<ul class="qty">
											<li>{{ __('site.cart-color') }}</li>
											<li>{{ $item->options->color }}</li>
										</ul>
										<ul class="qty">
											<li>{{ __('site.cart-trend') }}</li>
											<li>
												@if($item->options->trend)
													{{ __('site.enabled') }}
												@else
													{{ __('site.disabled') }}
												@endif
											</li>
										</ul>
										<ul class="qty">
											<li>{{ __('site.cart-price') }}</li>
											<li>$ {{ $item->price }}</li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						@endforeach
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<script>
            // Create a Stripe client.
            var stripe = Stripe('pk_test_cL8mcOuye517hzlns9QawJA3');

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
                base: {
                    color: '#32325d',
                    lineHeight: '18px',
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {style: style});

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function (event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function (event) {
                event.preventDefault();

                stripe.createToken(card).then(function (result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                });
            });

            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }
		</script>
	</div>
@endsection
