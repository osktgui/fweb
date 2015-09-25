<?php

use Illuminate\Database\Seeder;

Class SexoTableSeeder extends Seeder {
	public function run() {
		DB::table('Sexos')->delete();

		Sexos::create(array(
				'nombreSexo'      => 'Masculino',
				'observacion'     => '----',
				'fechaCreacion'   => '2015-10-10',
				'usuarioCreacion' => 'Sistema',
			));
		Sexos::create(array(
				'nombreSexo'      => 'Femenino',
				'observacion'     => '----',
				'fechaCreacion'   => '2015-10-10',
				'usuarioCreacion' => 'Sistema',
			));
	}
}

?>