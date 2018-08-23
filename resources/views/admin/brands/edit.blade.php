@extends('admin.layouts.main')

@section('title',__('admin.edit-brands'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('brands.update',$main->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.brands-name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ $main->name }}"
                   placeholder="{{ __('admin.brands-name') }}" required>
        </div>

        <label>{{ __('admin.brands-images') }}</label><br>
        <img src="{{ asset('storage/'.$main->images) }}" width="100px" class="mb-3">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">{{ __('admin.brands-upload') }}</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="images" value="{{ $main->images }}">
                <label class="custom-file-label">{{ $main->images }}</label>
            </div>
        </div>

        <div class="form-group">
            <label>{{ __('admin.brands-description') }}</label>
            <input type="text" class="form-control" name="description" value="{{ $main->description }}"
                   placeholder="{{ __('admin.brands-description') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.brands-url') }}</label>
            <input type="text" class="form-control" name="url" value="{{ $main->url }}"
                   placeholder="{{ __('admin.brands-url') }}" required>
        </div>
        
        <div class="form-group">
            <label>{{ __('admin.status') }}</label>
            <select class="form-control" name="status" required>
                @if($main->status)
                    <option value="1">{{ __('admin.enabled') }}</option>
                    <option value="0">{{ __('admin.disabled') }}</option>
                @else
                    <option value="0">{{ __('admin.disabled') }}</option>
                    <option value="1">{{ __('admin.enabled') }}</option>
                @endif
            </select>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.edit') }}</button>
    </form>
@endsection