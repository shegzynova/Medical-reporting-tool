<?php

namespace App\Http\Livewire;

use App\Models\Observation;
use App\Models\Patient;
use Livewire\Component;

class PatientObservation extends Component
{
    public $patient_id;
    public $patient;
    public $observation;

    public function mount(){
        $patients = Patient::findOrFail($this->patient_id);

        $this->patient = $patients;

    }
    public function render()
    {
        return view('livewire.patient-observation');
    }

    protected $rules = [
        'patient_id' => 'required',
        'observation' => 'required|min:10|max:500'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }



    public function addObservation(){
        $validatedData = $this->validate();
        $patient = Patient::findOrFail($this->patient_id);
        $validatedData['name'] = $patient->name;
        $validatedData['blood_group'] = $patient->blood_group;
        unset($validatedData['patient_id']);

        Observation::create($validatedData);

        session()->flash('success', 'Observation added for patient.');

        return redirect()->to('/patients');
    }
}
