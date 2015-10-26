<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienciaLaboral extends Model {
	protected $table      = 'experiencia_laborals';
	protected $primaryKey = 'experienciaLaboralId';

	public function organizacion() {
		return $this->belongsTo('App\Organizacion', 'organizacionId', 'organizacionId');
	}
}
