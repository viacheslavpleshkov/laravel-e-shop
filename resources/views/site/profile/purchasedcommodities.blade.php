@extends('site.layouts.main')

@section('title',__('site.profile-purchased-commodities-title').' | '.__('site.profile-title'))

@section('content')
<div class="content">
    <div class="container">
        <div class="login-page">
            <div class="dreamcrub">
                <ul class="product-top-list">
                    <li><a href="{{ route('site.index') }}" title="{{ __('site.breadcrumbs-home-description') }}">{{ __('site.breadcrumbs-home') }}</a>&nbsp;<span>&gt;</span></li>
                    <li><a href="{{ route('profile.index') }}">{{ __('site.profile-title') }}</a>&nbsp;<span>&gt;</span></li>
                    <li><span class="act">{{ __('site.profile-purchased-commodities-title') }}</span>&nbsp;</li>
                </ul>
                <ul class="previous">
                    <li><a href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="account_grid">
                <div class="col-md-12 login-left wow fadeInLeft">
                    <div class="bs-docs-example">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">{{ __('site.profile-purchased-commodities-id') }}</th>
                                <th scope="col">{{ __('site.profile-purchased-commodities-username') }}</th>
                                <th scope="col">{{ __('site.profile-purchased-commodities-productsusername') }}</th>
                                <th scope="col">{{ __('site.profile-purchased-commodities-price') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($main as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td scope="row">{{ $item->user->name }}</td>
                                <td scope="row">{{ $item->product->name }}</td>
                                <td scope="row">$ {{ $item->product->price }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
@endsection