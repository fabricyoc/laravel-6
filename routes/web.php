<?php

//
// INÍCIO - SESSÕES
//

Route::get('sessao/teste', 'SessaoController@teste'); // rota p teste
Route::get('sessao', 'SessaoController@index')->name('sessao.index');
Route::post('sessao/bemvindo', 'SessaoController@logado')->name('sessao.logado');

//
// FIM - SESSÕES
//




Route::get('/', function () {
    return view('welcome', ['hello' => 'default']);
});

// 1.1 Tudo pela rota
// Route::get('usuario/{id?}/', function ($id = ""){
//     if (empty($id)) 
//     {
//         return "parâmetro não informado.";
//     }else
//     {
//         return "Id do usuário é: $id";
//     }
// });

// 1.1 Pelo UsuarioController
Route::get('usuario/{id?}', 'UsuarioController@mostrar');

// 1. Exercício
Route::get('operacao/calcular/{n1}/{n2}', 'UsuarioController@calcular')->middleware('checknumber');

// 2.1 Passando dado para a visão :: array associativo
// Route::view('/welcome', 'welcome', 
//     ['hello' => 'Olá Mundo!'] );

// 2.2 Passando dado para a visão :: usando closures
Route::get('/welcome', function(){
    return view('welcome', ['hello' => 'Olá mundo2!']);
});

// 3.1 Exercício :: VIEW
Route::view('/operacao/form', 'form')->name('opform');
Route::post('/operacao/calcularform', 'UsuarioController@calcularform')->name('show.calcularform');

// 4.1 Exercício :: Enviando/Salvando arquivos
Route::view('/file', 'arquivos.file');
Route::post('/arquivo/enviar', 'ArquivoController@enviar')->name('enviararquivo');

// 5.1 Response :: como texto
// Route::get('/', function(){
//     return response("Olá mundo, response!");
// });

//5.2 Response :: como visão
Route::get('/profile', function(){
    return response()->view('form');
});

// 5.3 Response :: como JSON
Route::get('/eventos/datas', function(){
    return response()->json([
        '12/10' => 'Padroeira do Brasil',
        '25/12' => 'Natal',
        '31/12' => 'Virada de Ano'
    ]);
});

// 5.4 Response ;: arquivo para DOWNLOAD
Route::get('/download/pdf/{id}', function($id){
    return response()->download("storage/pdf/". $id. ".pdf");
});

// 5.5 Response :: Arquivos exibidos no Browser
Route::get('visualizador/pdf/{id}', function($id){
    return response()->file("storage/pdf". $id. ".pdf");
});


// Testes de Response:
Route::get('/google', function(){
    return redirect()->away('https://google.com');
});


Route::get('/calcform', function(){
    return redirect()->route('opform');
});


// 6.1  Teste com blade :: heranca
Route::view('/view/heranca', 'blade.testeA');

// 6.2 Teste com blade :: Componente e Slot
Route::view('/view/comp', 'componentslot.view');

// 6.3 Exercício Blade
Route::view('blade', 'trans-tela2.login');

Route::view('/trans/tela', 'transtela1.login');
Route::post('/trans/tela/proc', 'UsuarioController@tela')->name('proctela');
Route::view('/trans/loginfeito', 'transtela1.logado');

//
//
// PELOS VÍDEOS
//
//
Route::any('any', function(){ // aceita todo tipo de requisição(VERBO) HTTP 
    return 'any';
});

// aceita todo tipo de VERBO declarado
Route::match(['post', 'get'], 'match', function(){
    return 'match';
});

// Rotas nomeadas
Route::get('redirect3', function(){
    return redirect()->route('url.name');
});

Route::get('name-url', function(){
    return 'Hey hey hey';
})->name('url.name');

//
// Grupos de rotas
//

// 1o/3º exemplo não favorável
Route::get('login', function(){
    return 'Login';
})->name('login');

// Route::get('admin/dashboard', function(){
//     return 'Home Admin';
// })->middleware(['auth', 'checknumber']);

// Route::get('admin/financeiro', function(){
//     return 'Financeiro Admin';
// })->middleware('auth');

// Route::get('admin/produtos', function(){
//     return 'Produtos Admin';
// })->middleware('auth');

// 2o/3º exemplo o bom para o caso supracitado
Route::middleware([])->group(function(){
    
    Route::prefix('admin')->group(function(){
        // Feito para remover o prefixo ADMIN das rotas abaixo:
        // Route::get('admin/dashboard', function(){
        Route::get('/dashboard', function(){ // ex.: sem a '/'
            return 'Home Admin';
        });
    
        Route::get('/financeiro', function(){
            return 'Financeiro Admin';
        });
    
        Route::get('/produtos', function(){
            return 'Produtos Admin';
        });

        Route::namespace('Admin')->group(function(){
            // Acessando Controller com subdiretório :: ANTES
            // Route::get('/', 'Admin\TesteController@teste');
            
            // Acessando Controller com subdiretório :: DEPOIS
            Route::get('/', 'TesteController@teste');
        });
        
    });
});

// 3o/3º exemplo o melhor para o caso supracitado
Route::group([
    'middleware' => [],
    'prefix' => 'panel',
    'namespace' => 'Admin' // controles dentro de Admin
], function(){
    Route::get('/dashboard', function(){ // ex.: sem a '/'
        return 'Home Admin - dentro de panel';
    });
});

// AUla 16 : COntrollers
// Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit'); // Formulário para editar produto | exibe a opção
// Route::get('products/create', 'ProductController@create')->name('products.create'); // Formulário para cadastrar | exibe a opção
// Route::get('products/{id}', 'ProductController@show')->name('products.show'); //Produto específico
// Route::get('products', 'ProductController@index')->name('products.index'); //Listagem de produtos
// Route::post('products', 'ProductController@store')->name('products.store'); //quando for registrar um novo produto no sistema
// Route::put('products/{id}', 'ProductController@update')->name('products.update'); // atualiza o registro
// Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy'); // apaga um registro

// Aula 19 :: Resources no Laravel -> CRUD automático :: Melhor que a forma supracitada
Route::resource('products', 'ProductController');