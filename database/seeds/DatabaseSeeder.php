<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Model::unguard();

		$this->call(MaestroTableSeeder::class );
		$this->call(MaestroDetalleTableSeeder::class );
		$this->call(PersonaTableSeeder::class );
		$this->call(UsuarioTableSeeder::class );
		$this->call(RolUsuariosTableSeeder::class );
		$this->call(HorarioDisponibleTableSeeder::class );

		Model::reguard();
	}
}
