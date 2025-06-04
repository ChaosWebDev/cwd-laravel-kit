<main id="login">
    <form wire:submit.prevent='login'>
        <fieldset>
            <x-form.email name='email' label='E-Mail' autofocus />
            <x-form.password name='password' />

            <div class="buttons">
                <button class="btn secondary"
                    onclick="history.length > 1 ? history.back() : window.location.href='{{ route('dashboard') }}'"
                    type='button'>Cancel</button>
                <button class='btn secondary' onclick='window.location.assign(`{{ route('register') }}`)'
                    type='button'>Register</button>
                <button class="btn primary" type='submit'>Login</button>
            </div>
        </fieldset>
    </form>
</main>
