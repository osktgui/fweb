<?php

namespace App\Http\Controllers;
use App\HorarioDisponible;
use App\Http\Controllers\Controller;
use Input;
use Response;

class HorariosDisponibles extends Controller {
	public function reporteHorariosDisponibles() {
		$horarioDisponible = HorarioDisponible::all();
		return Response::json($horarioDisponible);
	}
	public function leerHorariosDisponibles() {
		$dataGet           = Input::all();
		$_fechaFiltro      = date('Y-m-d', strtotime($dataGet['fechaCita']));
		$horarioDisponible = HorarioDisponible::where('fecha', '=', $_fechaFiltro)->get();
		return Response::json($horarioDisponible);
	}

	public function leerDiasDisponibles() {
		$diasDisponibles = HorarioDisponible::where('fecha', '>=', date("Ymd"))->get();
		$listadoDias     = array();
		foreach ($diasDisponibles as $dias) {
			array_push($listadoDias, $dias['fecha']);
		}
		return Response::json($listadoDias);
	}

}
