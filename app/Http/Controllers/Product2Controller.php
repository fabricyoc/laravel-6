<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    // CONTROLLER CRIADO DE FORMA MANUAL
    //

    public function index()
    {
        // Lista os produtos
        $products = ['banana', 'peito de frango', 'ovo'];

        return $products;
    }

    public function show($id)
    {
        // Exibe um produto específico
        return "Exibindo o produto de id: {$id}";
        
    }

    public function create()
    {
        // Exibe o FORM para CRIAR um produto
        return "Exibindo o form de cadastro de um novo produto";
    }

    public function edit($id)
    {
        // Exibe o FORM para ALTERAR um produto
        return "Form para editar o produto {$id}";
    }

    public function store()
    {
        // CADASTRA um novo produto
        return "Cadastrando um novo produto";
    }

    public function update($id)
    {
        // EDITA um produto
        return "Editando o produto {$id}";
    }

    public function destroy($id)
    {
        // DELETA um produto
        return "Apagando o produto {$id}";
    }
}
