<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//criar rotas
//Route::middleware('auth:api')->group(function ($e){


Route::get('categoria_restaurantes', 'CategoriaRestauranteController@index');
Route::get('categoria_restaurantes/{categoria}','CategoriaRestauranteController@show');
Route::post('categoria_restaurantes', 'CategoriaRestauranteController@store');
Route::put('categoria_restaurantes/{categoria}', 'CategoriaRestauranteController@update');
Route::delete('categoria_restaurantes/{categoria}', 'CategoriaRestauranteController@destroy');

Route::post('categoria_restaurantes/{categoria}/restaurantes','RestauranteController@store');
Route::get('categoria_restaurantes/{categoria}/restaurantes','RestauranteController@index');
Route::get('categoria_restaurantes/{categoria}/restaurantes','RestauranteController@show');
Route::put('categoria_restaurantes/{categoria}/restaurantes','RestauranteController@update');
Route::delete('categoria_restaurantes/{categoria}/restaurantes','RestauranteController@destroy');


//Route::post('auth/logout','AuthController@logout');
//Route::get('auth','AuthController@index');
//});

//Route::post('auth/register','AuthController@register');
//Route::post('auth/login','AuthController@login');
