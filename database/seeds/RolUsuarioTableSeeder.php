<?php

use Illuminate\Database\Seeder;

class RolUsuariosTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('rol_usuarios')->delete();
		// Rol_Usuarios de Psicólogos de Prueba
		DB::table('rol_usuarios')->insert([
				'usuarioId'  => 1,
				'rolId'      => 9,
				'created_by' => 'Sistema'
			]);
		DB::table('rol_usuarios')->insert([
				'usuarioId'  => 2,
				'rolId'      => 9,
				'created_by' => 'Sistema'
			]);
		DB::table('rol_usuarios')->insert([
				'usuarioId'  => 3,
				'rolId'      => 9,
				'created_by' => 'Sistema'
			]);

	}

}

?>