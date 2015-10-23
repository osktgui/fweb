<?php

namespace App\Http\Controllers;
use App\CitaPsicologica;
use App\Http\Controllers\Controller;
use App\Persona;
use Excel;
use Input;

class Reportes extends Controller {

	public function reporteCitasPsicologicas() {
		$dataGet   = Input::all();
		$psicologo = Persona::find($dataGet['codigoPsicologo']);
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
						$dataGet = Input::all();
						$psicologo = Persona::find($dataGet['codigoPsicologo']);
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
	}

}
