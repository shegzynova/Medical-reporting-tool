<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patients App</title>

    {{-- <script src="{{ asset('js/app.js') }}" defer data-turbolinks-track="reload"></script>
    <livewire:scripts/>
    @stack('scripts')

    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">

    @livewireScripts --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    {{-- <script src="{{ asset(mix('js/app.js')) }}" defer data-turbolinks-track="reload"></script> --}}
    <livewire:scripts/>
    @stack('scripts')

    <!-- Styles -->
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet" data-turbolinks-track="reload">
    <livewire:styles/>
    @stack('styles')

    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</head>
<body>
    <style>
        .icon::after {
            content: '';
            display: block;
            position: absolute;
            border-top: 23px solid transparent;
            border-bottom: 17px solid transparent;
            border-left: 12px solid #3182ce;
            left: 100%;
            top: 0;
        }

        .modal {
            transition: opacity 0.25s ease;
        }

        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }

    </style>
    @include('layouts.nav')
    @yield('section')



</body>
</html>
