@extends('admin.layouts.main')

@section('title',__('admin.show-wishlists'))

@section('content')
    @include('admin.includes.title')
    <ul class="nav mb-md-3">
        <li>
            <a href="{{ route('wishlists.index') }}" class="btn btn-dark">{{ __('admin.back') }}</a>
            <a href="{{ route('wishlists.edit', $main->id) }}" class="btn btn-primary">{{ __('admin.update') }}</a>
            <form action="{{ route('wishlists.destroy', $main->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">{{ __('admin.delete') }}</button>
            </form>
        </li>
    </ul>
    <table class="table">
        <tr>
            <th>{{ __('admin.wishlists-id') }}</th>
            <td>{{ $main->id }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.wishlists-product') }}</th>
            <td>{{ $main->product->name }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.wishlists-user') }}</th>
            <td>{{ $main->user->name }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.created') }}</th>
            <td>{{ $main->created_at }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.update') }}</th>
            <td>{{ $main->updated_at }}</td>
        </tr>
    </table>
@endsection