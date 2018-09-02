@extends('site.layouts.main')

@section('title',__('site.profile-wishlist-title').' | '.__('site.profile-title'))

@section('content')
    <div class="content">
        <div class="container">
            <div class="login-page">
                <div class="dreamcrub">
                    <ul class="product-top-list">
                        <li><a href="{{ route('site.index') }}" title="{{ __('site.breadcrumbs-home-description') }}">{{ __('site.breadcrumbs-home') }}</a>&nbsp;<span>&gt;</span></li>
                        <li><a href="{{ route('profile.index') }}">{{ __('site.profile-title') }}</a>&nbsp;<span>&gt;</span></li>
                        <li><span class="act">{{ __('site.profile-wishlist-title') }}</span>&nbsp;</li>
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
                                    <th scope="col">{{ __('site.profile-wishlist-id') }}</th>
                                    <th scope="col">{{ __('site.profile-wishlist-name') }}</th>
                                    <th scope="col">{{ __('site.profile-wishlist-url') }}</th>
                                    <th scope="col">{{ __('site.profile-wishlist-price') }}</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($main as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td scope="row">{{ $item->product->name }}</td>
                                        <td scope="row"><a href="{{ route('site.products' ,$item->product->url) }}">{{ route('site.products' ,$item->product->url) }}</a></td>
                                        <td scope="row">$ {{ $item->product->price }}</td>
                                        <td scope="row">
                                            <form action="{{ route('profile.wishlistdestroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"><i class="glyphicon glyphicon-trash"></i></button>
                                            </form>
                                        </td>
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