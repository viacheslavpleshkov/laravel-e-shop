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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259" style="border:0"></iframe>
            </div>
            <div class="contact-form">
                <div class="contact-info">
                    <h3>{{ __('site.contact-contact-form') }}</h3>
                </div>
                <form>
                    <div class="contact-left">
                        <input type="text" placeholder="{{ __('site.contact-name') }}" required>
                        <input type="text" placeholder="{{ __('site.contact-email') }}" required>
                        <input type="text" placeholder="{{ __('site.contact-subject') }}" required>
                    </div>
                    <div class="contact-right">
                        <textarea placeholder="{{ __('site.contact-message') }}" required></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <input type="submit" value="{{ __('site.contact-submit') }}">
                </form>
            </div>
        </div>
    </div>
@endsection