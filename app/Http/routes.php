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

use App\CitaPsicologica;
use App\HorarioDisponible;

use App\Persona;

Route::get('/',

function () {
		return (view('welcome'));
	});
Route::get('/registrarLead', function () {
		// Obtención de Parámetros
		$_nombre = $_GET['nombre'];
		$_metodoContacto = $_GET['metodoContacto'];
		if ($_metodoContacto == 'llamada') {$_celular = $_GET['celular'];} else if ($_metodoContacto == 'skype') {$_skype = $_GET['skype'];}
		$_correo = $_GET['correo'];
		$_horario = $_GET['horario'];
		// Comprobando disponibilidad de horario
		$horarioDisponible = HorarioDisponible::find($_horario);
		$_disponible = $horarioDisponible->disponible;

		if ($_disponible) {
			// Cambiando horario a "No Disponible"
			$horarioDisponible->disponible = false;
			$horarioDisponible->save();
			// Obtención de id Psicólogo según horario
			$_psicologo = $horarioDisponible->personaId;
			// Inserción en tabla Persona
			$persona = new Persona;
			$persona->nombrePersona = $_nombre;
			if ($_metodoContacto == 'llamada') {$persona->telefonoMovil = $_celular;} else if ($_metodoContacto == 'skype') {$persona->skypeId = $_skype;}
			$persona->correoElectronico = $_correo;
			$persona->tipoRegistroId = 1;
			$persona->created_by = "Sistema";
			$persona->save();
			//	Obtención de id de Persona insertada
			$_paciente = $persona->personaId;
			// Inserción en tabla Cita
			$citaPsicológica = new CitaPsicologica;
			$citaPsicológica->psicologoId = $_psicologo;
			$citaPsicológica->pacienteId = $_paciente;
			$citaPsicológica->horarioDisponibleId = $_horario;
			$citaPsicológica->estadoCitaId = 11;//Cita Reservada
			$citaPsicológica->tipoCitaId = 15;//Cita Promocional-Landing
			$citaPsicológica->observacion = "Cita reservada Landing Promocional.";
			$citaPsicológica->created_by = "Sistema";
			$citaPsicológica->save();
			return ("LeadRegistrado");
		} else {
			return ("HorarioNoDisponible");
		}
	});

Route::get('/consultarCitasPsicologicas', 'Reportes@reporteCitasPsicologicas');
Route::get('/consultasPsicologos', 'Psicologos@consultarPsicologoReporteCitas');
Route::get('/leerHorariosDisponibles', 'HorariosDisponibles@leerHorariosDisponibles');
Route::get('/leerDiasDisponibles', 'HorariosDisponibles@leerDiasDisponibles');
Route::get('/reporteHorariosDisponibles', 'HorariosDisponibles@reporteHorariosDisponibles');
Route::post('foo/bar', function () {
		return 'Hello World';
	});