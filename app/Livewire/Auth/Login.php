<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password;
    public bool $remember_me = false;

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required', 'string'],
        'remember_me' => ['nullable', 'boolean']
    ];

    public function login()
    {
        $this->validate();
        $remember = $this->remember_me == true;

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $remember)) {
            return $this->addError('email', "Invalid credentials, please try again.");
        }

        session()->regenerate();
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('auth.login');
    }
}
