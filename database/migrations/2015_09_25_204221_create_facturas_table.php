<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacturasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('facturas', function (Blueprint $table) {
				$table->increments('facturaId');
				$table->integer('transaccionId')->unsigned();
				$table->string('numeroFactura', 10);
				$table->date('fechaFactura');
				$table->string('nombreClienteFactura', 200);
				$table->string('codigoClienteFactura', 20);
				$table->string('direccionClienteFactura', 100);
				$table->integer('porcentajeIGV');
				$table->string('observacion', 200)->nullable();
				// Auditoría
				$table->string('created_by', 50);
				$table->string('updated_by', 50)->nullable();
				$table->nullableTimestamps();
				// FK
				$table->foreign('transaccionId')->references('transaccionId')->on('transaccions');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('facturas');
	}
}
