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
				$table->integer('psicologoId')->unsigned();
				$table->integer('pacienteId')->unsigned();
				$table->integer('citaPsicologicaId')->unsigned();
				$table->date('fechaHistoria');
				$table->text('descripcion');
				// Auditoría
				$table->string('created_by', 50);
				$table->string('updated_by', 50)->nullable();
				$table->nullableTimestamps();
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
