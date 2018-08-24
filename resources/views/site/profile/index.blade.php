@extends('site.layouts.main')

@section('title',__('site.profile-title'))

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
                            {{ __('site.profile-title') }}
                        </li>
                    </ul>
                    <ul class="previous">
                        <li><a href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="account_grid">
                    <div class="col-md-12 login-left wow fadeInLeft">
                        @if (session('success'))
                            {{ session('success') }}
                        @endif
                        <div class="bs-docs-example">
                            <table class="table table-bordered">
                                <tr>
                                    <th>{{ __('site.profile-firstname') }}</th>
                                    <td>{{ $main->firstname }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('site.profile-lastname') }}</th>
                                    <td>{{ $main->lastname }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('site.profile-number') }}</th>
                                    <td>{{ $main->number }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('site.profile-email') }}</th>
                                    <td>{{ $main->email }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('site.profile-password') }}</th>
                                    <td>{{ $main->password }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('site.profile-role') }}</th>
                                    <td>{{ $main->role->name }}</td>
                                </tr>
                            </table>
                        </div>
                        <a href="{{ route('profile.wishlist',$main->id) }}"
                           class="btn btn-warning">{{ __('site.profile-wishlist') }}</a>
                        <a href="{{ route('profile.purchased-commodities',$main->id) }}"
                           class="btn btn-info">{{ __('site.profile-purchased-commodities') }}</a>
                        <a href="{{ route('profile.edit',$main->id) }}"
                           class="btn btn-success">{{ __('site.profile-edit-profile') }}</a>
                        <a href="{{ route('profile.password',$main->id) }}"
                           class="btn btn-primary">{{ __('site.profile-edit-password') }}</a>
                        <form action="{{ route('profile.destroy',$main->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{ __('site.profile-delete-user') }}</button>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection