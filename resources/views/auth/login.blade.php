@extends('site.layouts.main')

@section('title', __('site.login-title'))

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
                            {{ __('site.login-title') }}
                        </li>
                    </ul>
                    <ul class="previous">
                        <li><a href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="account_grid">
                    <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                        <h2>{{ __('site.login-new-customers') }}</h2>
                        <p>{{ __('site.login-new-customers-description') }}</p>
                        <a class="acount-btn"
                           href="{{ route('register') }}">{{ __('site.login-create-an-account') }}</a>
                    </div>
                    <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                        <h3>{{ __('site.login-registered-customers') }}</h3>
                        <p>{{ __('site.login-registered-customers-description') }}</p>
                        <form method="post" action="{{ route('login') }}" aria-label="{{ __('site.login-title') }}">
                            @csrf
                            <div>
                                <span>{{ __('site.login-email') }}<label>*</label></span>
                                <input id="email" type="email"
                                       class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                       value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div>
                                <span>{{ __('site.login-password') }}<label>*</label></span>
                                <input id="password" type="password"
                                       class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <a class="forgot"
                               href="{{ route('password.request') }}">{{ __('site.login-forgot-your-password') }}</a>
                            <input type="submit" value="{{ __('site.login-submit') }}">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection