<h2>{{ __('Item Edit') }}</h2>
<a href="{{ route('admin.item.index') }}">{{ __('Back') }}</a>

<form action="{{ route('admin.item.update', $item->id) }}" method="post">    @csrf

    <div>
        <label for="">{{ __('label.item_name') }}</label>
        <input type="text" name="name" value="{{ $item->name }}">
    </div>
    <div>
        <label for="">{{ __('label.item_code') }}</label>
        <input type="text" name="code" value="{{ $item->code }}">
    </div>
    <div>
        <label for="">{{ __('label.price') }}</label>
        <input type="number" name="price" value="{{ $item->price }}">
    </div>
    <div>
        <label for="">{{ __('label.stock') }}</label>
        <input type="number" name="stock" value="{{ $item->stock }}">
    </div>

    <button>{{ __('Update') }}</button>
</form>
