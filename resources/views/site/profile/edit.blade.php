@extends('site.layouts.main')

@section('title',__('site.profile-edit-profile'))

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
                            {{ __('site.profile-edit-profile') }}
                        </li>
                    </ul>
                    <ul class="previous">
                        <li><a href="{{ URL::previous() }}">{{ __('site.breadcrumbs-back-to-previous-page') }}</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="account_grid">
                    <div class="col-md-12 login-left wow fadeInLeft">
                        @include('admin.includes.error')
                        <form action="{{ route('profile.edit',$main->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>{{ __('site.profile-firstname') }}</label>
                                <input type="text" class="form-control" name="firstname" value="{{ $main->firstname }}"
                                       placeholder="{{ __('site.profile-enter-firstname') }}" required>
                            </div>

                            <div class="form-group">
                                <label>{{ __('site.profile-lastname') }}</label>
                                <input type="text" class="form-control" name="lastname" value="{{ $main->lastname }}"
                                       placeholder="{{ __('site.profile-enter-lastname') }}" required>
                            </div>

                            <div class="form-group">
                                <label>{{ __('site.profile-number') }}</label>
                                <input type="text" class="form-control" name="number" value="{{ $main->number }}"
                                       placeholder="{{ __('site.profile-enter-number') }}" required>
                            </div>

                            <div class="form-group">
                                <label>{{ __('site.profile-email') }}</label>
                                <input type="email" class="form-control" name="email" value="{{ $main->email }}"
                                       placeholder="{{ __('site.profile-enter-email') }}" required>
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