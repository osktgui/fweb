<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\MaestroDetalle;
use App\Organizacion;
use Response;

class DataMaestra extends Controller {
	public function getTipoDocumento() {
		$dataMaestra = MaestroDetalle::where('maestroId', '=', 1)->get();
		return Response::json($dataMaestra);
	}
	public function getSexo() {
		$dataMaestra = MaestroDetalle::where('maestroId', '=', 2)->get();
		return Response::json($dataMaestra);
	}
	public function getTipoRegistro() {
		$dataMaestra = MaestroDetalle::where('maestroId', '=', 3)->get();
		return Response::json($dataMaestra);
	}
	public function getRoles() {
		$dataMaestra = MaestroDetalle::where('maestroId', '=', 4)->get();
		return Response::json($dataMaestra);
	}
	public function getEstadoCitas() {
		$dataMaestra = MaestroDetalle::where('maestroId', '=', 5)->get();
		return Response::json($dataMaestra);
	}
	public function getTipoCita() {
		$dataMaestra = MaestroDetalle::where('maestroId', '=', 6)->get();
		return Response::json($dataMaestra);
	}
	public function getRubroEmpresas() {
		$dataMaestra = MaestroDetalle::where('maestroId', '=', 7)->get();
		return Response::json($dataMaestra);
	}
	public function getTipoCodigoEmpresa() {
		$dataMaestra = MaestroDetalle::where('maestroId', '=', 8)->get();
		return Response::json($dataMaestra);
	}
	public function getGradoAcademico() {
		$dataMaestra = MaestroDetalle::where('maestroId', '=', 9)->get();
		return Response::json($dataMaestra);
	}
	public function getIdiomas() {
		$dataMaestra = MaestroDetalle::where('maestroId', '=', 10)->get();
		return Response::json($dataMaestra);
	}
	public function getNivelIdiomas() {
		$dataMaestra = MaestroDetalle::where('maestroId', '=', 11)->get();
		return Response::json($dataMaestra);
	}
	public function getHabilidades() {
		$dataMaestra = MaestroDetalle::where('maestroId', '=', 12)->get();
		return Response::json($dataMaestra);
	}
	public function getOrganizaciones() {
		$organizaciones = Organizacion::all();
		return Response::json($organizaciones);
	}

}
