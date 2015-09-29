<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConocimientoIdiomasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('conocimiento_idiomas', function (Blueprint $table) {
				$table->increments('conocimientoIdiomaId');
				$table->integer('personaId')->unsigned();
				$table->integer('idiomaId');
				$table->integer('nivelIdiomaId');
				// Auditoría
				$table->string('created_by', 50);
				$table->string('updated_by', 50)->nullable();
				$table->nullableTimestamps();
				// FK
				$table->foreign('personaId')->references('personaId')->on('personas');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('conocimiento_idiomas');
	}
}
