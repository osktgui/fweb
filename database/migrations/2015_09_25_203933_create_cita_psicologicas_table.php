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
				// $table->string('codigoCita', 10);
				$table->integer('psicologoId')->unsigned();
				$table->integer('pacienteId')->unsigned();
				$table->integer('horarioDisponibleId')->unsigned();
				$table->integer('estadoCitaId');
				$table->integer('tipoCitaId');
				$table->text('observacion')->nullable();
				// Auditoría
				$table->string('created_by', 50);
				$table->string('updated_by', 50)->nullable();
				$table->nullableTimestamps();
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
