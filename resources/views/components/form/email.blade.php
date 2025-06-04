@props(['name', 'id' => null, 'model' => null, 'label' => null])

@php
    $id ??= $name;
    $model ??= $name;
    $label ??= ucwords(str_replace('_', ' ', $name));
@endphp

<label for="{{ $id }}">{{ $label }}</label>
<input type="email" name="{{ $name }}" id="{{ $id }}" wire:model="{{ $model }}"
    {{ $attributes }}>
@error($model)
    <div class="error">{{ $message }}</div>
@enderror
