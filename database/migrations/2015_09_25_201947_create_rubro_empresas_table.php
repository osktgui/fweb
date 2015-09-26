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
				$table->integer('organizacionId');
				$table->integer('rubroId');
				$table->timestamps();
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
