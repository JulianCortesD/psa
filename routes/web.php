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

Route::get('/','InicioController@index');
Route::get('/home','InicioController@index')->name('home');
Route::get('/indicadores','IndicadorController@index')->name('indicadores');
Route::get('/conceptos','ConceptosController@index')->name('conceptos');
Route::get('/noticias','NewsController@index')->name('noticias');

