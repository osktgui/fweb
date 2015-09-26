<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreguntasEncuestasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('preguntas_encuestas', function (Blueprint $table) {
				$table->increments('preguntasEncuestaId');
				$table->integer('encuestaId');
				$table->text('texto');
				$table->timestamps();

				// FK
				$table->foreign('encuestaId')->references('encuestaId')->on('encuestas');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('preguntas_encuestas');
	}
}
