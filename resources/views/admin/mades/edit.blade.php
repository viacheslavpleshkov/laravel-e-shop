@extends('admin.layouts.main')

@section('title',__('admin.edit-mades'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('mades.update',$main->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.mades-name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ $main->name }}"
                   placeholder="{{ __('admin.mades-name') }}" required>
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