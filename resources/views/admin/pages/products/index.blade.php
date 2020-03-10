@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')
    <h1>Exibindo os produtos</h1>
    
    {{-- FORMULÁRIOS NO LARAVEL --}}
    <a href="{{ route('products.create') }}">Cadastrar</a>


    

    {{-- EXEMPLOS :: COMPONENT e SLOT (view.admin.components) --}}
    <hr>
    @component('admin.components.card')
    @slot('title')
        <h1>Título Card</h1>
    @endslot
        Um card de exemplo
    @endcomponent

    
    {{-- EXEMPLO :: INCLUDE --}}
    <hr>
    @include('admin.includes.alerts', ['content' => 'Alerta de coisas'])

    
    {{-- INÍCIO :: ESTRUTURAS DE REPETIÇÃO --}}
    <hr>
    {{-- FOREACH --}}
    @if (isset($products))
        @foreach ($products as $product)
            <p class="@if ($loop->last) last @endif">{{ $product }}</p>
        @endforeach
    @endif
    
    <hr>

    {{-- FORELSE --}}
    @forelse ($products as $product)
        <p>{{ $product }}</p>
    @empty
        <p>Não existem productos cadastrados.</p>
    @endforelse
    
    
    {{-- FIM :: ESTRUTURAS DE REPETIÇÃO --}}

    <hr>


    @if ($teste === '123')
        É igual
    @elseif($teste == 123)
        É igual a 123
    @else
        É diferente
    @endif

    {{-- Igual o IF, porém, só entra se for FALSE --}}
    @unless ($teste === '123')
        adsf
    @endunless

    @isset($teste2)
        <p>{{$teste2}}</p>
    @endisset

    @empty($teste3)
     <p>Vazio...</p>  
    @endempty

    @auth
        <p>Autenticado</p>
        @else
            <p>Não autenticado</p>
    @endauth

    @guest
        <p>Não autenticado</p>
    @endguest

    @switch($teste)
        @case(1)
            Igual 1
            @break
        @case(123)
            Igual 123
            @break
        @default
            Default
    @endswitch

@endsection


{{-- ESTILO EXEMPLO P/ APLICAR A VARIÁVEL LOOP --}}
@push('styles')
    <style>
        .last{
            background: #CCC;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.body.style.background = '#d6d6d6'
    </script>
@endpush