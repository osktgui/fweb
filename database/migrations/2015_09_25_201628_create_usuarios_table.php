<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('usuarios', function (Blueprint $table) {
				$table->increments('usuarioId');
				$table->integer('personaId')->unsigned();
				$table->string('nombreUsuario', 100);
				$table->text('contrasena');
				$table->dateTime('ultimaSesion')->nullable();
				$table->boolean('bloqueado');
				// Auditoría
				$table->string('created_by', 50);
				$table->string('updated_by', 50)->nullable();
				$table->nullableTimestamps();
				// FK
				$table->foreign('personaId')->references('personaId')->on('personas');
				;
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('usuarios');
	}
}
