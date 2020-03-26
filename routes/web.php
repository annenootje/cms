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

Route::get('/bestellingen', "PagesController@bestellingen");
Route::get('/vragen', "PagesController@vragen");
