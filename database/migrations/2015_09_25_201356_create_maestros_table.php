<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaestrosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('maestros', function (Blueprint $table) {
				$table->increments('maestroId');
				$table->string('nombreMaestro', 50);
				$table->string('descripcionMaestro', 200)->nullable();
				// Auditoría
				$table->string('created_by', 50);
				$table->string('updated_by', 50)->nullable();
				$table->nullableTimestamps();
				// $table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('maestros');
	}
}
