<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganizacionsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('organizacions', function (Blueprint $table) {
				$table->increments('organizacionId');
				$table->integer('codPaisUbicacion');
				$table->integer('codDepartamentoUbicacion');
				$table->integer('codProvinciaUbicacion');
				$table->integer('codDistritoUbicacion');
				$table->integer('tipoCodigoEmpresaId');
				$table->string('codEmpresa', 20);
				$table->string('razonSocial', 100);
				$table->string('nombreComercial', 100);
				$table->string('telefonoEmpresa', 20);
				$table->string('direccionEmpresa', 100);
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
		Schema::drop('organizacions');
	}
}
