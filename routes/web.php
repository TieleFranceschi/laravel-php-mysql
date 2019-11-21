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

Route::get('/', function () {
    return view('cadastroCategoria');
});

Route::get('/', function () {
    return view('atualizarCategoria');
});

Route::get('/', function () {
    return view('listarCategoria');
});

Route::get('/', function () {
    return view('removerCategoria');
});

Route::get('/', function () {
    return view('cadastroRestaurante');
});

Route::get('/', function () {
    return view('atualizarRestaurante');
});

Route::get('/', function () {
    return view('listarRestaurante');
});

Route::get('/', function () {
    return view('removerRestaurante');
});
