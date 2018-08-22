@extends('admin.layouts.main')

@section('title',__('admin.help-title'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    @include('admin.includes.success')
    <form action="{{ route('admin.help') }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>{{ __('admin.help-faq') }}</label>
            <textarea class="form-control" name="faq" placeholder="{{ __('admin.help-enter-faq') }}" rows="15"
                      required>{{ $main->faq }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.help-men') }}</label>
            <textarea class="form-control" name="men" placeholder="{{ __('admin.help-enter-men') }}" rows="15"
                      required>{{ $main->men }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.help-women') }}</label>
            <textarea class="form-control" name="women" placeholder="{{ __('admin.help-enter-women') }}" rows="15"
                      required>{{ $main->women }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.help-kids') }}</label>
            <textarea class="form-control" name="kids" placeholder="{{ __('admin.help-enter-kids') }}" rows="15"
                      required>{{ $main->kids }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.help-accessories') }}</label>
            <textarea class="form-control" name="accessories" placeholder="{{ __('admin.help-enter-accessories') }}" rows="15"
                      required>{{ $main->accessories }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.help-brands') }}</label>
            <textarea class="form-control" name="brands" placeholder="{{ __('admin.help-enter-brands') }}" rows="15"
                      required>{{ $main->brands }}</textarea>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.edit') }}</button>
    </form>
@endsection