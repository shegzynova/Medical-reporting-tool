<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;

class Patients extends Component
{
    public $name;
    public $age;
    public $email;
    public $phone;
    public $blood_group;

    protected $rules = [
        'name' => 'required',
        'age' => 'required|numeric',
        'email' => 'required|email|unique:patients',
        'phone' => 'required|numeric',
        'blood_group' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addPatient()
    {
        $validatedData = $this->validate();

        Patient::create($validatedData);

        return redirect()->to('/patients');
    }

    public function render()
    {
        return view('livewire.patients');
    }
}
