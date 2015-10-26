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
		$dataGet        = Input::all();
		$experienciaLab = new ExperienciaLaboral;

		$experienciaLab->objeto = $dataGet['objeto'];

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

}
