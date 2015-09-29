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
		Schema::create('personas', function (Blueprint $table) {
				$table->increments('personaId');
				$table->string('nombrePersona', 200);
				$table->integer('tipoDocumentoId')->nullable();
				$table->string('numeroDocumento', 15)->nullable();
				$table->integer('sexoId')->nullable();
				$table->integer('codPaisNacimiento')->nullable();
				$table->integer('codDepartamentoNacimiento')->nullable();
				$table->integer('codProvinciaNacimiento')->nullable();
				$table->integer('codDistritoNacimiento')->nullable();
				$table->integer('codPaisResidencia')->nullable();
				$table->integer('codDepartamentoResidencia')->nullable();
				$table->integer('codProvinciaResidencia')->nullable();
				$table->integer('codDistritoResidencia')->nullable();
				$table->string('direccion', 100)->nullable();
				$table->string('skypeId', 100)->nullable();
				$table->string('correoElectronico', 100)->nullable();
				$table->string('telefonoMovil', 20)->nullable();
				$table->string('telefonoFijo', 20)->nullable();
				$table->string('codColegioProfesional', 20)->nullable();
				$table->text('fotoRuta')->nullable();
				$table->integer('tipoRegistroId');
				// Auditoría
				$table->string('created_by', 50);
				$table->string('updated_by', 50)->nullable();
				$table->nullableTimestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('personas');
	}
}
