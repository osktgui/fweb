<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaestroDetallesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('maestro_detalles', function (Blueprint $table) {
				$table->increments('maestroDetalleId');
				$table->integer('maestroId');
				$table->string('nombreMaestroDetalle', 50);
				$table->string('descripcionMaestroDetalle', 200);
				$table->timestamps();
				// FK
				$table->foreign('maestroId')->references('maestroId')->on('maestros');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('maestro_detalles');
	}
}
