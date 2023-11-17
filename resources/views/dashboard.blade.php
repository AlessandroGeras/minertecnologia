@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')

<x-app-layout>
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-16">
            <div class="overflow-hidden shadow-xl sm:rounded-lg">

                @if(session('success'))
                <div class="alert alert-success bg-green-500 text-center">
                    {{ session('success') }}
                </div>
                @endif

                @if(auth()->check())
                @php
                $roles = auth()->user()->getRoleNames()->toArray();
                sort($roles);
                @endphp

                @foreach($roles as $role)
                @if($role == 'admin')
                <x-show-users :users="$users" />

                @elseif($role == 'categorias')
                <x-role text="Bem-vindo ao setor de categorias" />

                @elseif($role == 'marcas')
                <x-role text="Bem-vindo ao setor de marcas" />

                @elseif($role == 'produtos')
                <x-role text="Bem-vindo ao setor de produtos" />

                @endif
                @endforeach
                @endif

            </div>
        </div>
    </div>
</x-app-layout>

@endsection