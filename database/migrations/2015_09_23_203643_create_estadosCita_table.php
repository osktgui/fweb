<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstadosCitaTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('EstadosCita', function (Blueprint $table) {
				$table->integer('estadoCitaId');
				$table->string('nombreEstado', 20);
				$table->string('observacion', 150)->nullable();
				$table->timestamp('fechaCreacion');
				$table->string('usuarioCreacion', 10);
				$table->timestamp('fechaModificacion')->nullable();
				$table->string('usuarioModificacion', 10)->nullable();

				// PRIMARY KEY
				$table->primary('estadoCitaId');

			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('EstadosCita');
	}
}
