@extends('admin.layouts.main')

@section('title',__('admin.create-wishlists'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('wishlists.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>{{ __('admin.wishlists-product') }}</label>
            <select class="form-control" name="product_id" required>
                @foreach($product as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.wishlists-user') }}</label>
            <select class="form-control" name="user_id" required>
                @foreach($user as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.create') }}</button>
    </form>
@endsection