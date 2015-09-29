<?php

use Illuminate\Database\Seeder;

class PersonaTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('personas')->delete();
		// Piscólogos de Prueba
		DB::table('personas')->insert([
				'nombrePersona'         => 'José Antonio Rios',
				'tipoDocumentoId'       => 1,
				'numeroDocumento'       => '12345678',
				'sexoId'                => 3,
				'direccion'             => 'Jr. Grau 123',
				'skypeId'               => 'JoseAnotnioSkype',
				'correoElectronico'     => 'jose@xurface.com',
				'telefonoMovil'         => '921212121',
				'telefonoFijo'          => '212121',
				'codColegioProfesional' => 'CPsP.212121',
				'tipoRegistroId'        => 5,
				'created_by'            => 'Sistema'
			]);
		DB::table('personas')->insert([
				'nombrePersona'         => 'Alejandro Mayta',
				'tipoDocumentoId'       => 1,
				'numeroDocumento'       => '44444444',
				'sexoId'                => 3,
				'direccion'             => 'Jr. Grau 123',
				'skypeId'               => 'AlejandroSkype',
				'correoElectronico'     => 'alejandro@xurface.com',
				'telefonoMovil'         => '924242424',
				'telefonoFijo'          => '24242424',
				'codColegioProfesional' => 'CPsP.242424',
				'tipoRegistroId'        => 5,
				'created_by'            => 'Sistema'
			]);
		DB::table('personas')->insert([
				'nombrePersona'         => 'Luis Oscátegui',
				'tipoDocumentoId'       => 1,
				'numeroDocumento'       => '55555555',
				'sexoId'                => 3,
				'direccion'             => 'Jr. Grau 123',
				'skypeId'               => 'LuisSkype',
				'correoElectronico'     => 'Luis@xurface.com',
				'telefonoMovil'         => '925252525',
				'telefonoFijo'          => '25252525',
				'codColegioProfesional' => 'CPsP.252525',
				'tipoRegistroId'        => 5,
				'created_by'            => 'Sistema'
			]);
	}

}

?>