<?php

use Illuminate\Database\Seeder;

class UbigeosTableSeeder extends Seeder {

	public function run() {
		DB::table('ubigeos')->insert([
				'codPais'         => '1',
				'codDepartamento' => '1',
				'codProvincia'    => '1',
				'codDistrito'     => '1',
				'nomPais'         => 'Perú',
				'nomDepartamento' => 'Lima',
				'nomProvincia'    => 'Cañete',
				'nomDistrito'     => 'Asia',
				'created_by'      => 'Sistema'
			]);

		DB::table('ubigeos')->insert([
				'codPais'         => '1',
				'codDepartamento' => '1',
				'codProvincia'    => '1',
				'codDistrito'     => '2',
				'nomPais'         => 'Perú',
				'nomDepartamento' => 'Lima',
				'nomProvincia'    => 'Cañete',
				'nomDistrito'     => 'San Antonio',
				'created_by'      => 'Sistema'
			]);

		DB::table('ubigeos')->insert([
				'codPais'         => '1',
				'codDepartamento' => '1',
				'codProvincia'    => '2',
				'codDistrito'     => '3',
				'nomPais'         => 'Perú',
				'nomDepartamento' => 'Lima',
				'nomProvincia'    => 'Huaral',
				'nomDistrito'     => 'Huaral',
				'created_by'      => 'Sistema'
			]);

		DB::table('ubigeos')->insert([
				'codPais'         => '1',
				'codDepartamento' => '1',
				'codProvincia'    => '2',
				'codDistrito'     => '4',
				'nomPais'         => 'Perú',
				'nomDepartamento' => 'Lima',
				'nomProvincia'    => 'Huaral',
				'nomDistrito'     => 'Aucallama',
				'created_by'      => 'Sistema'
			]);

		DB::table('ubigeos')->insert([
				'codPais'         => '1',
				'codDepartamento' => '2',
				'codProvincia'    => '3',
				'codDistrito'     => '5',
				'nomPais'         => 'Perú',
				'nomDepartamento' => 'Junin',
				'nomProvincia'    => 'Jauja',
				'nomDistrito'     => 'Jauja',
				'created_by'      => 'Sistema'
			]);

		DB::table('ubigeos')->insert([
				'codPais'         => '1',
				'codDepartamento' => '2',
				'codProvincia'    => '3',
				'codDistrito'     => '6',
				'nomPais'         => 'Perú',
				'nomDepartamento' => 'Junin',
				'nomProvincia'    => 'Jauja',
				'nomDistrito'     => 'Acolla',
				'created_by'      => 'Sistema'
			]);

		DB::table('ubigeos')->insert([
				'codPais'         => '1',
				'codDepartamento' => '2',
				'codProvincia'    => '7',
				'codDistrito'     => '6',
				'nomPais'         => 'Perú',
				'nomDepartamento' => 'Junin',
				'nomProvincia'    => 'Huancayo',
				'nomDistrito'     => 'Huancayo',
				'created_by'      => 'Sistema'
			]);

		DB::table('ubigeos')->insert([
				'codPais'         => '1',
				'codDepartamento' => '2',
				'codProvincia'    => '7',
				'codDistrito'     => '8',
				'nomPais'         => 'Perú',
				'nomDepartamento' => 'Junin',
				'nomProvincia'    => 'Huancayo',
				'nomDistrito'     => 'El Tambo',
				'created_by'      => 'Sistema'
			]);
	}
}

// ============ PAISES ===========================
// 1-> Perú

// ============ DEPARTAMENTO ===========================
// 1-> Lima (Perú)
// 2-> Junin (Peru)

// ============ PROVINCIA ===========================
// 1-> Cañete (Lima)
// 2-> Huaral (Lima)
// 3-> Jauja (Junín)
// 4-> Huancayo (Junín)

// ============ DISTRITO ===========================
// 1-> Asia (Cañete)
// 2-> San Antonio (Cañete)
// 3-> Huaral (Huaral)
// 4-> Aucallama (Huaral)
// 5-> Jauja (Jauja)
// 6-> Acolla(Jauja)
// 7-> Huancayo(Huancayo)
// 8-> El Tambo(Huancayo)
