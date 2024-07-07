<!DOCTYPE html>
<html>
<head>
    @vite('resources/css/app.css') 
    <link rel="stylesheet" href="{{ secure_asset('build/assets/app-ix0mzfeY.css') }}">
    <script src="{{ secure_asset('build/assets/app-Bg1aHGgo.js') }}" defer></script>
</head>
<body>
    <header class="w-full bg-gray-800 py-4">
        <div class="container mx-auto flex justify-between items-center">
            <span class="font-semibold text-xl text-white">Gage's Portfolio</span>
            @if (Route::has('login'))
                <nav>
                    @auth
                        <!-- Authenticated links -->
                    @else
                        <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-white transition hover:text-gray-300">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-white transition hover:text-gray-300">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <x-guest-layout class="login-form-container mt-5 sm:mt-10">
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
