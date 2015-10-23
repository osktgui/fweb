<?php

use Illuminate\Database\Seeder;

class OrganizacionsTableSeeder extends Seeder {

	public function run() {
		DB::table('organizacions')->insert([
				'codPaisUbicacion'         => '1',
				'codDepartamentoUbicacion' => '2',
				'codProvinciaUbicacion'    => '4',
				'codDistritoUbicacion'     => '8',
				'tipoCodigoEmpresaId'      => '8',
				'codEmpresa'               => '20541388061',
				'razonSocial'              => 'Xurface S.A.C.',
				'nombreComercial'          => 'Xurface',
				'telefonoEmpresa'          => '000000',
				'direccionEmpresa'         => 'PROL MIGUEL GRAU NRO. 2330(3RA CUADRA DE LA AV. PROGESO)JUNIN - HUANCAYO - EL TAMBO',
				'created_by'               => 'Sistema'
			]);
		DB::table('organizacions')->insert([
				'codPaisUbicacion'         => '1',
				'codDepartamentoUbicacion' => '2',
				'codProvinciaUbicacion'    => '4',
				'codDistritoUbicacion'     => '8',
				'tipoCodigoEmpresaId'      => '7',
				'codEmpresa'               => '20129588463',
				'razonSocial'              => 'Universidad Peruana Los Andes',
				'nombreComercial'          => 'Universidad Peruana Los Andes',
				'telefonoEmpresa'          => '000000',
				'direccionEmpresa'         => 'AV. GIRALDEZ NRO. 230 JUNIN - HUANCAYO - HUANCAYO',
				'created_by'               => 'Sistema'
			]);
		DB::table('organizacions')->insert([
				'codPaisUbicacion'         => '1',
				'codDepartamentoUbicacion' => '2',
				'codProvinciaUbicacion'    => '4',
				'codDistritoUbicacion'     => '8',
				'tipoCodigoEmpresaId'      => '8',
				'codEmpresa'               => '20145561095',
				'razonSocial'              => 'Universidad Nacional del Centro del Perú',
				'nombreComercial'          => 'Universidad Nacional del Centro del Perú',
				'telefonoEmpresa'          => '000000',
				'direccionEmpresa'         => 'AV. MARISCAL CASTILLA NRO. 4089 CIUDAD UNIVERSITARIA (EDIFICIO ADMINISTRACION Y GOBIERNO)JUNIN - HUANCAYO - EL TAMBO',
				'created_by'               => 'Sistema'
			]);
		DB::table('organizacions')->insert([
				'codPaisUbicacion'         => '1',
				'codDepartamentoUbicacion' => '2',
				'codProvinciaUbicacion'    => '4',
				'codDistritoUbicacion'     => '8',
				'tipoCodigoEmpresaId'      => '8',
				'codEmpresa'               => '20600211677',
				'razonSocial'              => 'Real Center Investment S.A.C.',
				'nombreComercial'          => 'Real Center Investment',
				'telefonoEmpresa'          => '000000',
				'direccionEmpresa'         => 'CAL.EL PALMAR - TORRE 2 NRO. 155 DPTO. 602 URB. SALAMANCA DE MONTERRICO (ALT CDRA 7 DE PARACAS)LIMA - LIMA - ATE',
				'created_by'               => 'Sistema'
			]);
	}
}
