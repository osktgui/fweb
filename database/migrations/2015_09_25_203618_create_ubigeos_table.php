<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUbigeosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('ubigeos', function (Blueprint $table) {
				$table->increments('ubigeoId');
				$table->string('codPais', 3);
				$table->string('codDepartamento', 3);
				$table->string('codProvincia', 3);
				$table->string('codDistrito', 3);
				$table->string('nomPais', 50);
				$table->string('nomDepartamento', 50);
				$table->string('nomProvincia', 50);
				$table->string('nomDistrito', 50);
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('ubigeos');
	}
}
