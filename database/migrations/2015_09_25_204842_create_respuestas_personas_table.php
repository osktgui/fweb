<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRespuestasPersonasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('respuestas_personas', function (Blueprint $table) {
				$table->increments('respuestaPersonaId');
				$table->integer('personaId')->unsigned();
				$table->integer('opcionesPreguntaId')->unsigned();
				$table->text('descripcion')->nullable();
				// Auditoría
				$table->string('created_by', 50);
				$table->string('updated_by', 50)->nullable();
				$table->nullableTimestamps();
				// FK
				$table->foreign('personaId')->references('personaId')->on('personas');
				$table->foreign('opcionesPreguntaId')->references('opcionesPreguntaId')->on('opciones_preguntas');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('respuestas_personas');
	}
}
