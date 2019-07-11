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
Route::get('/oficinas','OfficesController@index')->name('oficinas');
Route::get('/preguntas','QuestionsController@index')->name('preguntas');
Route::get('/aire_calidad','AireController@calidad')->name('airecalidad');
Route::get('/aire_calidad_contaminacion','AireController@calidadContaminacion')->name('calidadcontaminacion');
Route::get('/aire_calidad_iboca','AireController@calidadIBOCA')->name('calidadiboca');
Route::get('/aire_calidad_ruido','AireController@calidadRuido')->name('calidadruido');
Route::get('/aire_calidad_radiacion','AireController@calidadRadiacion')->name('calidadradiacion');
Route::get('/aire_calidad_tabaco','AireController@calidadTabaco')->name('calidadtabaco');
Route::get('/aire_indicadores','AireController@indicadores')->name('aireIndicadores');
Route::get('/aire_mapas','AireController@mapas')->name('aireMapas');
Route::get('/aire_ruido_rem','AireController@aireRuidoREM')->name('aireRuidoREM');
Route::get('/aire_que_hacemos','AireController@aireQueHacemos')->name('aireQueHacemos');
