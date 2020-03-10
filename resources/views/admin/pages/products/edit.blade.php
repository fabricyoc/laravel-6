@extends('admin.layouts.app')

@section('title', 'Editar Produto')

@section('content')
    <h1>Edita Produto {{ $id }}</h1>
    <form action="{{ route('products.update', $id) }}" method="post">
        {{-- 1a forma :: ativar o verbo put --}}
        {{-- <input type="hidden" name="_method" value="put"/> --}}
        {{-- 2a forma :: ativar o verbo put --}}
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição:">
        <button type="submit">Enviar</button>
    </form>
@endsection