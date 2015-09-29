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
use App\Maestro;
use App\MaestroDetalle;
use App\Persona;
// use App\RolUsuario;
// use App\Usuario;

Route::get('/',

function () {
		return view('welcome');
	});
Route::get('/registrarLead', function () {
		// Obtención de Parámetros
		$_nombre = $_GET['nombre'];
		$_metodoContacto = $_GET['metodoContacto'];
		if ($_metodoContacto == 'llamada') {$_celular = $_GET['celular'];} else if ($_metodoContacto == 'skype') {$_correo = $_GET['correo'];}
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
			if ($_metodoContacto == 'llamada') {$persona->telefonoMovil = $_celular;} else if ($_metodoContacto == 'skype') {$persona->correoElectronico = $_correo;}
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
Route::get('/leerLead', function () {
		$variables = Persona::where('personaId', '>', 3)->get();
		foreach ($variables as $variable) {
			echo ("<br>Nombre: ").'->'.$variable['nombrePersona'];
			echo ("<br>Celular: ").'->'.$variable['telefonoMovil'];
			echo ("<br>Correo: ").'->'.$variable['correoElectronico'];
			echo ('<br>');
		}
	});
Route::post('/prueba', function () {
		return 'Hello World';
	});

Route::get('/leerHorariosDisponibles', function () {
		$_fechaFiltro = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['fechaCita'])));
		$horarioDisponible = HorarioDisponible::where('fecha', '=', $_fechaFiltro)->get();
		return Response::json($horarioDisponible);

	});

Route::get('/registrarMaestro', function () {
		$tipoDoc = new Maestro;
		$tipoDoc->nombreMaestro = "Sexo";
		$tipoDoc->descripcionMaestro = "Sexo con el cual se registrará el usuario";
		$tipoDoc->created_by = "Sistema";
		$tipoDoc->save();
		return "Sexo Agregado";
	});
Route::get('/leerMaestroDetalle', function () {
		$variables = MaestroDetalle::all();
		foreach ($variables as $variable) {
			echo ($variable['maestroDetalleId'].'->'.$variable['nombreMaestroDetalle']);
			echo ('<br>');
		}
	});
Route::get('/leerPersona', function () {
		$variables = Persona::all();
		foreach ($variables as $variable) {
			echo ($variable['personaId'].'->'.$variable['nombrePersona'].'->'.$variable['correoElectronico']);
			echo ('<br>');
		}
	});