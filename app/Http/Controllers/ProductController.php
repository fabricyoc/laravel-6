<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $request;

    public function __construct(Request $r)
    {
        // EVITA A INJENÇAO DE DEPENDECIA
        $this->request = $r;

        //
        // USANDO MIDDLEWARE NO CONTROLLER :: abaixo
        //

        // $this->middleware('auth');
        // $this->middleware('auth')->only(['create', 'store']); 
        // $this->middleware('auth')->except(['index', 'show']); 

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'listagem dos produtos';  
        
        $teste = 123;
        $teste2 = 'teste2';
        $teste3 = [1, 2, 3, 4];
        $products = ['tv', 'geladeira', 'fogão', 'ar-condicionado'];
        // return view('teste', [
        //     'teste' => $teste
        // ]);

        return view('admin.pages.products.index', 
            compact('teste', 'teste2', 'teste3', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('Cadastrando...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd("Editando o produto {$id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
