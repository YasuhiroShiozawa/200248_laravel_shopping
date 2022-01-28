<h2>{{ __('Item Input')}}</h2>
<a href="{{ route('admin.item.index') }}">{{ __('Back') }}</a>

<form action="{{ route('admin.item.add') }}" method="post">
    @csrf

    <div>
        <label for="">{{ __('label.item_name') }}</label>
        <input type="text" name="name">
      </div>
      <div>
        <label for="">{{ __('label.item_code') }}</label>        <input type="text" name="code">
      </div>
      <div>
        <label for="">{{ __('label.price') }}</label>
        <input type="number" name="price">
      </div>
      <div>
        <label for="">{{ __('label.stock') }}</label>
        <input type="number" name="stock">
      </div>
    
      <button>{{ __('Update') }}</button>

</form>