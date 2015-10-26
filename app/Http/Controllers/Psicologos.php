<?php

namespace App\Http\Controllers;

use App\FormacionProfesional;
use App\Http\Controllers\Controller;
use App\Persona;
use App\RolUsuario;
use App\Usuario;
use Input;
use Response;

class Psicologos extends Controller {
	public function consultarPsicologoReporteCitas() {
		echo "Seleccione al Psicólogo<br><br>";
		echo '<form action="consultarCitasPsicologicas" method="get">';
		echo '<select name="codigoPsicologo">';
		$rolUsuarios = RolUsuario::where('rolId', '=', '9')->get();
		foreach ($rolUsuarios as $rolUsuario) {
			$usuarios = Usuario::where('usuarioId', '=', $rolUsuario['usuarioId'])->get();
			foreach ($usuarios as $usuario) {
				$personas = Persona::where('personaId', '=', $usuario['personaId'])->get();
				foreach ($personas as $persona) {
					echo '<option value='.$persona['personaId'].'>'.$persona['nombrePersona'].'</option>';
				}
			}
		}
		echo "</select><br><br>";
		echo '<input type="submit" value="Descargar Citas">';
		echo "</form>";
	}
	// ======================= Formación Profesional ==========================================
	public function registrarFormacionProfesional() {
		$dataGet                              = Input::all();
		$formacionProf                        = new FormacionProfesional;
		$formacionProf->personaId             = $dataGet['personaId'];
		$formacionProf->organizacionId        = $dataGet['organizacionId'];
		$formacionProf->gradoAcademicoId      = $dataGet['gradoAcademicoId'];
		$formacionProf->nombreCarrera         = $dataGet['nombreCarrera'];
		$formacionProf->incluirMencion        = $dataGet['incluirMencion'];
		$formacionProf->nombreMencion         = $dataGet['nombreMencion'];
		$formacionProf->fechaInicio           = $dataGet['fechaInicio'];
		$formacionProf->estudiandoActualmente = filter_var($dataGet['estudiandoActualmente'], FILTER_VALIDATE_BOOLEAN);
		// Sólo se guarda la fecha de fin si no está estudiando actualmente
		if (!filter_var($dataGet['estudiandoActualmente'], FILTER_VALIDATE_BOOLEAN)) {
			$formacionProf->fechaFin = $dataGet['fechaFin'];
		}
		$formacionProf->comentario = $dataGet['comentario'];
		$formacionProf->created_by = $dataGet['created_by'];
		$formacionProf->save();
		return ("success");
	}
	public function actualizarFormacionProfesional() {
		$dataGet = Input::all();
		if (!filter_var($dataGet['estudiandoActualmente'], FILTER_VALIDATE_BOOLEAN)) {
			$arrayToUpdate = array(
				'personaId'             => $dataGet['personaId'],
				'organizacionId'        => $dataGet['organizacionId'],
				'gradoAcademicoId'      => $dataGet['gradoAcademicoId'],
				'nombreCarrera'         => $dataGet['nombreCarrera'],
				'incluirMencion'        => $dataGet['incluirMencion'],
				'nombreMencion'         => $dataGet['nombreMencion'],
				'fechaInicio'           => $dataGet['fechaInicio'],
				'estudiandoActualmente' => filter_var($dataGet['estudiandoActualmente'], FILTER_VALIDATE_BOOLEAN),
				'fechaFin'              => $dataGet['fechaFin'],
				'comentario'            => $dataGet['comentario'],
				'created_by'            => $dataGet['created_by'],
			);
		} else {
			$arrayToUpdate = array(
				'personaId'             => $dataGet['personaId'],
				'organizacionId'        => $dataGet['organizacionId'],
				'gradoAcademicoId'      => $dataGet['gradoAcademicoId'],
				'nombreCarrera'         => $dataGet['nombreCarrera'],
				'incluirMencion'        => $dataGet['incluirMencion'],
				'nombreMencion'         => $dataGet['nombreMencion'],
				'fechaInicio'           => $dataGet['fechaInicio'],
				'estudiandoActualmente' => filter_var($dataGet['estudiandoActualmente'], FILTER_VALIDATE_BOOLEAN),
				'comentario'            => $dataGet['comentario'],
				'created_by'            => $dataGet['created_by'],
			);
		}

		FormacionProfesional::where('formacionProfesionalId', '=', $dataGet['formacionProfesionalId'])
			->update($arrayToUpdate);
		return ("success");
	}
	public function eliminarFormacionProfesional() {
		$dataGet     = Input::all();
		$deletedRows = FormacionProfesional::where('formacionProfesionalId', '=', $dataGet['formacionProfesionalId'])->delete();
		return ("success");
	}
	public function getFormacionProfesional() {
		$dataGet       = Input::all();
		$formacionProf = FormacionProfesional::where('personaId', $dataGet['personaId'])
			->with('organizacion')	->with('gradoAcademico')	->get();
		return Response::json($formacionProf);
	}

