<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::view('/', 'home.home');

//Rota: Searching Lista de Produtos
//Route::post('user/add', 'UsuarioController@addUser')->name('user.add');

//Rota: Searching Lista de Produtos
//Route::post('login', 'UsuarioController@index')->name('uuser.form.login');

Auth::routes();


//Grupo de rotas: Login
Route::group(['prefix' => 'home', 'namespace' => 'Home'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('rifas/create', 'RifaController@index')->name('home.rifas.create');
    Route::post('rifas/addpicture', 'RifaController@sendImg')->name('home.rifas.add.picture');
});



