<?php

use Illuminate\Database\Seeder;

class MaestroDetalleTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('maestro_detalles')->delete();
		// TipoDocumento
		DB::table('maestro_detalles')->insert([
				'maestroId'            => 1,
				'nombreMaestroDetalle' => 'DNI',
				'created_by'           => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'            => 1,
				'nombreMaestroDetalle' => 'RUC',
				'created_by'           => 'Sistema'
			]);
		// Sexo o Género
		DB::table('maestro_detalles')->insert([
				'maestroId'            => 2,
				'nombreMaestroDetalle' => 'Masculino',
				'created_by'           => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'            => 2,
				'nombreMaestroDetalle' => 'Femenino',
				'created_by'           => 'Sistema'
			]);
		// Tipo de Registro
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 3,
				'nombreMaestroDetalle'      => 'Landing',
				'descripcionMaestroDetalle' => 'El usuario fue registrado de manera promocional por el Landing.',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 3,
				'nombreMaestroDetalle'      => 'Regular',
				'descripcionMaestroDetalle' => 'El usuario se reistró de manera regular por el sitio web de Filium.',
				'created_by'                => 'Sistema'
			]);
		// Roles
		DB::table('maestro_detalles')->insert([
				'maestroId'            => 4,
				'nombreMaestroDetalle' => 'Administrador',
				'created_by'           => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'            => 4,
				'nombreMaestroDetalle' => 'Paciente',
				'created_by'           => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'            => 4,
				'nombreMaestroDetalle' => 'Psicólogo',
				'created_by'           => 'Sistema'
			]);
		// EstadoCita
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 5,
				'nombreMaestroDetalle'      => 'Pre-Reservada',
				'descripcionMaestroDetalle' => 'La cita ha sido separada pero aun falta confirman el pago correspondiente.',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 5,
				'nombreMaestroDetalle'      => 'Reservada',
				'descripcionMaestroDetalle' => 'La cita ha sido separada satisfactoriamente.',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 5,
				'nombreMaestroDetalle'      => 'Terminada',
				'descripcionMaestroDetalle' => 'La cita ha sido llevada satisfactoriamente.',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 5,
				'nombreMaestroDetalle'      => 'Cancelada',
				'descripcionMaestroDetalle' => 'La cita ha sido cancelada.',
				'created_by'                => 'Sistema'
			]);
		// TipoCita
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 6,
				'nombreMaestroDetalle'      => 'Regular',
				'descripcionMaestroDetalle' => 'Tipo de Cita normal.',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 6,
				'nombreMaestroDetalle'      => 'Promocional-Landing',
				'descripcionMaestroDetalle' => 'La cita ha sido separada por el Landing Promocional.',
				'created_by'                => 'Sistema'
			]);
	}
}

?>