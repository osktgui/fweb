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
				$table->date('fechaInicioEncuesta');
				$table->date('fechaFinEncuesta');
				$table->boolean('activaEncuesta');
				$table->timestamps();
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
