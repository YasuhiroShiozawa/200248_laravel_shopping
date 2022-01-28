@extends('layouts.app')

@section('content')
    <h2 class="h2">{{ __('Item Edit') }}</h2>

    <form action="{{ route('admin.item.update', $item->id) }}" method="post">
        @csrf

        <div class="form-floating mb-3">
            <input class="form-control" type="text" name="name" value="{{ $item->name }}">
            <label for="">{{ __('label.item_name') }}</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" type="text" name="code" value="{{ $item->code }}">
            <label for="">{{ __('label.item_code') }}</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" type="number" name="price" value="{{ $item->price }}">
            <label for="">{{ __('label.price') }}</label>
        </div>
        <div class="form-floating mb-3">

            <input class="form-control" type="number" name="stock" value="{{ $item->stock }}">
            <label for="">{{ __('label.stock') }}</label>
        </div>

        <button class="btn btn-primary">{{ __('Update') }}</button>
        <a class="btn btn-outline-primary" href="{{ route('admin.item.index') }}">{{ __('Back') }}</a>
    </form>
@endsection
