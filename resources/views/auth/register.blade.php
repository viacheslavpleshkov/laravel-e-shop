@extends('site.layouts.main')

@section('title', __('site.registration-title'))

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
                        {{ __('site.registration-title') }}
                    </li>
                </ul>
                <ul class="previous">
                    <li><a href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <h2>{{ __('site.registration-title') }}</h2>
            <div class="registration-grids">
                <div class="reg-form">
                    <div class="reg">
                        <p>{{ __('site.registration-title-description') }}</p>
                        <p>{{ __('site.registration-title-description-two') }} <a href="{{ route('login') }}">{{ __('site.registration-click-here') }}</a></p>
                        <form method="post" action="{{ route('register') }}"
                              aria-label="{{ __('site.registration-title') }}">
                            @csrf
                            <ul>
                                <li class="text-info">{{ __('site.registration-first-name') }}</li>
                                <li>
                                    <input id="email" type="text"
                                           class="{{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('firstname') }}" required>

                                    @if ($errors->has('firstname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                                </li>
                            </ul>
                            <ul>
                                <li class="text-info">{{ __('site.registration-last-name') }}</li>
                                <li>
                                    <input id="email" type="text"
                                           class="{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('lastname') }}" required>

                                    @if ($errors->has('lastname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </li>
                            </ul>
                            <ul>
                                <li class="text-info">{{ __('site.registration-email') }}</li>
                                <li>
                                    <input id="email" type="text"
                                           class="{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </li>
                            </ul>
                            <ul>
                                <li class="text-info">{{ __('site.registration-password') }}</li>
                                <li>
                                    <input id="password" type="password"
                                           class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                           required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </li>
                            </ul>
                            <ul>
                                <li class="text-info">{{ __('site.registration-password-confirm') }}</li>
                                <li><input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required></li>
                            </ul>
                            <ul>
                                <li class="text-info">{{ __('site.registration-number') }}</li>
                                <li>
                                    <input id="email" type="text"
                                           class="{{ $errors->has('number') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('number') }}" required>

                                    @if ($errors->has('number'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('number') }}</strong>
                                        </span>
                                    @endif
                                </li>
                            </ul>
                            <input type="submit" value="{{ __('site.registration-submit') }}">
                            <p class="click">{{ __('site.registration-policy-terms-and-conditions-text') }} <a href="{{ route('policy-terms-and-conditions') }}">{{ __('site.registration-policy-terms-and-conditions') }}</a></p>
                        </form>
                    </div>
                </div>
                <div class="reg-right">
                    <h3>{{ __('site.registration-completely-free-account') }}</h3>
                    <div class="strip"></div>
                    <p>{{ __('site.registration-completely-free-account-text') }}</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
