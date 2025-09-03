<label for="{{ $id }}">{{ $label }}</label>
{{ $slot }}
@error($model)
    <div class="error">{{ $message }}</div>
@enderror
