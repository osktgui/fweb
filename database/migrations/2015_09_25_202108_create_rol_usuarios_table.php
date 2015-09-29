<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolUsuariosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('rol_usuarios', function (Blueprint $table) {
				$table->increments('rolUsuarioId');
				$table->integer('usuarioId')->unsigned();
				$table->integer('rolId');
				$table->string('observacion', 200)->nullable();
				// Auditoría
				$table->string('created_by', 50);
				$table->string('updated_by', 50)->nullable();
				$table->nullableTimestamps();
				// FK
				$table->foreign('usuarioId')->references('usuarioId')->on('usuarios');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('rol_usuarios');
	}
}
