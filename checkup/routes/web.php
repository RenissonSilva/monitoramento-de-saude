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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adicionar/checkup', [
    'uses' => 'CheckupController@adicionarCheckup',
    'as' => 'adicionar.checkup'
]);
Route::get('/listagem/checkup', [
    'uses' => 'CheckupController@listagemCheckup',
    'as' => 'listagem.checkup'
]);
Route::post('/salvar/checkup', [
    'uses' => 'CheckupController@salvarCheckup',
    'as' => 'salvar.checkup'
]);
Route::get('/visualizar/checkup/{id}', [
    'uses' => 'CheckupController@visualizarCheckup',
    'as' => 'visualizar.checkup'
]);