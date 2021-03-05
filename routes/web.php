<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/cadastroprodutos', 'ProdutoController@getProduto')->name('ProdutoController@getProduto');
Route::post('/cadastroprodutos', 'ProdutoController@getProduto')->name('ProdutoController@getProduto');

Route::get('/fornecedor', 'FornecedorController@getFornecedor')->name('FornecedorController@getFornecedor');
Route::post('/fornecedor', 'FornecedorController@getFornecedor')->name('FornecedorController@getFornecedor');

Route::get('/laboratorio', 'LaboratorioController@getLaboratorio')->name('LaboratorioController@getLaboratorio');
Route::post('/laboratorio', 'LaboratorioController@getLaboratorio')->name('LaboratorioController@getLaboratorio');

Route::get('/cliente', 'ClienteController@getCliente')->name('ClienteController@getCliente');
Route::post('/cliente', 'ClienteController@getCliente')->name('ClienteController@getCliente');

Route::get('/pesquisar', 'PesquisarController@getPesquisa')->name('PesquisarController@getPesquisa');
Route::post('/pesquisar', 'PesquisarController@getPesquisa')->name('PesquisarController@getPesquisa');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
