<head>
    <title>Lupa Kata Sandi</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/announce.ico') }}">
</head>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img class="w-20 h-20" src="{{ asset('img/announce.ico')}} " alt="Logo">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Lupa kata sandi? Jangan khawatir. Silakan beritahu kami alamat email Anda, dan kami akan mengirimkan tautan reset kata sandi melalui email yang akan memungkinkan Anda untuk memilih yang baru.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
           
                <x-button class=" bg-green-500 text-white font-bold rounded-md my-3 py-3 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:bg-green-500 hover:scale-105 duration-300 ease-in-out">
                     {{ __('Kirim Email') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
