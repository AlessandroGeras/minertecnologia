@extends('layouts.layout')

@section('title', 'Edit User')

@section('content')

<x-app-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">            
            <form method="POST" action="{{ route('update.user', $user->id) }}">
                @csrf

                <div>
                <x-label for="name" value="{{ __('Name') }}" />
                    <span class="block mt-1 w-full">{{ $user->name }}</span>
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                </div>             

                <div class="mt-4">
                    <x-label for="roles" value="Permissões" />
                    <div class="flex space-x-4 text-sm">
                        <div>
                            <input type="checkbox" id="categorias" name="roles[]" value="categorias" {{ in_array('categorias', $user->getRoleNames()->toArray()) ? 'checked' : '' }}>
                            <label for="categorias">Categorias</label>
                        </div>
                        <div>
                            <input type="checkbox" id="marcas" name="roles[]" value="marcas" {{ in_array('marcas', $user->getRoleNames()->toArray()) ? 'checked' : '' }}>
                            <label for="marcas">Marcas</label>
                        </div>
                        <div>
                            <input type="checkbox" id="produtos" name="roles[]" value="produtos" {{ in_array('produtos', $user->getRoleNames()->toArray()) ? 'checked' : '' }}>
                            <label for="produtos">Produtos</label>
                        </div>
                    </div>
                </div>             

                <div class="mt-4 text-center">
                    <x-button class="">
                        EDIT
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

@endsection