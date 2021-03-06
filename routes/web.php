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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// rotas para preg
Route::get('/preg/home', 'PregController@index')->name('preg.home');

// rotas para coordenador
Route::get('/coordenador/home', 'CoordenadorController@index')->name('coordenador.home');

// rotas para ppc
Route::get('/coordenador/ppc/cadastrar', 'PpcController@cadastrar')->name('ppc.cadastrar');
Route::post('/coordenador/ppc/criar', 'PpcController@criar')->name('ppc.criar');
