@extends('admin.layouts.main')

@section('title','Settings')

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('admin.settings') }}" method="post">
        @csrf
        @method('PUT')
        {{--<div class="form-group">--}}
            {{--<label>{{ __('admin.users-delivery') }}</label>--}}
            {{--<input type="text" class="form-control" name="delivery" value="{{ $main->delivery }}"--}}
                   {{--placeholder="{{ __('admin.users-enter-delivery') }}" required>--}}
        {{--</div>--}}

        <div class="form-group">
            <label>{{ __('admin.users-lastname') }}</label>
            <input type="text" class="form-control" name="lastname" value="{{ $main->tel }}"
                   placeholder="{{ __('admin.users-enter-lastname') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.users-number') }}</label>
            <input type="text" class="form-control" name="number" value="{{ $main->map }}"
                   placeholder="{{ __('admin.users-enter-number') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.users-email') }}</label>
            <input type="email" class="form-control" name="email" value="{{ $main->email }}"
                   placeholder="{{ __('admin.users-enter-email') }}" required>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.edit') }}</button>
    </form>
@endsection