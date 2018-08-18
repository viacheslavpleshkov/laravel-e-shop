@extends('site.layouts.main')

@section('title', __('auth.login-title'))

@section('content')
    <div class="content">
        <div class="container">
            <div class="login-page">
                <div class="dreamcrub">
                    <ul class="breadcrumbs">
                        <li class="home">
                            <a href="{{ route('site.index') }}"
                               title="{{ __('site.breadcrumbs-home-description') }}">{{ __('site.breadcrumbs-home') }}</a>&nbsp;
                            <span>&gt;</span>
                        </li>
                        <li class="women">
                            {{ __('auth.login-title') }}
                        </li>
                    </ul>
                    <ul class="previous">
                        <li><a href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="account_grid">
                    <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                        <h2>{{ __('auth.login-new-customers') }}</h2>
                        <p>{{ __('auth.login-new-customers-description') }}</p>
                        <a class="acount-btn"
                           href="{{ route('register') }}">{{ __('auth.login-create-an-account') }}</a>
                    </div>
                    <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                        <h3>{{ __('auth.login-registered-customers') }}</h3>
                        <p>{{ __('auth.login-registered-customers-description') }}</p>
                        <form method="post" action="{{ route('login') }}" aria-label="{{ __('auth.login-title') }}">
                            @csrf
                            <div>
                                <span>{{ __('auth.login-email') }}<label>*</label></span>
                                <input id="email" type="email"
                                       class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                       value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    {{ $errors->first('email') }}
                                @endif
                            </div>
                            <div>
                                <span>{{ __('auth.login-password') }}<label>*</label></span>
                                <input id="password" type="password"
                                       class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" required>

                                @if ($errors->has('password'))
                                    {{ $errors->first('password') }}
                                @endif
                            </div>
                            <div>
                                <span>{{ __('auth.login-captcha') }}<label>*</label></span>
                                {!! NoCaptcha::renderJs('en') !!}
                                {!! NoCaptcha::display(['data-theme' => 'light','data-size'=>'normal']) !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    {{ $errors->first('g-recaptcha-response') }}
                                @endif
                            </div>
                            <a class="forgot"
                               href="{{ route('password.request') }}">{{ __('auth.login-forgot-your-password') }}</a>
                            <input type="submit" value="{{ __('auth.login-submit') }}">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection