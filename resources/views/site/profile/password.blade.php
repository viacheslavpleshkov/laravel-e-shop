@extends('site.layouts.main')

@section('title',__('site.profile-edit-password').' | '.__('site.profile-title'))

@section('content')
    <div class="content">
        <div class="container">
            <div class="login-page">
                <div class="dreamcrub">
                    <ul class="product-top-list">
                        <li><a href="{{ route('site.index') }}" title="{{ __('site.breadcrumbs-home-description') }}">{{ __('site.breadcrumbs-home') }}</a>&nbsp;<span>&gt;</span></li>
                        <li><a href="{{ route('profile.index') }}">{{ __('site.profile-title') }}</a>&nbsp;<span>&gt;</span></li>
                        <li><span class="act">{{ __('site.profile-edit-password') }}</span>&nbsp;</li>
                    </ul>
                    <ul class="previous">
                        <li><a href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="account_grid">
                    <div class="col-md-12 login-left wow fadeInLeft">
                        <form action="{{ route('profile.password',$main->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>{{ __('site.profile-new-password') }}</label>
                                <input type="password" class="form-control" name="password"
                                       placeholder="{{ __('site.profile-enter-password') }}"
                                       required>
                            </div>

                            <div class="form-group">
                                <label>{{ __('site.profile-confirm-password') }}</label>
                                <input type="password" class="form-control" name="confirmpassword"
                                       placeholder="{{ __('site.profile-enter-confirm-password') }}" required>
                            </div>

                            <button class="btn btn-lg btn-original btn-block"
                                    type="submit">{{ __('admin.edit') }}</button>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection