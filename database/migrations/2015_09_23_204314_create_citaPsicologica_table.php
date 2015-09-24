<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitaPsicologicaTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('CitaPsicologica', function (Blueprint $table) {
				$table->integer('citaId');
				$table->string('codigoCita', 10);
				$table->integer('psicologoId');
				$table->integer('pacienteId');
				$table->integer('horarioDisponibleId');
				$table->integer('estadoCitaId');
				$table->integer('tipoCitaId');
				$table->string('observacion', 150)->nullable();
				$table->timestamp('fechaCreacion');
				$table->string('usuarioCreacion', 10);
				$table->timestamp('fechaModificacion')->nullable();
				$table->string('usuarioModificacion', 10)->nullable();

				// PRIMARY KEY
				$table->primary('citaId');

				// FOREIGN KEY
				$table->foreign('horarioDisponibleId')->references('horarioDisponibleId')->on('HorariosDisponibles')->onDelete('cascade');
				$table->foreign('pacienteId')->references('personaId')->on('Personas')->onDelete('cascade');
				$table->foreign('psicologoId')->references('personaId')->on('Personas')->onDelete('cascade');

			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('CitaPsicologica');
	}
}
