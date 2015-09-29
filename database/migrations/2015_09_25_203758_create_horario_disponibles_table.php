<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHorarioDisponiblesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('horario_disponibles', function (Blueprint $table) {
				$table->increments('horarioDisponibleId');
				$table->integer('personaId')->unsigned();
				$table->date('fecha');
				$table->time('hora');
				$table->boolean('disponible');
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
		Schema::drop('horario_disponibles');
	}
}
