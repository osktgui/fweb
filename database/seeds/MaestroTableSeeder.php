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
		DB::table('maestros')->insert([
				'nombreMaestro'      => 'RubroEmpresas',
				'descripcionMaestro' => 'Rubro de la Empresa u Organización.',
				'created_by'         => 'Sistema'
			]);
		DB::table('maestros')->insert([
				'nombreMaestro'      => 'TipoCodigoEmpresa',
				'descripcionMaestro' => 'Tipo de código con el cual se le registra a la Empresa en la Base de Datos.',
				'created_by'         => 'Sistema'
			]);
		DB::table('maestros')->insert([
				'nombreMaestro'      => 'GradoAcademico',
				'descripcionMaestro' => 'Grado Académico para el registro de la Formación Profesional de los Psicólogos.',
				'created_by'         => 'Sistema'
			]);
		DB::table('maestros')->insert([
				'nombreMaestro'      => 'Idiomas',
				'descripcionMaestro' => 'Idioma que registra el Psicólogo como caractéristica de su CV.',
				'created_by'         => 'Sistema'
			]);
		DB::table('maestros')->insert([
				'nombreMaestro'      => 'NivelIdiomas',
				'descripcionMaestro' => 'Nivel de Dominio del Idioma registrado por el Psicólogo',
				'created_by'         => 'Sistema'
			]);
		DB::table('maestros')->insert([
				'nombreMaestro'      => 'Habilidades',
				'descripcionMaestro' => 'Habilidades que registra el Psicólogo en su CV.',
				'created_by'         => 'Sistema'
			]);
	}
}

?>