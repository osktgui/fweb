<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitaPsicologicasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('cita_psicologicas', function (Blueprint $table) {
				$table->increments('citaPsicologicaId');
				$table->string('codigoCita', 10);
				$table->integer('psicologoId');
				$table->integer('pacienteId');
				$table->integer('horarioDisponibleId');
				$table->integer('estadoCitaId');
				$table->integer('tipoCitaId');
				$table->text('observacion');
				$table->timestamps();

				// FK

				$table->foreign('psicologoId')->references('personaId')->on('personas');
				$table->foreign('pacienteId')->references('personaId')->on('personas');
				$table->foreign('horarioDisponibleId')->references('horarioDisponibleId')->on('horario_disponibles');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('cita_psicologicas');
	}
}
