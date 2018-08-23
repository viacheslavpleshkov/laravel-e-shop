@extends('admin.layouts.main')

@section('title',__('admin.create-products'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.products-name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                   placeholder="{{ __('admin.products-enter-name') }}" required>
        </div>

        <label>{{ __('admin.products-images') }}</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">{{ __('admin.products-upload') }}</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="images">
                <label class="custom-file-label">{{ __('admin.products-choose-file') }}</label>
            </div>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-description') }}</label>
            <input type="text" class="form-control" name="description" value="{{ old('description') }}"
                   placeholder="{{ __('admin.products-enter-description') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-type') }}</label>
            <select class="form-control" name="type_id" required>
                @foreach($type as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-price') }}</label>
            <input type="text" class="form-control" name="price" value="{{ old('price') }}"
                   placeholder="{{ __('admin.products-enter-price') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-sale') }}</label>
            <input type="text" class="form-control" name="sale" value="{{ old('sale') }}"
                   placeholder="{{ __('admin.products-enter-sale') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-new') }}</label>
            <select class="form-control" name="new" required>
                <option value="1">{{ __('admin.enabled') }}</option>
                <option value="0">{{ __('admin.disabled') }}</option>
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-trend') }}</label>
            <select class="form-control" name="trend" required>
                <option value="1">{{ __('admin.enabled') }}</option>
                <option value="0">{{ __('admin.disabled') }}</option>
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-color') }}</label>
            <input type="text" class="form-control" name="color" value="{{ old('color') }}"
                   placeholder="{{ __('admin.products-enter-color') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-url') }}</label>
            <input type="text" class="form-control" name="url" value="{{ old('url') }}"
                   placeholder="{{ __('admin.products-enter-url') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-brand') }}</label>
            <select class="form-control" name="brand_id" required>
                @foreach($brand as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-made') }}</label>
            <select class="form-control" name="made_id" required>
                @foreach($made as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-information') }}</label>
            <textarea class="form-control" name="information" placeholder="{{ __('admin.products-enter-information') }}"
                      rows="10" required>{{ old('information') }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-specifications') }}</label>
            <textarea class="form-control" name="specifications" placeholder="{{ __('admin.products-enter-specifications') }}"
                      rows="10" required>{{ old('specifications') }}</textarea>
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