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
                            <h3 class="btn-success text-center">{{ session('success') }}</h3>
                        @endif
                        <div class="bs-docs-example">
                            <table class="table table-bordered">
                                <tr>
                                    <th>{{ __('site.profile-name') }}</th>
                                    <td>{{ $main->name }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('site.profile-number') }}</th>
                                    <td>
                                        @if ($main->number)
                                            {{ $main->number }}
                                        @else
                                            {{ __('admin.disabled') }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{ __('site.profile-email') }}</th>
                                    <td>
                                        @if ($main->email)
                                            {{ $main->email }}
                                        @else
                                            {{ __('admin.disabled') }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{ __('site.profile-password') }}</th>
                                    <td>
                                        @if ($main->password)
                                            {{ $main->password }}
                                        @else
                                            {{ __('admin.disabled') }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{ __('site.profile-role') }}</th>
                                    <td>{{ $main->role->name }}</td>
                                </tr>
                            </table>
                        </div>
                        <a href="{{ route('profile.wishlist') }}"
                           class="btn btn-warning">{{ __('site.profile-wishlist') }}</a>
                        <a href="{{ route('profile.purchased-commodities',$main->id) }}"
                           class="btn btn-info">{{ __('site.profile-purchased-commodities') }}</a>
                        <a href="{{ route('profile.edit',$main->id) }}"
                           class="btn btn-success">{{ __('site.profile-edit-profile') }}</a>
                        <a href="{{ route('profile.password',$main->id) }}"
                           class="btn btn-primary">{{ __('site.profile-edit-password') }}</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection