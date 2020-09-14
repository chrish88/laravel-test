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

    return view('welcome');

    // return view('welcome', [
    //     'param' => request('param')
    // ]);
});

Route::get('/pizzas', 'PizzasController@index');
Route::get('/pizzas/create', 'PizzasController@create');
Route::post('/pizzas', 'PizzasController@store');
Route::get('/pizzas/{id}', 'PizzasController@show');
Route::delete('/pizzas/{id}', 'PizzasController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
