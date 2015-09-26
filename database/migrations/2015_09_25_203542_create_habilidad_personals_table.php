<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHabilidadPersonalsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('habilidad_personals', function (Blueprint $table) {
				$table->increments('habilidadPersonalId');
				$table->integer('personalId');
				$table->integer('habilidadId');
				$table->timestamps();

				// FK
				$table->foreign('personalId')->references('personalId')->on('personas');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('habilidad_personals');
	}
}
