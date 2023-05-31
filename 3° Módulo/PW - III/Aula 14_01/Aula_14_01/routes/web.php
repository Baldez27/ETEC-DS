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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/cep', function () {
    return view('cep');
});

// Route::get('/grafico', function () {
//     return view('grafico');
// });

Route::get('/grafico','IndexController@index');

Route::get('/contato','ContatoController@index');
Route::post('/contato','ContatoController@store');
Route::get('/contato/excluir/{idContato}','ContatoController@destroy');

Route::get('/reclamacao','reclamacaoController@index');
Route::post('/reclamacao','reclamacaoController@store');
Route::get('/reclamacao/excluir/{idRec}','reclamacaoController@destroy');

Route::get('/laboratorio','LaboratorioController@index');
Route::post('/laboratorio','LaboratorioController@store');
Route::get('/laboratorio/excluir/{idLab}','LaboratorioController@destroy');