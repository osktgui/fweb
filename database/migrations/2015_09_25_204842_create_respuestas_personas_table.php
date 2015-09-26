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
				$table->integer('personaId');
				$table->integer('opcionesPreguntaId');
				$table->text('descripcion');
				$table->timestamps();

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
