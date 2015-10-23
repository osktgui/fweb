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
// ------------------------- Consultas a la Data Maestra ----------------------
Route::get('/getOrganizaciones', 'DataMaestra@getOrganizaciones');
// ----------------------------------------------------------------------------
Route::get('/consultarCitasPsicologicas', 'Reportes@reporteCitasPsicologicas');
Route::get('/consultasPsicologos', 'Psicologos@consultarPsicologoReporteCitas');
Route::get('/leerHorariosDisponibles', 'HorariosDisponibles@leerHorariosDisponibles');
Route::get('/leerDiasDisponibles', 'HorariosDisponibles@leerDiasDisponibles');
Route::get('/reporteHorariosDisponibles', 'HorariosDisponibles@reporteHorariosDisponibles');

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

Route::get('/TableMaestraDetalle', function () {
		$data = DB::table('maestro_detalles')->get();

		foreach ($data as $dat) {
			echo ("Id de Maestro-> ".$dat->maestroId." | ");
			echo ("-> ".$dat->nombreMaestroDetalle);
			echo ("<br>");

		}
		// return Response::json($data);
	});

Route::post('foo/bar', function () {
		return 'Hello World';
	});