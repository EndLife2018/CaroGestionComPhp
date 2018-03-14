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


Route::resource('clients', 'ClientController');

Route::resource('clients', 'ClientController');

Route::resource('clients', 'ClientController');

Route::resource('clients', 'ClientController');

Route::resource('clients', 'ClientController');

Route::resource('articles', 'ArticleController');

Route::resource('articles', 'ArticleController');

Route::resource('commandeClients', 'CommandeClientController');

Route::resource('commandeFournisseurs', 'CommandeFournisseurController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('clients', 'ClientController');

Route::resource('articles', 'ArticleController');

Route::resource('commandeClients', 'CommandeClientController');

Route::resource('commandeFournisseurs', 'CommandeFournisseurController');

Route::resource('fournisseurs', 'FournisseurController');