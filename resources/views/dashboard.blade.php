<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                @if(auth()->check())
                @switch(auth()->user()->getRoleNames()->first())
                @case('admin')
                {{-- Conteúdo para admin --}}
                Olá, administrador!
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

                @default
                {{-- Conteúdo para outros usuários --}}
                Bem-vindo, usuário padrão.
                @endswitch
                @endif

            </div>
        </div>
    </div>
</x-app-layout>