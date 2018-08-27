@extends('admin.layouts.main')

@section('title',__('admin.show-products'))

@section('content')
    @include('admin.includes.title')
    <ul class="nav mb-md-3">
        <li>
            <a href="{{ route('products.index') }}" class="btn btn-dark">{{ __('admin.back') }}</a>
            <a href="{{ route('products.edit', $main->id) }}" class="btn btn-primary">{{ __('admin.update') }}</a>
            <form action="{{ route('products.destroy', $main->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">{{ __('admin.delete') }}</button>
            </form>
        </li>
    </ul>
    <table class="table">
        <tr>
            <th>{{ __('admin.products-id') }}</th>
            <td>{{ $main->id }}</td>
        </tr>

        <tr>
            <th>{{ __('admin.products-name') }}</th>
            <td>{{ $main->name }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.brands-images') }}</th>
            <td><img src="{{ asset('storage/'.$main->images) }}" width="100px"></td>
        </tr>
        <tr>
            <th>{{ __('admin.products-description') }}</th>
            <td>{{ $main->description }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.products-type') }}</th>
            <td>{{ $main->type->name }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.products-category') }}</th>
            <td>{{ $main->category->name }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.products-price') }}</th>
            <td>{{ $main->price }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.products-sale') }}</th>
            <td>{{ $main->sale }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.products-new') }}</th>
            <td>
                @if($main->new)
                    {{ __('admin.enabled') }}
                @else
                    {{ __('admin.disabled') }}
                @endif
            </td>
        </tr>
        <tr>
            <th>{{ __('admin.products-trend') }}</th>
            <td>
                @if($main->trend)
                    {{ __('admin.enabled') }}
                @else
                    {{ __('admin.disabled') }}
                @endif
            </td>
        </tr>
        <tr>
            <th>{{ __('admin.products-color') }}</th>
            <td>{{ $main->color }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.products-url') }}</th>
            <td>{{ $main->url }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.products-brand') }}</th>
            <td>{{ $main->brand->name }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.products-made') }}</th>
            <td>{{ $main->made->name }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.products-information') }}</th>
            <td>{{ $main->information }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.products-specifications') }}</th>
            <td>{{ $main->specifications }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.products-user') }}</th>
            <td>{{ $main->user->name }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.status') }}</th>
            <td>
                @if($main->status)
                    {{ __('admin.enabled') }}
                @else
                    {{ __('admin.disabled') }}
                @endif
            </td>
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