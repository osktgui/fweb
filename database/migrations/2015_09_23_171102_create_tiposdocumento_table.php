<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTiposdocumentoTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('TiposDocumento', function (Blueprint $table) {
				$table->integer('tipoDocumento');
				$table->string('nombre', 50);
				$table->text('observacion', 50)->nullable();
				$table->timestamp('fechaCreacion');
				$table->string('usuarioCreacion', 10);
				$table->timestamp('fechaModificacion')->nullable();
				$table->string('usuarioModificacion', 10)->nullable();

				// Primary Key
				$table->primary('tipoDocumento');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('TiposDocumento');
	}
}
