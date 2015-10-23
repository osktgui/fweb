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
		// Rubro Empresa
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 7,
				'nombreMaestroDetalle'      => 'Tecnología',
				'descripcionMaestroDetalle' => 'Desarrollo de los diferentes rubros relacionados a la tecnología.',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 7,
				'nombreMaestroDetalle'      => 'Educación',
				'descripcionMaestroDetalle' => 'Empresa o Institución dedica a impartir conocimientos.',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 7,
				'nombreMaestroDetalle'      => 'Ventas',
				'descripcionMaestroDetalle' => 'Empresa dedicada a la compra al por mayor y venta minoritaria de productos.',
				'created_by'                => 'Sistema'
			]);
		// Tipo Código de Empresa
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 8,
				'nombreMaestroDetalle'      => 'RUC',
				'descripcionMaestroDetalle' => 'La Empresa se registra en la Base de Datos mediante su RUC',
				'created_by'                => 'Sistema'
			]);
		// Grados Académicos
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 9,
				'nombreMaestroDetalle'      => 'Título Técnico',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 9,
				'nombreMaestroDetalle'      => 'Bachillerato',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 9,
				'nombreMaestroDetalle'      => 'Título Profesional',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 9,
				'nombreMaestroDetalle'      => 'Maestría',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 9,
				'nombreMaestroDetalle'      => 'Doctorado',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		// Idiomas
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 10,
				'nombreMaestroDetalle'      => 'Inglés',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 10,
				'nombreMaestroDetalle'      => 'Francés',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 10,
				'nombreMaestroDetalle'      => 'Italiano',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 10,
				'nombreMaestroDetalle'      => 'Portugués',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 10,
				'nombreMaestroDetalle'      => 'Chino',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		// NIvel de dominió del Idioma
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 11,
				'nombreMaestroDetalle'      => 'Iniciación',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 11,
				'nombreMaestroDetalle'      => 'Básico',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 11,
				'nombreMaestroDetalle'      => 'Intermedio',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 11,
				'nombreMaestroDetalle'      => 'Intermedio Avanzado',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 11,
				'nombreMaestroDetalle'      => 'Avanzado',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		// Habilidades Personales
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 12,
				'nombreMaestroDetalle'      => 'Empatía',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 12,
				'nombreMaestroDetalle'      => 'Liderazgo',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 12,
				'nombreMaestroDetalle'      => 'Persuasión',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 12,
				'nombreMaestroDetalle'      => 'Negociación',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 12,
				'nombreMaestroDetalle'      => 'Racionalización',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 12,
				'nombreMaestroDetalle'      => 'Argumentación',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 12,
				'nombreMaestroDetalle'      => 'Iniciativa',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 12,
				'nombreMaestroDetalle'      => 'Capacidadanalítica',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 12,
				'nombreMaestroDetalle'      => 'Capacidaddesíntesis',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 12,
				'nombreMaestroDetalle'      => 'Innovaciónycreatividad',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 12,
				'nombreMaestroDetalle'      => 'Controldelestrés',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);
		DB::table('maestro_detalles')->insert([
				'maestroId'                 => 12,
				'nombreMaestroDetalle'      => 'Trabajoenequipo',
				'descripcionMaestroDetalle' => '.....',
				'created_by'                => 'Sistema'
			]);

	}
}

?>












