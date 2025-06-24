<label for="{{ $id }}">{{ $label }}</label>
<input type="time" name="{{ $name }}" id="{{ $id }}" wire:model="{{ $model }}"
    {{ $attributes }}>
@error($model)
    <div class="error">{{ $message }}</div>
@enderror
