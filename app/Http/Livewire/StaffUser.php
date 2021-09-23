<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class StaffUser extends Component
{
    public $users;

    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $role;

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6',
        'role' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addUser()
    {
        // $validatedData = $this->validate();

        // User::create($validatedData);
    }




    // public function mount()
    // {
    //     $allUsers = User::all();
    //     $this->users = $allUsers;
    // }


    // public function render()
    // {
    //     return view('livewire.staff-user');
    // }
}
