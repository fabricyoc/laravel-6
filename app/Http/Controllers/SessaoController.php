<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class SessaoController extends Controller
{

    //
    // METÓDO EXEMPLO!
    //
    public function teste()
    {
        echo "<h1>Teste Sessão</h1>";  
        
        // TRÊS formas para INSERIR dados nas sessões do navegador
        session([ 'name' => 'fabricyo' ]); 
        echo session()->get('name'); // RETORNA O VALOR DA CHAVE
        
        session()->put('lastname', 'web');  
        
        Session::put('email', 'fabricyo@gmail.com');
       


        // Exemplo: Carrinho de compras
        Session::put([
            'cart_product' => 1,
            'cart_quantity' => 2,
            'price' => 199.9,
        ]);


        // Elima uma posição da SESSÃO
        Session::forget(['price', 'cart_quantity']);


        // Checa valor -> Ex.: se determinado cupom de desconto é válido
        if (Session::has('email'))  // também pode utilizar o exists, porém, ele não descarta a variável
        {
            echo "<p>O e-mail informado <strong>É</strong> válido!</p>";
        }else
        {
            echo "<p>O e-mail informado <strong>NÃO</strong> é válido!</p>";
        }


        // Notifica uma com uma mensagem, por exemplo, apenas uma vez
        // Session::flash('message', 'O artigo foi criado com sucesso!');
        // echo Session::get('message');

        // Facade e Helper
        dd(Session::all(), session()->all());
    }


    public function index()
    {
        return view('session.login');
    }


    public function logado(Request $r)
    {
        return "LOGADO";
    }
}