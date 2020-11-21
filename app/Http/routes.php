<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return "Será que vai assim?";
});

Route::get('/php-info', function () {
    phpinfo();
});

Route::any('/formulario', function() {
    if(Request::isMethod('GET')) {
        return '
        <form method="post" action="/formulario">
            Nome: <input type="text" name="nome" />
        </form>
        ';
    }
    else {
        echo Request::input('nome');
    } 
});

Route::get('/thyago/{id}/{idade}', function($id, $idade) {
    echo "OLá fulano com {$idade} anos, o seu ID é {$id}";
})->where('id','[0-9]+')->where('idade','[0-9]+');

Route::resource('/rotas', 'Rotas');

Route::get('/meumetodo', 'Rotas@exemploRequisicao');
Route::post('/enviar-contato', 'Rotas@enviarContato');

Route::get('/put', 'BasicoController@putBasico');
Route::put('/put', 'BasicoController@put');

Route::resource('/livro', 'LivroController');

Route::get('/exibirdados', function() {
    return view('exibirdados', [
        'lista' => ['dado1', 'dado2', 'dado3']
    ]);
});
