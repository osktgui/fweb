<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoriaClinicasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('historia_clinicas', function (Blueprint $table) {
				$table->increments('historiaId');
				$table->integer('psicologoId');
				$table->integer('pacienteId');
				$table->integer('citaPsicologicaId');
				$table->date('fechaHistoria');
				$table->text('descripcion');
				$table->timestamps();

				// FK
				$table->foreign('psicologoId')->references('personaId')->on('personas');
				$table->foreign('pacienteId')->references('personaId')->on('personas');
				$table->foreign('citaPsicologicaId')->references('citaPsicologicaId')->on('cita_psicologicas');

			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('historia_clinicas');
	}
}
