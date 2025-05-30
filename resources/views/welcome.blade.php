<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gage's Portfolio</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* Custom Scrollbar Styles */
        ::-webkit-scrollbar {
            width: 12px; /* Width of the scrollbar */
        }

        ::-webkit-scrollbar-track {
            background: #333; /* Color of the scrollbar track */
        }

        ::-webkit-scrollbar-thumb {
            background-color: #888; /* Color of the scrollbar thumb */
            border-radius: 10px; /* Roundness of the scrollbar thumb */
            border: 3px solid #333; /* Adds a border around the thumb */
        }

        /* For Firefox */
        * {
            scrollbar-width: thin; /* Scrollbar width */
            scrollbar-color: #888 #333; /* Scrollbar thumb color and track color */
        }
    </style>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ secure_asset('build/assets/app-D8tMRP4W.css') }}">
    <script src="{{ secure_asset('build/assets/app-Bg1aHGgo.js') }}" defer></script>
</head>
<body class="bg-gray-100">
<header class="w-screen border-b-rounded flex items-center justify-between py-4 bg-gray-800 text-white">
    <div class="flex items-center pl-4">
        <a href="/projects"><span class="font-semibold text-xl tracking-tight whitespace-nowrap">Gage's Portfolio</span></a>
    </div>
    <div class="hidden lg:flex lg:flex-grow lg:justify-center"></div>
    @if (Route::has('login'))
        <nav class="flex items-center justify-end pr-4 space-x-2">
            @auth
                <div class="relative">
                    <button type="button" class="text-white hover:text-blue-300 focus:outline-none dark:text-gray-300" id="userDropdown">
                        {{ Auth::user()->name }} ({{ Auth::user()->email }})
                    </button>
                    <div class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg overflow-hidden z-10 hidden" id="dropdown">
                        <div class="px-4 py-2">
                            <a href="{{ route('subscribe.page') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 hover:text-gray-900">Subscribe</a>
                            @if (Auth::user()->subscribed)
                                <div class="border-t border-gray-200"></div>
                                <a href="{{ route('unsubscribe.page') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 hover:text-gray-900">Unsubscribe</a>
                                <div class="border-t border-gray-200"></div>
                            @endif
                            <a href="mailto:{{ Auth::user()->email }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 hover:text-gray-900">Contact Me</a>
                        </div>
                        <div class="border-t border-gray-200"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-200 hover:text-gray-900 focus:outline-none">Logout</button>
                        </form>
                    </div>
                </div>
            @else
                <div class="flex space-x-2">
                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white whitespace-nowrap">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white whitespace-nowrap">
                            Register
                        </a>
                    @endif
                </div>
            @endauth
        </nav>
    @endif
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const userDropdown = document.getElementById('userDropdown');
        const dropdown = document.getElementById('dropdown');

        userDropdown.addEventListener('click', function() {
            dropdown.classList.toggle('hidden');
        });

        // Close dropdown if clicked outside
        document.addEventListener('click', function(event) {
            if (!dropdown.contains(event.target) && !userDropdown.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
    });
</script>


<div class="main-content bg-gray-200 py-8 px-6 flex justify-center items-center min-h-screen">
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg text-center">
        <img class="w-full rounded-t-lg" src="{{ asset('images/computer.jpg') }}" alt="Default Image">
        <h5 class="my-4 text-2xl font-bold text-gray-900">Welcome To My Portfolio!</h5>
        <p class="mb-4 text-gray-700">
            My name is Gage and I'm a freelance software developer from Ontario, Canada. I have
            experience with multiple programming languages and frameworks such as
            Python (Django, Flask, PyGame), PHP (Laravel), WordPress, and JavaScript. Click below to view a variety of
            projects I have put together as a solo developer!
        </p>
        <a href="/projects" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
            View Projects
            <svg class="rtl:rotate-180 w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>
</body>
</html>
