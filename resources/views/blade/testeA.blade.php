@extends('blade.template')

@section('titulo', 'Teste A')

@section('cabecalho')
    @parent
    <h3>Teste A</h3>
@endsection

@section('conteudo')
    <p>Teste A - iniciando o primeiro teste</p>
@endsection