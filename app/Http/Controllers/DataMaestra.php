<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Organizacion;
use Response;

class DataMaestra extends Controller {
	public function getOrganizaciones() {
		$organizaciones = Organizacion::all();
		return Response::json($organizaciones);
	}

}
