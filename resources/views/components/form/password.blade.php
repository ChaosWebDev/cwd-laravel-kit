<label for="{{ $id }}">{{ $label }}</label>
<div class="password-wrapper">
    <input type="password" name="{{ $name }}" id="{{ $id }}" wire:model="{{ $model }}"
        {{ $attributes }}>
    <i class="nf nf-fa-eye password_eye" id="{{ $eyeId }}"></i>
</div>


@error($model)
    <div class="error">{{ $message }}</div>
@enderror

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const passwordInput = document.getElementById("{{ $id }}");
        const eyeIcon = document.getElementById("{{ $eyeId }}");

        if (passwordInput && eyeIcon) {
            eyeIcon.addEventListener('click', function() {
                const isPassword = passwordInput.type === 'password';
                passwordInput.type = isPassword ? 'text' : 'password';
                eyeIcon.classList.toggle('nf-fa-eye_slash', isPassword);
                eyeIcon.classList.toggle('nf-fa-eye', !isPassword);
                eyeIcon.classList.toggle('active');
            });
        }
    });
</script>
