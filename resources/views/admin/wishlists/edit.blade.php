@extends('admin.layouts.main')

@section('title',__('admin.edit-wishlists'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('wishlists.update',$main->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>{{ __('admin.wishlists-product') }}</label>
            <select class="form-control" name="product_id" required>
                <option value="{{ $main->product->id }}">{{ $main->product->name }}</option>
                @foreach($product as $item)
                    @if($main->product->id === $item->id) @continue; @endif
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.wishlists-user') }}</label>
            <select class="form-control" name="user_id" required>
                <option value="{{ $main->user->id }}">{{ $main->user->name }}</option>
                @foreach($user as $item)
                    @if($main->user->id === $item->id) @continue; @endif
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.edit') }}</button>
    </form>
@endsection