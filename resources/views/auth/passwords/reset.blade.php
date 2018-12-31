@extends('site.layouts.main')

@section('title', __('auth.reset-password-title'))

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
                            {{ __('auth.reset-password-title') }}
                        </li>
                    </ul>
                    <ul class="previous">
                        <li><a href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="account_grid">
                    <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                        <h2>{{ __('auth.reset-password-new-customers') }}</h2>
                        <p>{{ __('auth.reset-password-new-customers-description') }}</p>
                        <a class="acount-btn"
                           href="{{ route('register') }}">{{ __('auth.reset-password-create-an-account') }}</a>
                    </div>
                    <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                        <h3>{{ __('auth.reset-password-title') }}</h3>
                        <form method="post" action="{{ route('password.request') }}"
                              aria-label="{{ __('auth.reset-password-title') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div>
                                <span>{{ __('auth.reset-password-email') }}<label>*</label></span>
                                <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    {{ $errors->first('email') }}
                                @endif
                            </div>
                            <div>
                                <span>{{ __('auth.reset-password-password') }}<label>*</label></span>
                                <input id="password" type="password"
                                       class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    {{ $errors->first('password') }}
                                @endif
                            </div>
                            <div>
                                <span>{{ __('auth.reset-password-confirm-password') }}<label>*</label></span>
                                <input id="password-confirm" type="password" name="password_confirmation" required>

                            </div>
                            <div>
                                <input type="submit" value="{{ __('auth.reset-password-title') }}">
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
