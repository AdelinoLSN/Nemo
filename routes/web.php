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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/listar/psiculturas', "PsiculturaController@listar");

Route::get('/cadastrar/psicultura', "PsiculturaController@cadastrar");

Route::post('/adicionarPsicultura', "PsiculturaController@adicionar");

Route::get('/editar/psiculturas/{id}', "PsiculturaController@editar");

Route::post('/salvarPsicultura', "PsiculturaController@salvar");

Route::get('/remover/psicultura/{id}', "PsiculturaController@remover");

Route::post('/apagarPsicultura', "PsiculturaController@apagar");

Route::get('/listar/tanques', "TanqueController@listar");

Route::get('/cadastrar/tanque', "TanqueController@cadastrar");

Route::post('/adicionarTanque', "TanqueController@adicionar");

Route::get('/editar/tanque/{id}', "TanqueController@editar");

Route::post('/salvarTanque', "TanqueController@salvar");

Route::get('/remover/tanque/{id}', "TanqueController@remover");

Route::post('/apagarTanque', "TanqueController@apagar");

Route::get('/listar/especies', "EspecieController@listar");

Route::get('/adicionar/especie', "EspecieController@adicionar");

Route::post('/cadastrarEspecie', "EspecieController@cadastrar");

Route::post('/salvarEspecie', "EspecieController@salvar");

Route::get('/editar/especie/{id}', "EspecieController@editar");

Route::post('/apagarEspecie', "EspecieController@apagar");

Route::get('/remover/especie/{id}', "EspecieController@remover");

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cadastrar/qualidadeAgua', "QualidadeAguaController@cadastrar");

Route::post('/adicionarQualidadeAgua', "QualidadeAguaController@adicionar");

Route::get('/listar/qualidadesAgua', "QualidadeAguaController@listar");

Route::get('/editar/qualidadeAgua/{id}', "QualidadeAguaController@editar");

Route::post('/salvarQualidadeAgua', "QualidadeAguaController@salvar");

Route::post('/apagarQualidadeAgua', "QualidadeAguaController@apagar");

Route::get('/remover/qualidadeAgua/{id}', "QualidadeAguaController@remover");

