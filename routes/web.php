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

//Rotas de Piscicultura
Route::get('/listar/pisciculturas', "PisciculturaController@listar");
Route::get('/cadastrar/piscicultura', "PisciculturaController@cadastrar");
Route::post('/adicionarPiscicultura', "PisciculturaController@adicionar");
Route::get('/editar/pisciculturas/{id}', "PisciculturaController@editar");
Route::post('/salvarPiscicultura', "PisciculturaController@salvar");
Route::get('/remover/piscicultura/{id}', "PisciculturaController@remover");
Route::post('/apagarPiscicultura', "PisciculturaController@apagar");

//Rotas de Gerenciador
Route::get('listar/gerenciadores/piscicultura/{id}',"GerenciarController@listarGerenciadores")->name('listar.gerenciadores');
Route::get('adicionar/gerenciador/piscicultura/{id}',"GerenciarController@adicionarGerenciador");
Route::post('inserirGerenciador',"GerenciarController@inserirGerenciador");
Route::get('/remover/gerenciador/{user_id}/piscicultura/{piscicultura_id}',  "GerenciarController@apagarGerenciador");

//Rotas de Tanque
Route::get('/listar/tanques/{id}', "TanqueController@listar")->name('listarTanques');
Route::get('/cadastrar/tanque/{id}', "TanqueController@cadastrar");
Route::post('/adicionarTanque', "TanqueController@adicionar");
Route::get('/editar/tanque/{id}', "TanqueController@editar");
Route::post('/salvarTanque', "TanqueController@salvar");
Route::get('/remover/tanque/{id}', "TanqueController@remover");
Route::post('/apagarTanque', "TanqueController@apagar");

//Rotas de Espécie
Route::get('/listar/especies', "EspecieController@listar");
Route::get('/adicionar/especie', "EspecieController@adicionar");
Route::post('/cadastrarEspecie', "EspecieController@cadastrar");
Route::post('/salvarEspecie', "EspecieController@salvar");
Route::get('/editar/especie/{id}', "EspecieController@editar");
Route::post('/apagarEspecie', "EspecieController@apagar");
Route::get('/remover/especie/{id}', "EspecieController@remover");

//Rotas de Autenticação
Auth::routes();

//Rotas de Sistema
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//Rotas de Qualidade Água
Route::get('/cadastrar/qualidadeAgua', "QualidadeAguaController@cadastrar");
Route::post('/adicionarQualidadeAgua', "QualidadeAguaController@adicionar");
Route::get('/listar/qualidadesAgua', "QualidadeAguaController@listar");
Route::get('/editar/qualidadeAgua/{id}', "QualidadeAguaController@editar");
Route::post('/salvarQualidadeAgua', "QualidadeAguaController@salvar");
Route::post('/apagarQualidadeAgua', "QualidadeAguaController@apagar");
Route::get('/remover/qualidadeAgua/{id}', "QualidadeAguaController@remover");

