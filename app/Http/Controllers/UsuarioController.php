<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function mostrar($id)
    {
        return "Id do usuário: $id";
    }

    public function calcular($n1, $n2)
    {
        $soma = $n1 + $n2;
        $sub = $n1 - $n2;
        $mult = $n1 * $n2;
        $div = $n1 / $n2;

        return "<h2>Operações dos números: $n1 e $n2</h2><br/> 
        Soma: $soma.<br/> Subtração: $sub.<br/> Multiplicação: $mult.<br/> Divisão: $div.";
    }

    public function calcularform(Request $r)
    {
        // return dd($r->all());
        $n1 = $r->n1;
        $n2 = $r->n2;

        // echo filled($n1); // retorna 1/true se o valor existir e for preenchido
        return "A soma de $n1 + $n2 é igual a: <strong>". ($n1+$n2)."</strong>";
    }

    public function tela(Request $r)
    {
        // return dd($r->all());
        $login = $r->login;
        $senha = $r->senha;

        if ($login == 'fabricyo' && $senha == '123') 
        {
            return view('transtela1.logado');
        }
        else
        {
            return 'deu zebra';
        }
    }

}
