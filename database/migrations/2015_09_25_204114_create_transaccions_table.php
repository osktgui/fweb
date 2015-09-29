<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransaccionsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('transaccions', function (Blueprint $table) {
				$table->increments('transaccionId');
				$table->integer('personaId')->unsigned();
				$table->integer('bancoId');
				$table->integer('metodoPagoId');
				$table->float('monto');
				$table->dateTime('fechaPago');
				$table->text('archivoComprobante');
				$table->boolean('extornado');
				$table->string('nOperacion', 40);
				// Auditoría
				$table->string('created_by', 50);
				$table->string('updated_by', 50)->nullable();
				$table->nullableTimestamps();
				// FK
				$table->foreign('personaId')->references('personaId')->on('personas');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('transaccions');
	}
}
