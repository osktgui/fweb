<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('usuarios')->delete();
		// Usuarios de los Psicólogos de prueba
		DB::table('usuarios')->insert([
				'personaId'     => 1,
				'nombreUsuario' => 'jose@xurface.com',
				'contrasena'    => Hash::make('123'),
				'bloqueado'     => false,
				'created_by'    => 'Sistema'
			]);
		DB::table('usuarios')->insert([
				'personaId'     => 2,
				'nombreUsuario' => 'alejandro@xurface.com',
				'contrasena'    => Hash::make('123'),
				'bloqueado'     => false,
				'created_by'    => 'Sistema'
			]);
		DB::table('usuarios')->insert([
				'personaId'     => 3,
				'nombreUsuario' => 'luis@xurface.com',
				'contrasena'    => Hash::make('123'),
				'bloqueado'     => false,
				'created_by'    => 'Sistema'
			]);
	}
}

?>