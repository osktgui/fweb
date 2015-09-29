<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRubroEmpresasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('rubro_empresas', function (Blueprint $table) {
				$table->increments('rubroEmpresaId');
				$table->integer('organizacionId')->unsigned();
				$table->integer('rubroId');
				// Auditoría
				$table->string('created_by', 50);
				$table->string('updated_by', 50)->nullable();
				$table->nullableTimestamps();
				// FK
				$table->foreign('organizacionId')->references('organizacionId')->on('organizacions');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('rubro_empresas');
	}
}
