@extends('layouts.app')

@section('titre_page')
    Page d'accueil
@endsection

@section('content')

    <div class="relative flex items-center text-center justify-center my-12 overflow-hidden text-gray-700">
        <form method="POST" class="w-4/5  bg-white/90" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="w-full md:w-full px-3 my-6 md:mb-0">
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="w-full md:w-full px-3 my-6 md:mb-0">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="w-full md:w-full px-3 my-6 md:mb-0">
                <x-label for="password" :value="__('Mot de Passe')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="w-full md:w-full px-3 my-6 md:mb-0">
                <x-label for="password_confirmation" :value="__('Confirmation du Mot de Passe')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4  px-3 my-6">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4  px-3 my-6">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </div>
@endsection