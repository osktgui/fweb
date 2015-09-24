<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUbigeoTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('Ubigeo', function (Blueprint $table) {
				$table->integer('ubigeoId');
				$table->string('codPais', 3);
				$table->string('codDepartamento', 3);
				$table->string('codProvincia', 3);
				$table->string('codDistrito', 3);
				$table->string('nomPais', 50);
				$table->string('nomDepartamento', 50);
				$table->string('nomProvincia', 50);
				$table->string('nomDistrito', 50);
				$table->timestamp('fechaCreacion');
				$table->string('usuarioCreacion', 10);
				$table->timestamp('fechaModificacion')->nullable();
				$table->string('usuarioModificacion', 10)->nullable();

				// Primary Key
				$table->primary('ubigeoId');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('Ubigeo');
	}
}
