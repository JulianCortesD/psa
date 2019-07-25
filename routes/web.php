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

Route::get('/noticias','NewsController@index')->name('noticias');
Route::get('/oficinas','OfficesController@index')->name('oficinas');
Route::get('/preguntas','QuestionsController@index')->name('preguntas');

/* AIRE */
Route::get('/aire_calidad','AireController@calidad')->name('airecalidad');
Route::get('/aire_calidad_contaminacion','AireController@calidadContaminacion')->name('calidadcontaminacion');
Route::get('/aire_calidad_iboca','AireController@calidadIBOCA')->name('calidadiboca');
Route::get('/aire_calidad_ruido','AireController@calidadRuido')->name('calidadruido');
Route::get('/aire_calidad_radiacion','AireController@calidadRadiacion')->name('calidadradiacion');
Route::get('/aire_calidad_tabaco','AireController@calidadTabaco')->name('calidadtabaco');
Route::get('/aire_indicadores','AireController@indicadores')->name('aireIndicadores');
Route::get('/aire_mapas','AireController@mapas')->name('aireMapas');
Route::get('/aire_documentos','AireController@documentos')->name('aireDocumentos');
Route::get('/aire_ruido_rem','AireController@aireRuidoREM')->name('aireRuidoREM');
Route::get('/aire_que_hacemos','AireController@aireQueHacemos')->name('aireQueHacemos');
Route::get('/aire_normatividad','AireController@aireNormatividad')->name('aireNormatividad');
Route::get('/acreditados','ConceptosController@acredited')->name('acreditados');
Route::get('/politica_distrital_salud_ambiental','PoliticaController@index')->name('politicaDistrital');
Route::get('/vigilancia_salud_ambiental','VigilanciaController@index')->name('vigilanciaDistrital');
Route::get('/participacion_ciudadana','ParticipacionController@index')->name('participacion');
/** AGUA y SANEAMIENTO */
Route::get('/agua_saneamiento_basico','AguaController@index')->name('aguaIndex');
Route::get('/agua_saneamiento_basico_ver','AguaController@indexMas')->name('aguaIndexMas');
Route::get('/agua_saneamiento_adulto_mayor','AguaController@adultoMayor')->name('adultoMayor');
Route::get('/agua_saneamiento_adulto_mayor_ver_mas','AguaController@adultoMayorMas')->name('adultoMayorMas');
Route::get('/agua_saneamiento_indicadores','AguaController@indicadores')->name('aguaIndicadores');
Route::get('/agua_saneamiento_normatividad','AguaController@normatividad')->name('aguaNormatividad');
Route::get('/agua_saneamiento_documentos','AguaController@documentos')->name('aguaDocumentos');
Route::get('/agua_saneamiento_conceptos_favorable','AguaController@favorable')->name('aguaFavorable');
Route::get('/agua_saneamiento_mapas','AguaController@mapas')->name('aguaMapas');

Route::get('/alimentos_sanos','AlimentosController@index')->name('alimentosIndex');
Route::get('/alimentos_sanos_ver','AlimentosController@indexMas')->name('alimentosIndexMas');
Route::get('/alimentos_sanos_indicadores','AlimentosController@indicadores')->name('alimentosIndicadores');
Route::get('/alimentos_sanos_normatividad','AlimentosController@normatividad')->name('alimentosNormatividad');


Route::get('/cambio_climatico','ClimaController@index')->name('climaIndex');
Route::get('/cambio_climatico_ver_mas','ClimaController@indexVer')->name('climaIndexVer');
Route::get('/cambio_climatico_indicadores','ClimaController@indicadores')->name('climaIndicadores');
Route::get('/cambio_climatico_mapas','ClimaController@mapas')->name('climaMapas');
Route::get('/cambio_climatico_normatividad','ClimaController@normatividad')->name('climaNormatividad');
Route::get('/cambio_climatico_documentos','ClimaController@documentos')->name('documentos');


Route::get('/espacio_movilidad','MovilidadController@index')->name('espacioIndex');
Route::get('/espacio_movilidad_indicadores','MovilidadController@indicadores')->name('espacioIndicadores');
Route::get('/espacio_movilidad_normatividad','MovilidadController@normatividad')->name('espacioNormatividad');
Route::get('/espacio_movilidad_ver','MovilidadController@indexVerMas')->name('espacioVerMas');
Route::get('/espacio_movilidad_radiacion','MovilidadController@radiacion')->name('radiacion');
Route::get('/espacio_movilidad_indicadores','MovilidadController@indicadores')->name('espacioVerMas');

Route::get('/medicamentos','MedicamentosController@index')->name('index');
Route::get('/medicamentos_ver','MedicamentosController@indexVer')->name('indexVer');
Route::get('/medicamentos_favorables','MedicamentosController@favorables')->name('favorables');
Route::get('/medicamentos_normatividad','MedicamentosController@normatividad')->name('normatividad');

Route::get('/quimicos','QuimicosController@index')->name('index');
Route::get('/quimicos_ver','QuimicosController@indexVer')->name('indexVer');
Route::get('/quimicos_documentos','QuimicosController@documentos')->name('documentos');
Route::get('/quimicos_normatividad','QuimicosController@normatividad')->name('normatividad');
Route::get('/quimicos_indicadores','QuimicosController@indicadores')->name('indicadores');
Route::get('/quimicos_conceptos','QuimicosController@conceptos')->name('conceptos');

Route::get('/etoz','EtozController@index')->name('index');
Route::get('/etoz_ver_mas','EtozController@indexVer')->name('indexVer');
Route::get('/etoz_documentos','EtozController@documentos')->name('documentos');
Route::get('/etoz_normatividad','EtozController@normatividad')->name('normatividad');
Route::get('/etoz_indicadores','EtozController@indicadores')->name('indicadores');

Route::get('/calendario','CalendarController@index')->name('index');


