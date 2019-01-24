@extends('site.layouts.main')

@section('title',__('site.contact-title'))

@section('content')
    <div class="contact">
        <div class="container">
            <div class="dreamcrub">
                <ul class="breadcrumbs">
                    <li class="home">
                        <a href="{{ route('site.index') }}"
                           title="{{ __('site.breadcrumbs-home-description') }}">{{ __('site.breadcrumbs-home') }}</a>&nbsp;                        <span>&gt;</span>
                    </li>
                    <li class="women">
                        {{ __('site.contact-title') }}
                    </li>
                </ul>
                <ul class="previous">
                    <li><a href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="contact-info">
                <h2>{{ __('site.contact-find-us-here') }}</h2>
            </div>
            <div class="contact-map">
                {!! $setting->map !!}
            </div>
            <div class="contact-form">
                <div class="contact-info">
                    <h3>{{ __('site.contact-contact-form') }}</h3>
                </div>
                @if (session('success'))
                    <h3 class="text-center btn-success">{{ session('success') }}</h3>
                    <br>
                @endif
                <form method="post" action="{{ route('site.contact') }}">
                    @csrf
                    @method('PUT')
                    <div class="contact-left">
                        <input type="text" placeholder="{{ __('site.contact-name') }}" name="name" required>
                        @if ($errors->has('name'))
                            {{ $errors->first('name') }}
                        @endif
                        <input type="text" placeholder="{{ __('site.contact-email') }}" name="email" required>
                        @if ($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                        <input type="text" placeholder="{{ __('site.contact-subject') }}" name="subject" required>
                        @if ($errors->has('subject'))
                            {{ $errors->first('subject') }}
                        @endif
                    </div>
                    <div class="contact-right">
                        <textarea placeholder="{{ __('site.contact-message') }}" name="message" required></textarea>
                        @if ($errors->has('message'))
                            {{ $errors->first('message') }}
                        @endif
                    </div>
                    <div class="clearfix"></div>
                    <input type="submit" value="{{ __('site.contact-submit') }}">
                </form>
            </div>
        </div>
    </div>
@endsection