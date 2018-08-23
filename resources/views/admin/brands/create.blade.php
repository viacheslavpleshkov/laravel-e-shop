@extends('admin.layouts.main')

@section('title',__('admin.create-brands'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('subscribes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.brands-name') }}</label>
            <input type="email" class="form-control" name="name" value="{{ old('name') }}"
                   placeholder="{{ __('admin.brands-enter-name') }}" required>
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