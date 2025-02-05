<head>
    <title>Masuk</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/announce.ico') }}">
</head>
<x-guest-layout>
    <x-auth-card>
        
        <!-- Uncommented the logo section -->
        <x-slot name="logo">
            <a href="/">
                <img class="w-20 h-20" src="{{ asset('img/announce.ico') }}" alt="Logo">
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Kata Sandi')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Lupa kata sandi?') }}
                    </a>
                @endif --}}

                <x-button class="ml-3 bg-green-500 text-white font-bold rounded-md my-3 py-3 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:bg-green-700 hover:scale-105 duration-300 ease-in-out">
                    {{ __('Masuk') }}
                </x-button>
            </div>
        </form>
        
    </x-auth-card>
</x-guest-layout>
