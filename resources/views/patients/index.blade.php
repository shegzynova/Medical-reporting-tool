@extends('layouts.app')

@section('section')

<div class="container mx-auto px-40 my-5">
    <a href='/patient/create'
        class="modal-open bg-transparent hover:bg-green-500 mx-2 my-10 text-green-dark font-semibold hover:text-white py-2 px-4 border border-green hover:border-transparent rounded">
        Add Patient
    </a>

<br><br>


    @livewire('patients-table')



</div>


@endsection
