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
				$table->increments('personasId');
				$table->string('nombres', 100);
				$table->string('apellidos', 100);
				$table->integer('tipoDocumentoId');
				$table->string('numeroDocumento', 15);
				$table->integer('sexoId');
				$table->integer('codPaisNacimiento');
				$table->integer('codDepartamentoNacimiento');
				$table->integer('codProvinciaNacimiento');
				$table->integer('codDistritoNacimiento');
				$table->integer('codPaisResidencia');
				$table->integer('codDepartamentoResidencia');
				$table->integer('codProvinciaResidencia');
				$table->integer('codDistritoResidencia');
				$table->string('direccion', 100);
				$table->string('telefonoMovil', 20);
				$table->string('telefonoFijo', 20);
				$table->string('codColegioProfesional', 20);
				$table->text('fotoRuta');
				$table->integer('tipoRegistroId');
				$table->timestamps();
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
