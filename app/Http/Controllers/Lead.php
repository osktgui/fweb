<?php

namespace App\Http\Controllers;
use App\CitaPsicologica;
use App\HorarioDisponible;
use App\Http\Controllers\Controller;
use App\Persona;
use Input;

class Lead extends Controller {

	public function registroLead() {
		// Obtención de Parámetros
		$dataGet                                      = Input::all();
		$_nombre                                      = $dataGet['nombre'];
		$_metodoContacto                              = $dataGet['metodoContacto'];
		if ($_metodoContacto == 'llamada') {$_celular = $dataGet['celular'];} else if ($_metodoContacto == 'skype') {$_skype = $dataGet['skype'];}
		$_correo                                      = $dataGet['correo'];
		$_horario                                     = $dataGet['horario'];
		// Comprobando disponibilidad de horario
		$horarioDisponible = HorarioDisponible::find($_horario);
		$_disponible       = $horarioDisponible->disponible;

		if ($_disponible) {
			// Cambiando horario a "No Disponible"
			$horarioDisponible->disponible = false;
			$horarioDisponible->save();
			// Obtención de id Psicólogo según horario
			$_psicologo = $horarioDisponible->personaId;
			// Inserción en tabla Persona
			$persona                                                    = new Persona;
			$persona->nombrePersona                                     = $_nombre;
			if ($_metodoContacto == 'llamada') {$persona->telefonoMovil = $_celular;} else if ($_metodoContacto == 'skype') {$persona->skypeId = $_skype;}
			$persona->correoElectronico                                 = $_correo;
			$persona->tipoRegistroId                                    = 1;
			$persona->created_by                                        = "Sistema";
			$persona->save();
			//  Obtención de id de Persona insertada
			$_paciente = $persona->personaId;
			// Inserción en tabla Cita
			$citaPsicológica                      = new CitaPsicologica;
			$citaPsicológica->psicologoId         = $_psicologo;
			$citaPsicológica->pacienteId          = $_paciente;
			$citaPsicológica->horarioDisponibleId = $_horario;
			$citaPsicológica->estadoCitaId        = 11;//Cita Reservada
			$citaPsicológica->tipoCitaId          = 15;//Cita Promocional-Landing
			$citaPsicológica->observacion         = "Cita reservada Landing Promocional.";
			$citaPsicológica->created_by          = "Sistema";
			$citaPsicológica->save();
			return ("LeadRegistrado");
		} else {
			return ("HorarioNoDisponible");
		}
	}

}