	// ======================= Experiencia Laboral ==========================================
	public function registrarExperienciaLaboral() {
		$dataGet                              = Input::all();
		$experienciaLab                       = new ExperienciaLaboral;
		$experienciaLab->personaId            = $dataGet['personaId'];
		$experienciaLab->organizacionId       = $dataGet['organizacionId'];
		$experienciaLab->nombreCargo          = $dataGet['nombreCargo'];
		$experienciaLab->descripcion          = $dataGet['descripcion'];
		$experienciaLab->fechaInicio          = $dataGet['fechaInicio'];
		$experienciaLab->laborandoActualmente = filter_var($dataGet['laborandoActualmente'], FILTER_VALIDATE_BOOLEAN);
		if (!filter_var($dataGet['laborandoActualmente'], FILTER_VALIDATE_BOOLEAN)) {
			$formacionProf->fechaFin = $dataGet['fechaFin'];
		}
		$experienciaLab->created_by = $dataGet['created_by'];
		$formacionProf->save();
		return ("success");
	}
	public function actualizarExperienciaLaboral() {
		$dataGet = Input::all();
		if (!filter_var($dataGet['laborandoActualmente'], FILTER_VALIDATE_BOOLEAN)) {
			$arrayToUpdate = array(
				'personaId'             => $dataGet['personaId'],
				'organizacionId'        => $dataGet['organizacionId'],
				'nombreCargo'           => $dataGet['nombreCargo'],
				'descripcion'           => $dataGet['descripcion'],
				'fechaInicio'           => $dataGet['fechaInicio'],
				'estudiandoActualmente' => filter_var($dataGet['laborandoActualmente'], FILTER_VALIDATE_BOOLEAN),
				'fechaFin'              => $dataGet['fechaFin'],
				'created_by'            => $dataGet['created_by'],
			);
		} else {
			$arrayToUpdate = array(
				'personaId'             => $dataGet['personaId'],
				'organizacionId'        => $dataGet['organizacionId'],
				'nombreCargo'           => $dataGet['nombreCargo'],
				'descripcion'           => $dataGet['descripcion'],
				'fechaInicio'           => $dataGet['fechaInicio'],
				'estudiandoActualmente' => filter_var($dataGet['laborandoActualmente'], FILTER_VALIDATE_BOOLEAN),
				'created_by'            => $dataGet['created_by'],
			);
		}
		ExperienciaLaboral::where('experienciaLaboralId', '=', $dataGet['experienciaLaboralId'])
			->update($arrayToUpdate);
		return ("success");
	}
	public function eliminarExperienciaLaboral() {
		$dataGet     = Input::all();
		$deletedRows = ExperienciaLaboral::where('experienciaLaboralId', '=', $dataGet['experienciaLaboralId'])->delete();
		return ("success");
	}
	public function getExperienciaLaboral() {
		$dataGet        = Input::all();
		$experienciaLab = ExperienciaLaboral::where('personaId', $dataGet['personaId'])
			->with('organizacion')	->get();
		return Response::json($experienciaLab);
	}

	// ======================= Certificaciones Obtenidas ==========================================
	public function registrarCertificacionObtenida() {
		$dataGet                               = Input::all();
		$certificacionObt                      = new CertificacionObtenida;
		$certificacionObt->personaId           = $dataGet['personaId'];
		$certificacionObt->tituloCertificacion = $dataGet['tituloCertificacion'];
		$certificacionObt->fechaCertificacion  = $dataGet['fechaCertificacion'];
		$certificacionObt->organizacionId      = $dataGet['organizacionId'];
		$certificacionObt->descripcion         = $dataGet['descripcion'];
		$certificacionObt->created_by          = $dataGet['created_by'];
		$certificacionObt->save();
		return ("success");
	}

