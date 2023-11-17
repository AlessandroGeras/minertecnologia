@extends('layouts.layout')

@section('title', 'Create User')

@section('content')

<x-app-layout>
    <x-guest-layout>
        <x-authentication-card>
            <x-slot name="logo">
            </x-slot>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register.user') }}">
                @csrf

                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="roles" value="Permissões" />
                    <div class="flex space-x-4 text-sm">
                        <div>
                            <input type="checkbox" id="categorias" name="roles[]" value="categorias">
                            <label for="categorias">Categorias</label>
                        </div>
                        <div>
                            <input type="checkbox" id="marcas" name="roles[]" value="marcas">
                            <label for="marcas">Marcas</label>
                        </div>
                        <div>
                            <input type="checkbox" id="produtos" name="roles[]" value="produtos">
                            <label for="produtos">Produtos</label>
                        </div>
                    </div>
                </div>



                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="mt-4 text-center">
                    <x-button class="">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </x-authentication-card>
    </x-guest-layout>
</x-app-layout>

@endsection