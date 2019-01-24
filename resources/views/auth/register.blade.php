@extends('site.layouts.main')

@section('title', __('auth.registration-title'))

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
                        {{ __('auth.registration-title') }}
                    </li>
                </ul>
                <ul class="previous">
                    <li><a href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <h2>{{ __('auth.registration-title') }}</h2>
            <div class="registration-grids">
                <div class="reg-form">
                    <div class="reg">
                        <p>{{ __('auth.registration-title-description') }}</p>
                        <p>{{ __('auth.registration-title-description-two') }} <a
                                    href="{{ route('login') }}">{{ __('auth.registration-click-here') }}</a></p>
                        <form method="post" action="{{ route('register') }}"
                              aria-label="{{ __('auth.registration-title') }}">
                            @csrf
                            <ul>
                                <li class="text-info">{{ __('auth.registration-name') }}</li>
                                <li>
                                    <input id="email" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

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
                                <li class="text-info">{{ __('auth.registration-password') }}</li>
                                <li>
                                    <input id="password" type="password"
                                           class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                           required>
                                    @if ($errors->has('password'))
                                        {{ $errors->first('password') }}
                                    @endif
                                </li>
                            </ul>
                            <ul>
                                <li class="text-info">{{ __('auth.registration-password-confirm') }}</li>
                                <li><input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required></li>
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
                            <input type="submit" value="{{ __('auth.registration-submit') }}">
                            <br>
                            <p class="click">{{ __('auth.registration-policy-terms-and-conditions-text') }} <a href="{{ route('policy-terms-and-conditions') }}">{{ __('auth.registration-policy-terms-and-conditions') }}</a>
                            </p>
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
