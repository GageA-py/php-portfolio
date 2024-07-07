<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gage's Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *, ::after, ::before { 
            box-sizing: border-box; 
            border-width: 0; 
            border-style: solid; 
            border-color: #e5e7eb; 
        }
        ::after, ::before { --tw-content: ''; }
        :host, html { 
            line-height: 1.5; 
            -webkit-text-size-adjust: 100%; 
            -moz-tab-size: 4; 
            tab-size: 4; 
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji; 
            font-feature-settings: normal; 
            font-variation-settings: normal; 
            -webkit-tap-highlight-color: transparent; 
        }
        body { 
            margin: 0; 
            line-height: inherit; 
        }

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

        /* Body styles to ensure full page application */
        body, html {
            height: 100%;
            overflow: auto;
        }
    </style>
        @vite('resources/css/app.css') 
    <link rel="stylesheet" href="{{ secure_asset('build/assets/app-ix0mzfeY.css') }}">
    <script src="{{ secure_asset('build/assets/app-Bg1aHGgo.js') }}" defer></script>
    </head>

    <header class="w-screen border-b-rounded flex items-center justify-between py-4 bg-gray-800">
    <div class="flex items-center text-white pl-4">
        <span class="font-semibold text-xl tracking-tight whitespace-nowrap">Gage's Portfolio</span>
    </div>
    <div class="hidden lg:flex lg:flex-grow lg:justify-center"></div>
    @if (Route::has('login'))
        <nav class="flex items-center justify-end pr-4 space-x-2">
            @auth
                <form method="POST" action="{{ route('logout') }}" class="flex space-x-2">
                    @csrf
                    <button type="button" class="text-white bg-gray-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-gray-700 dark:hover:bg-white dark:focus:ring-white dark:hover:text-black">
                        <a href="mailto:gage.php@proton.me">Contact Me</a>
                    </button>
                    <button type="submit" class="text-white bg-gray-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-gray-700 dark:hover:bg-white dark:focus:ring-white dark:hover:text-black">
                        Logout
                    </button>
                </form>
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
    <div class="text-center py-8 bg-gray-100">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($projects as $project)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <h1 class="text-xl font-semibold p-4">{{ $project->title }}</h1>
                    <img class="w-full h-auto object-cover" src="{{ asset($project->image) }}" alt="{{ $project->title }}">
                    <div class="p-4">
                        <p>{{ $project->description }}</p>
                        <a href="{{ $project->link }}" class="text-blue-500 hover:underline">View Project Source Code On GitHub</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>



