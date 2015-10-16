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
				$table->integer('personaId')->unsigned();
				$table->integer('organizacionId')->unsigned();
				$table->integer('gradoAcademicoId');
				$table->string('nombreCarrera', 100);
				$table->boolean('incluirMencion');
				$table->string('nombreMencion', 100)->nullable();
				$table->date('fechaInicio');
				$table->boolean('estudiandoActualmente');
				$table->date('fechaFin')->nullable();
				$table->string('comentario', 200)->nullable();
				// Auditoría
				$table->string('created_by', 50);
				$table->string('updated_by', 50)->nullable();
				$table->nullableTimestamps();
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
