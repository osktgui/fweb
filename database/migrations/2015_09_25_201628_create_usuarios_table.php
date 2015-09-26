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
				$table->integer('personaId');
				$table->string('skypeId', 50);
				$table->string('correoElectronico', 50);
				$table->text('contrasena');
				$table->dateTime('ultimaSesion');
				$table->boolean('bloqueado');
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
		Schema::drop('usuarios');
	}
}
