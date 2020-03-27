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

Route::get('/', "PagesController@index");
Route::get('/wijzigen', "PagesController@index");
Route::get('/resultaten', "PagesController@resultaten");
Route::get('/testen', "PagesController@testen");
Route::get('/aanbevelingen', "PagesController@aanbevelingen");
Route::get('/vragen', "PagesController@vragen");

//Conversies
Route::get('/bestellingen', "ConversiesController@bestellingen");
Route::get('/aanmeldingen', "ConversiesController@aanmeldingen");

//Elementen

//Openingstijden
Route::get('/openingstijden', "OpeningtimeController@index");
Route::patch('/openingstijden/edit', "OpeningtimeController@update");