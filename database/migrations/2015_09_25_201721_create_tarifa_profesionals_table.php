<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarifaProfesionalsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('tarifa_profesionals', function (Blueprint $table) {
				$table->increments('tarifaProfesionalId');
				$table->integer('personaId')->unsigned();
				$table->float('montoTarifa');
				$table->integer('tipoMonedaId');
				// Auditoría
				$table->string('created_by', 50);
				$table->string('updated_by', 50)->nullable();
				$table->nullableTimestamps();
				// FK
				$table->foreign('personaId')->references('personaId')->on('personas');
			});
	}
	/**
	 *     Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('tarifa_profesionals');
	}
}
