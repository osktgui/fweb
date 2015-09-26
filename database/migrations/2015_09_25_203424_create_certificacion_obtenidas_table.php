<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCertificacionObtenidasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('certificacion_obtenidas', function (Blueprint $table) {
				$table->increments('certificacionObtenidaId');
				$table->integer('personaId');
				$table->text('descripcion');
				$table->string('tituloCertificacion', 50);
				$table->integer('organizacionId');
				$table->timestamps();

				// FK
				$table->foreign('personaId')->references('personaId')->on('personas');
				$table->foreign('organizacionId')->references('organizacionId')->on('organizacions');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('certificacion_obtenidas');
	}
}
