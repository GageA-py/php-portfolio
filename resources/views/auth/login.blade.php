<!DOCTYPE html>
<html>
<head>
    @vite('resources/css/app.css') 
    <link rel="stylesheet" href="{{ secure_asset('build/assets/app-ix0mzfeY.css') }}">
    <script src="{{ secure_asset('build/assets/app-Bg1aHGgo.js') }}" defer></script>
</head>
<body>
    <header class="w-screen border-b-rounded grid grid-cols-2 items-center py-10 lg:grid-cols-3 bg-gray-800">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <span class="font-semibold text-xl tracking-tight pl-10">Gage's Portfolio</span>
        </div>
        <div class="flex lg:justify-center lg:col-start-2"></div>
        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end pr-10">
                @auth
                    <!-- Authenticated links -->
                @else
                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <x-guest-layout>
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
