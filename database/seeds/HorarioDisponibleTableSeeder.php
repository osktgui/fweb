<?php

use Illuminate\Database\Seeder;

class HorarioDisponibleTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('horario_disponibles')->delete();
		// Horarios disponibles de Psicólogos de Prueba
		DB::table('horario_disponibles')->insert([
				'personaId'  => 1,
				'fecha'      => '2015-09-30',
				'hora'       => '16:30',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);
		DB::table('horario_disponibles')->insert([
				'personaId'  => 2,
				'fecha'      => '2015-09-30',
				'hora'       => '16:30',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);
		DB::table('horario_disponibles')->insert([
				'personaId'  => 3,
				'fecha'      => '2015-09-30',
				'hora'       => '10:30',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);
	}

}

?>