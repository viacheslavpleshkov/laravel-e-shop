@extends('site.layouts.main')

@section('title', __('site.help-faq'))

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
                            {{ __('site.help-faq') }}
                        </li>
                    </ul>
                    <ul class="previous">
                        <li><a href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="account_grid">
                    <div class="col-md-12 login-left wow fadeInLeft">
                        <p>{!! $main->faq !!}</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection