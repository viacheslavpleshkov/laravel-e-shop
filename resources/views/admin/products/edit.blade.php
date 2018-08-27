@extends('admin.layouts.main')

@section('title',__('admin.edit-products'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('products.update',$main->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.products-name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ $main->name }}"
                   placeholder="{{ __('admin.products-name') }}" required>
        </div>

        <label>{{ __('admin.products-images') }}</label><br>
        <img src="{{ asset('storage/'.$main->images) }}" width="100px" class="mb-3">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">{{ __('admin.products-upload') }}</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="images" value="{{ $main->images }}">
                <label class="custom-file-label">{{ $main->images }}</label>
            </div>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-description') }}</label>
            <input type="text" class="form-control" name="description" value="{{ $main->description }}"
                   placeholder="{{ __('admin.products-description') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-type') }}</label>
            <select class="form-control" name="type_id" required>
                <option value="{{ $main->type->id }}">{{ $main->type->name }}</option>
            @foreach($type as $item)
                    @if($main->type->id === $item->id) @continue; @endif
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-category') }}</label>
            <select class="form-control" name="category_id" required>
                <option value="{{ $main->category->id }}">{{ $main->category->name }}</option>
                @foreach($category as $item)
                    @if($main->category->id === $item->id) @continue; @endif
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-price') }}</label>
            <input type="text" class="form-control" name="price" value="{{ $main->price }}"
                   placeholder="{{ __('admin.products-price') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-sale') }}</label>
            <input type="text" class="form-control" name="sale" value="{{ $main->sale }}"
                   placeholder="{{ __('admin.products-sale') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-new') }}</label>
            <select class="form-control" name="new" required>
                @if($main->new)
                    <option value="1">{{ __('admin.enabled') }}</option>
                    <option value="0">{{ __('admin.disabled') }}</option>
                @else
                    <option value="0">{{ __('admin.disabled') }}</option>
                    <option value="1">{{ __('admin.enabled') }}</option>
                @endif
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-trend') }}</label>
            <select class="form-control" name="trend" required>
                @if($main->trend)
                    <option value="1">{{ __('admin.enabled') }}</option>
                    <option value="0">{{ __('admin.disabled') }}</option>
                @else
                    <option value="0">{{ __('admin.disabled') }}</option>
                    <option value="1">{{ __('admin.enabled') }}</option>
                @endif
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-color') }}</label>
            <input type="text" class="form-control" name="color" value="{{ $main->color }}"
                   placeholder="{{ __('admin.products-color') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-url') }}</label>
            <input type="text" class="form-control" name="url" value="{{ $main->url }}"
                   placeholder="{{ __('admin.products-url') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-brand') }}</label>
            <select class="form-control" name="brand_id" required>
                <option value="{{ $main->brand->id }}">{{ $main->brand->name }}</option>
            @foreach($brand as $item)
                    @if($main->brand->id === $item->id) @continue; @endif
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-made') }}</label>
            <select class="form-control" name="made_id" required>
                <option value="{{ $main->made->id }}">{{ $main->made->name }}</option>
            @foreach($made as $item)
                    @if($main->made->id === $item->id) @continue; @endif
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-information') }}</label>
            <textarea class="form-control" name="information" placeholder="{{ __('admin.products-enter-information') }}"
                      rows="10" required>{{ $main->information }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-specifications') }}</label>
            <textarea class="form-control" name="specifications" placeholder="{{ __('admin.products-enter-specifications') }}"
                      rows="10" required>{{ $main->specifications }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.products-user') }}</label>
            <select class="form-control" name="user_id" required>
                <option value="{{ $main->user->id }}">{{ $main->user->name }}</option>
            @foreach($user as $item)
                 @if($main->user->id === $item->id) @continue; @endif
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
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