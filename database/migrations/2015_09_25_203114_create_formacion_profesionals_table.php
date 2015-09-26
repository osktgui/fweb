<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormacionProfesionalsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('formacion_profesionals', function (Blueprint $table) {
				$table->increments('formacionProfesionalId');
				$table->integer('personaId');
				$table->integer('organizacionId');
				$table->integer('gradoAcademicoId');
				$table->string('nombreCarrera', 100);
				$table->string('nombreMencion', 100);
				$table->date('fechaInicio');
				$table->date('fechaFin');
				$table->string('comentario', 200);
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
		Schema::drop('formacion_profesionals');
	}
}
