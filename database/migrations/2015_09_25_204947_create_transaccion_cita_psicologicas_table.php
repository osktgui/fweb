<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransaccionCitaPsicologicasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('transaccion_cita_psicologicas', function (Blueprint $table) {
				$table->increments('transaccionCitaPsicologicaId');
				$table->integer('citaPsicologicaId');
				$table->integer('transaccionId');
				$table->string('observacion', 200);
				$table->boolean('valida');
				$table->timestamps();

				// FK
				$table->foreign('citaPsicologicaId')->references('citaPsicologicaId')->on('cita_psicologicas');
				$table->foreign('transaccionId')->references('transaccionId')->on('transaccions');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('transaccion_cita_psicologicas');
	}
}
