<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConocimientoIdioma extends Model {
	protected $table      = 'conocimiento_idiomas';
	protected $primaryKey = 'conocimientoIdiomaId';

	public function idioma() {
		return $this->belongsTo('App\MaestroDetalle', 'idiomaId', 'maestroDetalleId');
	}
	public function nivelIdioma() {
		return $this->belongsTo('App\MaestroDetalle', 'nivelIdiomaId', 'maestroDetalleId');
	}
}
