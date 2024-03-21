<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El Giratiempo</title>

    <link rel="shortcut icon" href="{{ URL::to('/assets/img/Logo_Sim.png') }}" type="image/x-icon">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    {{-- <link rel="stylesheet" href="{{ URL::to('/assets/css/header.css') }}"> --}}
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <header class="border-b-2 border-black-500 sticky">
        <nav class="relative px-4 py-4 flex justify-between items-center bg-white">
            <a class="text-3xl font-bold leading-none" href="/">
                <img src="{{ URL::to('/assets/img/Logo_Sim.png') }}" class="h-10">
            </a>
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center text-blue-600 p-3">
                    <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
            <ul
                class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
                <li><a class="text-sm text-black-600 hover:text-gray-500" href="{{ url('/') }}">Inicio</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li><a class="text-sm text-black-600 hover:text-gray-500" href="{{ url('/store') }}">Tienda</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li><a class="text-sm text-black-400 hover:text-gray-500" href="{{ url('/contact') }}">Contacto</a></li>

                @if (Auth::user() and Auth::user()->role == 'admin')
                    <li class="text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                            class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </li>
                    <li><a class="text-sm text-black-400 hover:text-gray-500"
                            href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                @endif
            </ul>

            @guest
                <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-rose-900 hover:bg-rose-600 text-sm text-amber-300 font-bold  rounded-xl transition duration-300"
                    href="{{ url('/login') }}">Sign In</a>
                <a class="hidden lg:inline-block py-2 px-6 bg-yellow-500 hover:bg-yellow-600 text-sm text-zinc-900 hover:text-zinc-300 font-bold rounded-xl transition duration-300"
                    href="{{ url('/logup') }}">Sign up</a>
            @endguest
            @auth
                <p
                    class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 text-sm text-black font-bold  rounded-xl transition duration-300">
                    {{ Auth::user()->name }}, bienvenid@ al mundo de la mágia</p>
                <a class="hidden lg:inline-block py-2 px-6 bg-green-900 hover:bg-green-600 text-sm text-zinc-400 hover:text-zinc-900 font-bold rounded-xl transition duration-300"
                    href="{{ url('/logout') }}">Log out</a>
            @endauth
        </nav>

        <div class="navbar-menu relative z-50 hidden">
            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
            <nav
                class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                <div class="flex items-center mb-8">
                    <a class="mr-auto text-3xl font-bold leading-none" href="#">
                        <img src="{{ URL::to('/assets/img/Logo_Sim.png') }}" class="h-10">

                    </a>
                    <button class="navbar-close">
                        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-black-400 hover:bg-grey-50 hover:text-grey-600 rounded"
                                href="{{ url('/') }}">Inicio</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-black-400 hover:bg-grey-50 hover:text-grey-600 rounded"
                                href="{{ url('/store') }}">Tienda</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-black-400 hover:bg-grey-50 hover:text-grey-600 rounded"
                                href="{{ url('/contact') }}">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div class="mt-auto">
                    <div class="pt-6">
                        <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-rose-900 hover:bg-rose-600 text-sm text-amber-300 rounded-xl"
                            href="{{ url('/signin') }}">Sign in</a>
                        <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center font-semibold bg-green-900 hover:bg-green-600 text-sm text-zinc-400 hover:text-zinc-900 rounded-xl"
                            href="{{ url('/signup') }}">Sign Up</a>
                    </div>
                    <p class="my-4 text-xs text-center text-gray-400">
                        <span>Copyright © 2024</span>
                    </p>
                </div>
            </nav>
        </div>
    </header>

    <script>
        // Burger menus
        document.addEventListener('DOMContentLoaded', function() {
            // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');

            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');

            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });
    </script>
</body>

</html>
