<main id="register">
    <form wire:submit.prevent='register'>
        <fieldset>
            <x-form.text name='name' label='Your Full Name' autofocus />
            <x-form.email name='email' label='Your E-Mail' />
            <x-form.password name='password' />

            <label for="password_confirmation">Confirm Password</label>
            <div class="password-wrapper">
                <input type="password" name="password_confirmation" id="password_confirmation"
                    wire:model="password_confirmation" autocomplete="new-password">
                <i class="nf nf-fa-eye password_eye" id="password_confirmation_eye"></i>
            </div>



            <div class="buttons">
                <button class="btn secondary"
                    onclick="history.length > 1 ? history.back() : window.location.href='{{ route('dashboard') }}'"
                    type='button'>Cancel</button>
                <button class="btn primary" type='submit'>Register</button>
            </div>
        </fieldset>
    </form>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const passwordInput = document.getElementById("password_confirmation");
        const eyeIcon = document.getElementById("password_confirmation_eye");

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
