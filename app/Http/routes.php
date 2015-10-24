<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

// Cambiar a Post
Route::get('/registrarLead', 'Lead@registroLead');
Route::get('/registrarFormacionProfesional', 'Psicologos@registrarFormacionProfesional');
Route::get('/actualizarFormacionProfesional', 'Psicologos@actualizarFormacionProfesional');
// ------------------------- Consultas a la Data Maestra ----------------------
Route::get('/getTipoDocumento', 'DataMaestra@getTipoDocumento');
Route::get('/getSexo', 'DataMaestra@getSexo');
Route::get('/getTipoRegistro', 'DataMaestra@getTipoRegistro');
Route::get('/getRoles', 'DataMaestra@getRoles');
Route::get('/getEstadoCitas', 'DataMaestra@getEstadoCitas');
Route::get('/getTipoCita', 'DataMaestra@getTipoCita');
Route::get('/getRubroEmpresas', 'DataMaestra@getRubroEmpresas');
Route::get('/getTipoCodigoEmpresa', 'DataMaestra@getTipoCodigoEmpresa');
Route::get('/getGradoAcademico', 'DataMaestra@getGradoAcademico');
Route::get('/getIdiomas', 'DataMaestra@getIdiomas');
Route::get('/getNivelIdiomas', 'DataMaestra@getNivelIdiomas');
Route::get('/getHabilidades', 'DataMaestra@getHabilidades');
Route::get('/getOrganizaciones', 'DataMaestra@getOrganizaciones');
// ------------------------- Consultas CV de Psicólogos ----------------------
Route::get('/getFormacionProfesional', 'Psicologos@getFormacionProfesional');

// ----------------------------------------------------------------------------
Route::get('/consultarCitasPsicologicas', 'Reportes@reporteCitasPsicologicas');
Route::get('/consultasPsicologos', 'Psicologos@consultarPsicologoReporteCitas');
Route::get('/leerHorariosDisponibles', 'HorariosDisponibles@leerHorariosDisponibles');
Route::get('/leerDiasDisponibles', 'HorariosDisponibles@leerDiasDisponibles');
Route::get('/reporteHorariosDisponibles', 'HorariosDisponibles@reporteHorariosDisponibles');
Route::get('/leerFormacionProfesional', 'Psicologos@leerFormacionProfesional');

// ============================================= PRUEBAS =======================================================================

Route::get('/TableMaestra', function () {
		$data = DB::table('maestros')->get();

		foreach ($data as $dat) {
			echo ("Id de Maestro-> ".$dat->maestroId." | ");
			echo ("-> ".$dat->nombreMaestro);
			echo ("<br>");

		}
		echo ("<br><bt>");
		$data = DB::table('maestro_detalles')->get();

		foreach ($data as $dat) {
			echo ("Id de Maestro Detalle-> ".$dat->maestroId." | ");
			echo ("-> ".$dat->nombreMaestroDetalle);
			echo ("<br>");

		}
		// return Response::json($data);
	});

Route::get('/consultandoCV', function () {
		$data = DB::table('formacion_profesionals')->get();
		return Response::json($data);

		// foreach ($data as $dat) {
		// 	echo ("Id de Maestro-> ".$dat->maestroId." | ");
		// 	echo ("-> ".$dat->nombreMaestro);
		// 	echo ("<br>");

		// }
		// echo ("<br><bt>");
		// $data = DB::table('maestro_detalles')->get();

		// foreach ($data as $dat) {
		// 	echo ("Id de Maestro Detalle-> ".$dat->maestroId." | ");
		// 	echo ("-> ".$dat->nombreMaestroDetalle);
		// 	echo ("<br>");

		// }
		// return Response::json($data);
	});

Route::post('foo/bar', function () {
		return 'Hello World';
	});