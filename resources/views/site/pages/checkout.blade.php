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
                        <form method="post" action="{{ route('register') }}"
                              aria-label="{{ __('auth.registration-title') }}">
                            @csrf
                            <ul>
                                <li class="text-info">{{ __('site.checkout-name-and-surname') }}</li>
                                <li>
                                    <input type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                                    @if ($errors->has('name'))
                                        {{ $errors->first('name') }}
                                    @endif
                                </li>
                            </ul>
                            <ul>
                                <li class="text-info">{{ __('auth.registration-email') }}</li>
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
                                <li class="text-info">{{ __('auth.registration-number') }}</li>
                                <li>
                                    <input id="email" type="text"
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
                                    <input type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                                    @if ($errors->has('name'))
                                        {{ $errors->first('name') }}
                                    @endif
                                </li>
                            </ul>
                            <ul>
                                <li class="text-info">{{ __('site.checkout-address-of-the-recipient') }}</li>
                                <li>
                                    <input type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                                    @if ($errors->has('name'))
                                        {{ $errors->first('name') }}
                                    @endif
                                </li>
                            </ul>
                            <ul>
                                <li class="text-info">{{ __('site.checkout-address') }}</li>
                                <li>
                                    <input type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                                    @if ($errors->has('name'))
                                        {{ $errors->first('name') }}
                                    @endif
                                </li>
                            </ul>
                            <hr>
                            <ul>
                                <li class="text-info">{{ __('site.checkout-address') }}</li>
                                <li>
                                    <input type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                                    @if ($errors->has('name'))
                                        {{ $errors->first('name') }}
                                    @endif
                                </li>
                            </ul>
                            <ul>
                                <li class="text-info">{{ __('auth.registration-captcha') }}</li>
                                {!! NoCaptcha::renderJs('en') !!}
                                <li>{!! NoCaptcha::display(['data-theme' => 'light','data-size'=>'normal']) !!}
                                    @if ($errors->has('g-recaptcha-response'))
                                        {{ $errors->first('g-recaptcha-response') }}
                                    @endif
                                </li>
                            </ul>
                            <input type="submit" value="{{ __('auth.registration-submit') }}">
                        </form>
                    </div>
                </div>
                <div class="reg-right">
                    <h3>{{ __('auth.registration-completely-free-account') }}</h3>
                    <div class="strip"></div>
                    <p>{{ __('auth.registration-completely-free-account-text') }}</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
