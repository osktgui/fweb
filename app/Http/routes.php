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
use App\RolUsuario;
use App\Usuario;

Route::get('/',

function () {
		return ("Ejemplo");
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

Route::get('/consultarCitasPsicologicas', function () {
		$psicologo = Persona::find($_GET['codigoPsicologo']);
		Excel::create('Lista-'.$psicologo['nombrePersona'].'-'.date('Y/m/d'), function ($excel) {
				$excel->setTitle('Lista de Citas Psicólogo');

				$excel->sheet('Persona', function ($sheet) {
						$sheet->mergeCells('A1:J1');
						$sheet->mergeCells('A2:J2');
						$sheet->cells('A1:J2', function ($cells) {
								$cells->setFontColor('#000000');
								$cells->setFontWeight('bold');
								$cells->setFontSize(13);
							});
						$sheet->cells('A3:F3', function ($cells) {
								$cells->setBackground('#5F04B4');
								$cells->setFontColor('#FFFFFF');
								$cells->setAlignment('center');
								$cells->setValignment('middle');
								$cells->setFontWeight('bold');
								$cells->setFontSize(13);
							});
						$sheet->cells('A3:F100', function ($cells) {
								$cells->setAlignment('center');
								$cells->setValignment('middle');
								$cells->setFontSize(11);
							});

						$sheet->setHeight(array
							(
								'1' => '20',
								'2' => '20',
								'3' => '20',
							)
						);
						$sheet->setBorder('A3:F100', 'thin');

						$psicologo = Persona::find($_GET['codigoPsicologo']);
						$citaPsicologicas = CitaPsicologica::where('psicologoId', '=', $psicologo['personaId'])->get();
						$listado = array();
						$lista_item = array('FILIUM: Lista de Sesiones Psicológicas');
						array_push($listado, $lista_item);
						$lista_item = array('Piscólogo: '.$psicologo['nombrePersona']);
						array_push($listado, $lista_item);
						$lista_item = array('Fecha', 'Hora', 'Paciente', 'Correo Electrónico', 'Celular', 'Skype');
						array_push($listado, $lista_item);
						foreach ($citaPsicologicas as $citaPsicologica) {
							$horarioDisponible = HorarioDisponible::find($citaPsicologica['horarioDisponibleId']);
							$paciente = Persona::find($citaPsicologica['pacienteId']);
							$lista_item = array($horarioDisponible['fecha'], $horarioDisponible['hora'], $paciente['nombrePersona'], $paciente['correoElectronico'], $paciente['telefonoMovil'], $paciente['skypeId']);
							array_push($listado, $lista_item);
						}
						$sheet->fromArray($listado, null, 'A1', false, false);

					});
			})->export('xls');
	});
Route::get('/consultasPsicologos', function () {
		echo "Seleccione al Psicólogo<br><br>";
		echo '<form action="consultarCitasPsicologicas" method="get">';
		echo '<select name="codigoPsicologo">';
		$rolUsuarios = RolUsuario::where('rolId', '=', '9')->get();
		foreach ($rolUsuarios as $rolUsuario) {
			$usuarios = Usuario::where('usuarioId', '=', $rolUsuario['usuarioId'])->get();
			foreach ($usuarios as $usuario) {
				$personas = Persona::where('personaId', '=', $usuario['personaId'])->get();
				foreach ($personas as $persona) {
					echo "<option value=".$persona['personaId'].">".$persona['nombrePersona']."</option>";
				}
			}
		}
		echo "</select><br><br>";
		echo '<input type="submit" value="Descargar Citas">';
		echo "</form>";

	});
Route::get('/leerLead', function () {
		$variables = Persona::where('personaId', '>', 3)->get();
		foreach ($variables as $variable) {
			echo ("<br>Nombre: ").'->'.$variable['nombrePersona'];
			echo ("<br>Correo: ").'->'.$variable['correoElectronico'];
			echo ("<br>Celular: ").'->'.$variable['telefonoMovil'];
			echo ("<br>Skype: ").'->'.$variable['skypeId'];
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