<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOpcionesPreguntasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('opciones_preguntas', function (Blueprint $table) {
				$table->increments('opcionesPreguntaId');
				$table->integer('preguntasEncuestaId');
				$table->text('texto');
				$table->timestamps();

				// FK
				$table->foreign('preguntasEncuestaId')->references('preguntasEncuestaId')->on('preguntas_encuestas');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('opciones_preguntas');
	}
}
