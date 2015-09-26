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
				$table->increments('horadioDisponibleId');
				$table->integer('personaId');
				$table->dateTime('fechaHora');
				$table->timestamps();

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
