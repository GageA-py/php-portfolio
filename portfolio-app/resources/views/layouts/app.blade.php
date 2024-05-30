<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', "Gage's Portfolio")</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="build/assets/app-BMxmKGuO.css">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <header>
        <nav class="fixed top-0 z-10 flex items-center justify-between flex-wrap  dark:bg-gray-800 p-6 w-full">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <span class="font-semibold text-xl tracking-tight">Gage's Portfolio</span>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-gray-800 border-gray-800 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                        Projects
                    </a>
                
                </div>
                <div>
                    <!--<a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white hover:text-black border-white hover:bg-white focus:outline-none focus:shadow-outline mt-4 lg:mt-0">Contact Me</a>-->
                </div>
            </div>
        </nav>
    </header>

    <!-- Main content -->
    <main class="container mx-auto mt-20 pt-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white text-center py-4 mt-10">
        <p>&copy; 2024 Gage's Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>
