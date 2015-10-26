<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HabilidadPersonal extends Model {
	protected $table      = 'habilidad_personals';
	protected $primaryKey = 'habilidadPersonalId';

	public function habilidad() {
		return $this->belongsTo('App\MaestroDetalle', 'habilidadId', 'maestroDetalleId');
	}
}
