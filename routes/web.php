<?php

use Illuminate\Support\Facades\Route;

//Auth
Auth::routes();
Route::get('/logout', 'PagesController@logout');

//Hoofdpagina's
Route::get('/', "PagesController@index")->middleware('auth');
Route::get('/wijzigen', "PagesController@index")->middleware('auth');
Route::get('/resultaten', "PagesController@resultaten")->middleware('auth');
Route::get('/testen', "PagesController@testen")->middleware('auth');
Route::get('/aanbevelingen', "PagesController@aanbevelingen")->middleware('auth');
Route::get('/vragen', "PagesController@vragen")->middleware('auth');
Route::get('/home', 'PagesController@index')->middleware('auth');

//Conversies
Route::get('/bestellingen', "ConversiesController@bestellingen")->middleware('auth');
Route::get('/aanmeldingen', "ConversiesController@aanmeldingen")->middleware('auth');

//Openingstijden
Route::get('/wijzigen/openingstijden', "OpeningtimeController@index")->middleware('auth');
Route::patch('/wijzigen/openingstijden/edit', "OpeningtimeController@update")->middleware('auth');

//Blogs
Route::get('/wijzigen/blogs', "BlogsController@overview")->middleware('auth');
Route::get('/wijzigen/blogs/edit', "BlogsController@edit")->middleware('auth');
Route::get('/wijzigen/blogs/new', "BlogsController@new")->middleware('auth');
Route::patch('/wijzigen/blogs/edit', "BlogsController@update")->middleware('auth');