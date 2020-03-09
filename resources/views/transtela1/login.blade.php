@extends('transtela1.layout')

@section('titulo', 'Login')

@section('cabecalho')
    @parent
    <h4>Seja bem-vindo ao nosso sistema</h4>
@endsection

@section('conteudo')

<form action="{{ route('proctela') }}" method="post">
    @csrf
    <table>
        <tr>
            <td>Login:</td>
            <td>
                <input type="text" name="login" minLength="6" placeholder="Digite seu email">
            </td>
        </tr>
        <tr>
            <td>Senha:</td>
            <td>
                <input type="password" name="senha" placeholder="Digite sua senha">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Enviar">
            </td>
        </tr>
    </table>
</form>

@endsection