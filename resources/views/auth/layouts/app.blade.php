<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <style>
        .body-bg {
            background-color: #32e821;
            background-image: linear-gradient(315deg, #32e821 0%, #5f72be 74%);
        }

    </style>
    @livewireStyles
    @livewireScripts

    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</head>

<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Circle Link patients</h1>
        </a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Welcome to CircleLink</h3>
            <p class="text-gray-600 pt-2">Sign in to your account.</p>
        </section>

        <section class="mt-10">

            @yield('section')
        </section>
    </main>


</body>

</html>
