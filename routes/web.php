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
Route::get('/aire_normatividad','AireController@aireNormatividad')->name('aireNormatividad');
Route::get('/acreditados','ConceptosController@acredited')->name('acreditados');
Route::get('/politica_distrital_salud_ambiental','PoliticaController@index')->name('politicaDistrital');
Route::get('/vigilancia_salud_ambiental','VigilanciaController@index')->name('vigilanciaDistrital');
Route::get('/participacion_ciudadana','ParticipacionController@index')->name('participacion');
Route::get('/agua_saneamiento_basico','AguaController@index')->name('aguaIndex');
Route::get('/agua_saneamiento_basico_ver','AguaController@indexMas')->name('aguaIndexMas');
Route::get('/agua_saneamiento_adulto_mayor','AguaController@adultoMayor')->name('adultoMayor');
Route::get('/agua_saneamiento_adulto_mayor_ver','AguaController@adultoMayorMas')->name('adultoMayorMas');
Route::get('/agua_saneamiento_indicadores','AguaController@indicadores')->name('aguaIndicadores');
Route::get('/agua_saneamiento_normatividad','AguaController@normatividad')->name('aguaBormatividad');
Route::get('/alimentos_sanos','AlimentosController@index')->name('alimentosIndex');
Route::get('/alimentos_sanos_ver','AlimentosController@indexMas')->name('alimentosIndexMas');
Route::get('/alimentos_sanos_indicadores','AlimentosController@indicadores')->name('alimentosIndicadores');
Route::get('/alimentos_sanos_normatividad','AlimentosController@normatividad')->name('alimentosNormatividad');
Route::get('/cambio_climatico','ClimaController@index')->name('climaIndex');
Route::get('/cambio_climatico_indicadores','ClimaController@indicadores')->name('climaIndicadores');
Route::get('/cambio_climatico_mapas','ClimaController@mapas')->name('climaMapas');
Route::get('/cambio_climatico_normatividad','ClimaController@normatividad')->name('climaNormatividad');
