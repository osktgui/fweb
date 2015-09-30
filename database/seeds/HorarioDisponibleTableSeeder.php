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
				'hora'       => '16:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);
		DB::table('horario_disponibles')->insert([
				'personaId'  => 1,
				'fecha'      => '2015-09-30',
				'hora'       => '17:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);
		DB::table('horario_disponibles')->insert([
				'personaId'  => 1,
				'fecha'      => '2015-09-30',
				'hora'       => '18:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);

		DB::table('horario_disponibles')->insert([
				'personaId'  => 2,
				'fecha'      => '2015-09-30',
				'hora'       => '10:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 2,
				'fecha'      => '2015-09-30',
				'hora'       => '11:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 2,
				'fecha'      => '2015-09-30',
				'hora'       => '12:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);

		DB::table('horario_disponibles')->insert([
				'personaId'  => 3,
				'fecha'      => '2015-09-30',
				'hora'       => '11:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 3,
				'fecha'      => '2015-09-30',
				'hora'       => '12:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 3,
				'fecha'      => '2015-09-30',
				'hora'       => '13:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);
		// Horarios disponibles de Psicólogos de Prueba
		DB::table('horario_disponibles')->insert([
				'personaId'  => 1,
				'fecha'      => '2015-10-01',
				'hora'       => '16:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);
		DB::table('horario_disponibles')->insert([
				'personaId'  => 1,
				'fecha'      => '2015-10-01',
				'hora'       => '17:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);
		DB::table('horario_disponibles')->insert([
				'personaId'  => 1,
				'fecha'      => '2015-10-01',
				'hora'       => '18:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);

		DB::table('horario_disponibles')->insert([
				'personaId'  => 2,
				'fecha'      => '2015-10-01',
				'hora'       => '10:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 2,
				'fecha'      => '2015-10-01',
				'hora'       => '11:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 2,
				'fecha'      => '2015-10-01',
				'hora'       => '12:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);

		DB::table('horario_disponibles')->insert([
				'personaId'  => 3,
				'fecha'      => '2015-10-01',
				'hora'       => '11:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 3,
				'fecha'      => '2015-10-01',
				'hora'       => '12:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 3,
				'fecha'      => '2015-10-01',
				'hora'       => '13:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);
		// Horarios disponibles de Psicólogos de Prueba
		DB::table('horario_disponibles')->insert([
				'personaId'  => 1,
				'fecha'      => '2015-10-02',
				'hora'       => '16:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);
		DB::table('horario_disponibles')->insert([
				'personaId'  => 1,
				'fecha'      => '2015-10-02',
				'hora'       => '17:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);
		DB::table('horario_disponibles')->insert([
				'personaId'  => 1,
				'fecha'      => '2015-10-02',
				'hora'       => '18:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);

		DB::table('horario_disponibles')->insert([
				'personaId'  => 2,
				'fecha'      => '2015-10-02',
				'hora'       => '10:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 2,
				'fecha'      => '2015-10-02',
				'hora'       => '11:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 2,
				'fecha'      => '2015-10-02',
				'hora'       => '12:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);

		DB::table('horario_disponibles')->insert([
				'personaId'  => 3,
				'fecha'      => '2015-10-02',
				'hora'       => '11:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 3,
				'fecha'      => '2015-10-02',
				'hora'       => '12:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 3,
				'fecha'      => '2015-10-02',
				'hora'       => '13:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);
		// Horarios disponibles de Psicólogos de Prueba
		DB::table('horario_disponibles')->insert([
				'personaId'  => 1,
				'fecha'      => '2015-10-03',
				'hora'       => '16:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);
		DB::table('horario_disponibles')->insert([
				'personaId'  => 1,
				'fecha'      => '2015-10-03',
				'hora'       => '17:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);
		DB::table('horario_disponibles')->insert([
				'personaId'  => 1,
				'fecha'      => '2015-10-03',
				'hora'       => '18:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);

		DB::table('horario_disponibles')->insert([
				'personaId'  => 2,
				'fecha'      => '2015-10-03',
				'hora'       => '10:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 2,
				'fecha'      => '2015-10-03',
				'hora'       => '11:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 2,
				'fecha'      => '2015-10-03',
				'hora'       => '12:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);

		DB::table('horario_disponibles')->insert([
				'personaId'  => 3,
				'fecha'      => '2015-10-03',
				'hora'       => '11:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 3,
				'fecha'      => '2015-10-03',
				'hora'       => '12:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);DB::table('horario_disponibles')->insert([
				'personaId'  => 3,
				'fecha'      => '2015-10-03',
				'hora'       => '13:00',
				'disponible' => true,
				'created_by' => 'Sistema'
			]);
	}

}

?>