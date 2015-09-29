<?php

use Illuminate\Database\Seeder;

class MaestroTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('maestros')->delete();
		DB::table('maestros')->insert([
				'nombreMaestro'      => 'Tipo de Documento',
				'descripcionMaestro' => 'Tipo de documento que registrará el usuario del sistema.',
				'created_by'         => 'Sistema'
			]);
		DB::table('maestros')->insert([
				'nombreMaestro'      => 'Sexo',
				'descripcionMaestro' => 'Sexo ó Género con el cual se registrará el usuario del sistema.',
				'created_by'         => 'Sistema'
			]);
		DB::table('maestros')->insert([
				'nombreMaestro'      => 'TipoRegistro',
				'descripcionMaestro' => 'Tipo o Modalidad de Registro (Lead, Normal...).',
				'created_by'         => 'Sistema'
			]);
		DB::table('maestros')->insert([
				'nombreMaestro'      => 'Roles',
				'descripcionMaestro' => 'Rol del Usuario (Paciente, Psicólogo, Administrador...).',
				'created_by'         => 'Sistema'
			]);
		DB::table('maestros')->insert([
				'nombreMaestro'      => 'EstadoCita',
				'descripcionMaestro' => 'Estado en el que se encuentra una Cita o Sesión Psicológica.',
				'created_by'         => 'Sistema'
			]);
		DB::table('maestros')->insert([
				'nombreMaestro'      => 'TipoCita',
				'descripcionMaestro' => 'Tipo de cita reservada, puede ser promocional, regular, gratuita.',
				'created_by'         => 'Sistema'
			]);
	}
}

?>