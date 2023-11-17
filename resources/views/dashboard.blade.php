@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')

<x-app-layout>
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @if(session('success'))
                <div class="alert alert-success bg-green-500 text-center">
                    {{ session('success') }}
                </div>
                @endif

                @if(auth()->check())
                @foreach(auth()->user()->getRoleNames() as $role)
                @switch($role)
                @case('admin')
                <x-create-user />
                @break

                @case('products')
                {{-- Conteúdo para products --}}
                Bem-vindo, usuário de produtos!
                @break

                @case('category')
                {{-- Conteúdo para category --}}
                Bem-vindo, usuário de categorias!
                @break

                @case('marks')
                {{-- Conteúdo para marks --}}
                Bem-vindo, usuário de marcas!
                @break

                @endswitch
                @endforeach
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
@endsection