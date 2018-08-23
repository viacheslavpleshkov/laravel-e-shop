@extends('admin.layouts.main')

@section('title',__('admin.create-brands'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.brands-name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                   placeholder="{{ __('admin.brands-enter-name') }}" required>
        </div>
        <label>{{ __('admin.brands-images') }}</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">{{ __('admin.brands-upload') }}</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="images">
                <label class="custom-file-label">{{ __('admin.brands-choose-file') }}</label>
            </div>
        </div>

        <div class="form-group">
            <label>{{ __('admin.brands-description') }}</label>
            <input type="text" class="form-control" name="description" value="{{ old('description') }}"
                   placeholder="{{ __('admin.brands-enter-description') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.brands-url') }}</label>
            <input type="text" class="form-control" name="url" value="{{ old('url') }}"
                   placeholder="{{ __('admin.brands-enter-url') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.status') }}</label>
            <select class="form-control" name="status" required>
                <option value="1">{{ __('admin.enabled') }}</option>
                <option value="0">{{ __('admin.disabled') }}</option>
            </select>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.create') }}</button>
    </form>
@endsection