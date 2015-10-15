
<?php
Route::get('/', 'SimController@index');
Route::get('coyuntura', 'SimController@coyuntura');
Route::get('base_consulta', 'HistoricoController@datos');
Route::get('base_consulta1', 'HistoricoController@datos1');
Route::get('base_consulta2', 'HistoricoController@datos2');
Route::get('base_consulta3', 'HistoricoController@datos3');
Route::get('data_historico/{variable}', 'HistoricoController@historico');
Route::get('data_coyuntura/{variable}', 'CoyunturaController@coyuntura');
Route::get('itaee/historico', 'HistoricoController@itaee');
Route::get('trabajadores/historico', 'HistoricoController@Trabajadores');
Route::get('deso_men/historico', 'HistoricoController@Deso_men');
Route::get('deso_trim/historico', 'HistoricoController@Deso_trim');
Route::get('trimestral_deso/historico', 'HistoricoController@Trim_deso');
Route::get('infla_mensual/historico', 'HistoricoController@Infla_mensual');
Route::get('llegada_tur/historico', 'HistoricoController@llegada_tur');
Route::get('por_ocupa/historico', 'HistoricoController@por_ocupa');
Route::get('estadia/historico', 'HistoricoController@estadia');
Route::get('inver_ext_pue/historico', 'HistoricoController@inver_ext_pue');
Route::get('pib_nac/coyuntura', 'CoyunturaController@pib_nac');
Route::get('pib_pue/coyuntura', 'CoyunturaController@pib_pue');
Route::get('pib/coyuntura', 'CoyunturaController@pib');
Route::get('indice_itaee/coyuntura', 'CoyunturaController@indice_itaee');
Route::get('variacion_itaee/coyuntura', 'CoyunturaController@variacion_itaee');
Route::get('indice_itaee_primarias/coyuntura', 'CoyunturaController@indice_itaee_primarias');
Route::get('variacion_itaee_primarias/coyuntura', 'CoyunturaController@variacion_itaee_primarias');
Route::get('indice_itaee_secundarias/coyuntura', 'CoyunturaController@indice_itaee_secundarias');
Route::get('variacion_itaee_secundarias/coyuntura', 'CoyunturaController@variacion_itaee_secundarias');
Route::get('indice_itaee_tercearias/coyuntura', 'CoyunturaController@indice_itaee_tercearias');
Route::get('variacion_itaee_tercearias/coyuntura', 'CoyunturaController@variacion_itaee_tercearias');
Route::get('trabajadores_asegurados/coyuntura', 'CoyunturaController@trabajadores_asegurados');
Route::get('tasa_deso_trim/coyuntura', 'CoyunturaController@tasa_deso_trim');
Route::get('tasa_deso_trim1/coyuntura', 'CoyunturaController@tasa_deso_trim1');
Route::get('tasa_deso_men/coyuntura', 'CoyunturaController@tasa_deso_men');
Route::get('inflacion_inter/coyuntura', 'CoyunturaController@inflacion_inter');
Route::get('exportaciones_pue/coyuntura', 'CoyunturaController@exportaciones_pue');
Route::get('ocupacion/coyuntura', 'CoyunturaController@ocupacion');
Route::get('llegada_tur/coyuntura', 'CoyunturaController@llegada_tur');
Route::get('estadia/coyuntura', 'CoyunturaController@estadia');
Route::get('inver_ext_pue/coyuntura', 'CoyunturaController@inver_ext_pue');
Route::get('tasa_desocupacion/coyuntura', 'CoyunturaController@tasa_desocupacion');
Route::get('base_consul1', 'CoyunturaController@datos1');
Route::get('base_consul2', 'CoyunturaController@datos2');
Route::get('base_consul3', 'CoyunturaController@datos3');
Route::get('base_consul4', 'CoyunturaController@datos4');
Route::get('base_consul5', 'CoyunturaController@datos5');
Route::get('variables_sim/{variable}', 'TablasController@tablas');
Route::get('impre/{variable}', 'TablasController@impre');
Route::get('meta/{variable}', 'TablasController@meta');
Route::get('concepto/{variable}', 'TablasController@concepto');









