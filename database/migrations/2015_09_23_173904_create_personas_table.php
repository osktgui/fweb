<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('Personas', function (Blueprint $table) {
				$table->integer('personaId');
				$table->string('nombres', 75);
				$table->string('apellidos', 75);
				$table->integer('tipoDocumento')->nullable();
				$table->string('numeroDocumento', 15)->nullable();
				$table->string('CPsP', 10)->nullable();
				$table->integer('sexoPersona')->nullable();
				$table->string('direccion', 100)->nullable();
				$table->integer('lugarNacimiento')->nullable();
				$table->integer('lugarResidencia')->nullable();
				$table->string('telefonoMovil', 20)->nullable();
				$table->string('telefonoFijo', 20)->nullable();
				$table->text('foto_ruta')->nullable();
				$table->timestamp('fechaCreacion');
				$table->string('usuarioCreacion', 10);
				$table->timestamp('fechaModificacion')->nullable();
				$table->string('usuarioModificacion', 10)->nullable();

				// Primary Key
				$table->primary('personaId');

				// Foreign Keys
				$table->foreign('lugarNacimiento')->references('ubigeoId')->on('Ubigeo')->onDelete('cascade');
				$table->foreign('lugarResidencia')->references('ubigeoId')->on('Ubigeo')->onDelete('cascade');
				$table->foreign('sexoPersona')->references('sexoId')->on('Sexo')->onDelete('cascade');
				$table->foreign('tipoDocumento')->references('tipoDocumento')->on('TiposDocumento')->onDelete('cascade');

			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('Personas');
	}
}