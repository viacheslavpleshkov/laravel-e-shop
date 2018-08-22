@extends('admin.layouts.main')

@section('title',__('admin.settings-title'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    @include('admin.includes.success')
    <form action="{{ route('admin.settings') }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.settings-delivery') }}</label>
            <input type="text" class="form-control" name="delivery" value="{{ $main->delivery }}"
                   placeholder="{{ __('admin.settings-enter-delivery') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.settings-tel') }}</label>
            <input type="text" class="form-control" name="tel" value="{{ $main->tel }}"
                   placeholder="{{ __('admin.settings-enter-tel') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.settings-map') }}</label>
            <textarea class="form-control" name="map" placeholder="{{ __('admin.settings-enter-map') }}" rows="4"
                      required>{{ $main->map }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.settings-email') }}</label>
            <input type="email" class="form-control" name="email" value="{{ $main->email }}"
                   placeholder="{{ __('admin.settings-enter-email') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.settings-policytermsandconditions') }}</label>
            <textarea class="form-control" name="policytermsandconditions" placeholder="{{ __('admin.settings-enter-policytermsandconditions') }}" rows="15"
                      required>{{ $main->policytermsandconditions }}</textarea>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.edit') }}</button>
    </form>
@endsection