<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    // public $username;
    public $email;
    public $password;
    public bool $remember_me = false;

    protected $rules = [
        // 'username'=>['required','username'],
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

        // if (!Auth::attempt(['username' => $this->username, 'password' => $this->password], $remember)) {
        //     return $this->addError('username', "Invalid credentials, please try again.");
        // }

        session()->regenerate();
        return redirect()->intended(route('dashboard'));
    }

    public function render()
    {
        return view('auth.login');
    }
}
