@extends('layouts.app')

@section('section')


    {{-- {{ $patient_id }} --}}
    @livewire('patient-observation', ['patient_id' => $patient_id])



@endsection
