<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificacionObtenida extends Model {
	protected $table      = 'certificacion_obtenidas';
	protected $primaryKey = 'certificacionObtenidaId';
	public function organizacion() {
		return $this->belongsTo('App\Organizacion', 'organizacionId', 'organizacionId');
	}
}
