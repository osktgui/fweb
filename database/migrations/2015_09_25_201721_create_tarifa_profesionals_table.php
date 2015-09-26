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
				$table->integer('personaId');
				$table->float('montoTarifa');
				$table->integer('tipoMonedaId');
				$table->timestamps();
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
