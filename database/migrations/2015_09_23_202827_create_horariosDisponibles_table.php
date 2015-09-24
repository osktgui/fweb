<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHorariosDisponiblesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('HorariosDisponibles', function (Blueprint $table) {
				$table->integer('horarioDisponibleId');
				$table->integer('personaId');
				$table->timestamp('fechaHora');
				$table->timestamp('fechaCreacion');
				$table->string('usuarioCreacion', 10);
				$table->timestamp('fechaModificacion')->nullable();
				$table->string('usuarioModificacion', 10)->nullable();

				// PRIMARY KEY
				$table->primary('horarioDisponibleId');

				// FOREIGN KEY
				$table->foreign('personaId')->references('personaId')->on('Personas')->onDelete('cascade');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('HorariosDisponibles');
	}
}
