<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Persona;
use App\RolUsuario;
use App\Usuario;

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
					echo "<option value=".$persona['personaId'].">".$persona['nombrePersona']."</option>";
				}
			}
		}
		echo "</select><br><br>";
		echo '<input type="submit" value="Descargar Citas">';
		echo "</form>";
	}
}
