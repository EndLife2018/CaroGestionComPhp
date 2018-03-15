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

Route::resource('clients', 'ClientController');
Route::resource('articles', 'ArticleController');
Route::resource('commandeClients', 'CommandeClientController');
Route::resource('commandeFournisseurs', 'CommandeFournisseurController');
Route::resource('fournisseurs', 'FournisseurController');

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/pdf/{order}', ['as' => 'order.pdf', 'uses' => 'CommandeClientController@devisPdf']);


Route::get('/pdf/{order}', ['as' => 'devis.pdf', 'uses' => 'CommandeClientController@devisPdf']);

