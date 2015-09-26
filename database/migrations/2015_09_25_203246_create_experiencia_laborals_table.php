<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExperienciaLaboralsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('experiencia_laborals', function (Blueprint $table) {
				$table->increments('experienciaLaboralId');
				$table->integer('personaId');
				$table->integer('organizacionId');
				$table->string('nombreCargo', 50);
				$table->text('descripcion');
				$table->date('fechaInicio');
				$table->date('fechaFin');
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
		Schema::drop('experiencia_laborals');
	}
}
