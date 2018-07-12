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
    return view('welcome');
});

Route::get('/listar/psiculturas', "PsiculturaController@listar");

Route::get('/cadastrar/psicultura', "PsiculturaController@cadastrar");

Route::post('/adicionarPsicultura', "PsiculturaController@adicionar");

Route::get('/editar/psiculturas/{id}', "PsiculturaController@editar");

Route::post('/salvarPsicultura', "PsiculturaController@salvar");

Route::get('/remover/psicultura/{id}', "PsiculturaController@remover");

Route::post('/apagarPsicultura', "PsiculturaController@apagar");