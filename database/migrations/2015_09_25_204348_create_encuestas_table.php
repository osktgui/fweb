<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncuestasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('encuestas', function (Blueprint $table) {
				$table->increments('encuestaId');
				$table->date('fechaInicioEncuesta')->nullable();
				$table->date('fechaFinEncuesta')->nullable();
				$table->boolean('activaEncuesta');
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
		Schema::drop('encuestas');
	}
}