	public function actualizarCertificacionObtenida() {
		$dataGet       = Input::all();
		$arrayToUpdate = array(
			'personaId'           => $dataGet['personaId'],
			'tituloCertificacion' => $dataGet['tituloCertificacion'],
			'fechaCertificacion'  => $dataGet['fechaCertificacion'],
			'organizacionId'      => $dataGet['organizacionId'],
			'descripcion'         => $dataGet['descripcion'],
			'created_by'          => $dataGet['created_by'],
		);
		CertificacionObtenida::where('certificacionObtenidaId', '=', $dataGet['certificacionObtenidaId'])
			->update($arrayToUpdate);
		return ("success");
	}
	public function eliminarCertificacionObtenida() {
		$dataGet     = Input::all();
		$deletedRows = CertificacionObtenida::where('certificacionObtenidaId', '=', $dataGet['certificacionObtenidaId'])->delete();
		return ("success");
	}
	public function getCertificacionObtenida() {
		$dataGet        = Input::all();
		$experienciaLab = CertificacionObtenida::where('personaId', $dataGet['personaId'])
			->with('organizacion')	->get();
		return Response::json($experienciaLab);
	}

	// ======================= Conocimiento Idiomas ==========================================
	public function registrarConocimientoIdioma() {
		$dataGet                           = Input::all();
		$conocimientoIdioma                = new ConocimientoIdioma;
		$conocimientoIdioma->personaId     = $dataGet['personaId'];
		$conocimientoIdioma->idiomaId      = $dataGet['idiomaId'];
		$conocimientoIdioma->nivelIdiomaId = $dataGet['nivelIdiomaId'];
		$conocimientoIdioma->created_by    = $dataGet['created_by'];
		$conocimientoIdioma->save();
		return ("success");
	}

	public function actualizarConocimientoIdioma() {
		$dataGet       = Input::all();
		$arrayToUpdate = array(
			'personaId'     => $dataGet['personaId'],
			'idiomaId'      => $dataGet['idiomaId'],
			'nivelIdiomaId' => $dataGet['nivelIdiomaId'],
			'created_by'    => $dataGet['created_by'],
		);
		ConocimientoIdioma::where('conocimientoIdiomaId', '=', $dataGet['conocimientoIdiomaId'])
			->update($arrayToUpdate);
		return ("success");
	}
	public function eliminarConocimientoIdioma() {
		$dataGet     = Input::all();
		$deletedRows = ConocimientoIdioma::where('conocimientoIdiomaId', '=', $dataGet['conocimientoIdiomaId'])->delete();
		return ("success");
	}
	public function getConocimientoIdioma() {
		$dataGet        = Input::all();
		$experienciaLab = ConocimientoIdioma::where('personaId', $dataGet['personaId'])
			->with('idioma')	->with('nivelIdioma')	->get();
		return Response::json($experienciaLab);
	}

	// ======================= Habilidades Personales ==========================================
	public function registrarHabilidadPersonal() {
		$dataGet                    = Input::all();
		$habilidadPers              = new HabilidadPersonal;
		$habilidadPers->personaId   = $dataGet['personaId'];
		$habilidadPers->habilidadId = $dataGet['habilidadId'];
		$habilidadPers->descripcion = $dataGet['descripcion'];
		$habilidadPers->created_by  = $dataGet['created_by'];
		$habilidadPers->save();
		return ("success");
	}

	public function actualizarHabilidadPersonal() {
		$dataGet       = Input::all();
		$arrayToUpdate = array(
			'personaId'   => $dataGet['personaId'],
			'habilidadId' => $dataGet['habilidadId'],
			'descripcion' => $dataGet['descripcion'],
			'created_by'  => $dataGet['created_by'],
		);
		HabilidadPersonal::where('habilidadPersonalId', '=', $dataGet['habilidadPersonalId'])
			->update($arrayToUpdate);
		return ("success");
	}
	public function eliminarHabilidadPersonal() {
		$dataGet     = Input::all();
		$deletedRows = HabilidadPersonal::where('habilidadPersonalId', '=', $dataGet['habilidadPersonalId'])->delete();
		return ("success");
	}
	public function getHabilidadPersonal() {
		$dataGet        = Input::all();
		$experienciaLab = HabilidadPersonal::where('personaId', $dataGet['personaId'])
			->with('habilidad')	->with('nivelIdioma')	->get();
		return Response::json($experienciaLab);
	}
}
