<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;

    protected $rules = [
        'name' => ['required', 'string'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'confirmed', 'string']
    ];

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password, // hashed in model casts
        ]);

        Auth::login($user, true);
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('auth.register');
    }
}
