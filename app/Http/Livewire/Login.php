<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;

    public $password;


    // Validation
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    // Login
    public function loginUser()
    {
        $validatedData = $this->validate();

        $login = Auth::attempt($validatedData);
        // dd($login);
        if ($login == false) {
            session()->flash('error', 'Your credential does not match our record.');
            return redirect()->back();
        }else{
            session()->flash('success', 'Logged in successfully');
            return redirect()->intended('/');
        }
    }


    // View Page
    public function render()
    {
        return view('livewire.login');
    }
}
