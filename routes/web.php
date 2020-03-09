<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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


// 6.1 Teste com blade :: heranca
Route::view('/view/heranca', 'blade.testeA');

// 6.2 Teste com blade :: Componente e Slot
Route::view('/view/comp', 'componentslot.view');

// 6.3 Exercício Blade
Route::view('blade', 'trans-tela2.login');

Route::view('/trans/tela', 'transtela1.login');
Route::post('/trans/tela/proc', 'UsuarioController@tela')->name('proctela');
Route::view('/trans/loginfeito', 'transtela1.logado');