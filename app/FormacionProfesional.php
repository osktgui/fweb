<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormacionProfesional extends Model {
	protected $table      = 'formacion_profesionals';
	protected $primaryKey = 'formacionProfesionalId';

	public function organizacion() {
		return $this->belongsTo('App\Organizacion', 'organizacionId', 'organizacionId');
	}
	public function gradoAcademico() {
		return $this->belongsTo('App\MaestroDetalle', 'gradoAcademicoId', 'maestroDetalleId');
	}
}
;