<!DOCTYPE html>
<html>
<head>
    <title>Gage's Portfolio</title>
    @vite('resources/css/app.css') 
    <link rel="stylesheet" href="{{ secure_asset('build/assets/app-ix0mzfeY.css') }}">
    <script src="{{ secure_asset('build/assets/app-Bg1aHGgo.js') }}" defer></script>
</head>
<body class="">
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

    <x-guest-layout class="login-form-container -mt-10">
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ secure_url(route('login', [], false)) }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
</body>
</html>
