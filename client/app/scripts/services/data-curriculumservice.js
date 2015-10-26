'use strict';

/**
 * @ngdoc service
 * @name filiumApp.dataCurriculumservice
 * @description
 * # dataCurriculumservice
 * Service in the filiumApp.
 */
angular.module('filiumApp')
  .service('dataCurriculumservice', function ($http, $q, pageConfig) {
		//Métodos privados
    function handleError( response ) {
        if (
            !angular.isObject(response.data) ||
            !response.data.message
            ) {
            return ($q.reject('An unknown error occurred.'));

        }
        return ($q.reject(response.data.message));
    }
    function handleSuccess(response) {
        return (response.data);
    }


  // ===================== Formación Profesional =====================
		function getFormacionProfesional(data){
			var request = $http({
				method: 'get',
				url: 'getFormacionProfesional',
				params:{
					personaId: data.personaId
				}
			});
			return (request.then(handleSuccess, handleError));			
		}
		function registrarFormacionProfesional(data){
			var request = $http({
				method: 'get',
				url: 'registrarFormacionProfesional',
				params:{
					personaId: data.personaId,
					organizacionId: data.organizacionId,
					gradoAcademicoId: data.gradoAcademicoId,
					nombreCarrera: data.nombreCarrera,
					incluirMencion: data.incluirMencion,
					nombreMencion: data.nombreMencion,
					fechaInicio: data.fechaInicio,
					estudiandoActualmente: data.estudiandoActualmente,
					fechaFin: data.fechaFin,
					comentario: data.comentario,
					created_by: data.created_by
				}
			});
			return (request.then(handleSuccess, handleError));
		}
		function actualizarFormacionProfesional(data){
			var request = $http({
				method: 'get',
				url: 'actualizarFormacionProfesional',
				params:{
					formacionProfesionalId: data.formacionProfesionalId,
					personaId: data.personaId,
					organizacionId: data.organizacionId,
					gradoAcademicoId: data.gradoAcademicoId,
					nombreCarrera: data.nombreCarrera,
					incluirMencion: data.incluirMencion,
					nombreMencion: data.nombreMencion,
					fechaInicio: data.fechaInicio,
					estudiandoActualmente: data.estudiandoActualmente,
					fechaFin: data.fechaFin,
					comentario: data.comentario,
					created_by: data.created_by
				}
			});
			return (request.then(handleSuccess, handleError));
		}
		function eliminarFormacionProfesional(data){
			var request = $http({
				method: 'get',
				url: 'eliminarFormacionProfesional',
				params:{
					formacionProfesionalId: data.formacionProfesionalId
				}
			});
			return (request.then(handleSuccess, handleError));
		}

  // ===================== Experiencia Laboral =====================
		function getExperienciaLaboral(data){
			var request = $http({
				method: 'get',
				url: 'getExperienciaLaboral',
				params:{
					personaId: data.personaId
				}
			});
			return (request.then(handleSuccess, handleError));			
		}
		function registrarExperienciaLaboral(data){
			var request = $http({
				method: 'get',
				url: 'registrarExperienciaLaboral',
				params:{
					personaId :data.personaId,
					organizacionId :data.organizacionId,
					nombreCargo :data.nombreCargo,
					descripcion :data.descripcion,
					fechaInicio :data.fechaInicio,
					laborandoActualmente :data.laborandoActualmente,
					fechaFin :data.fechaFin,
					created_by :data.created_by
				}
			});
			return (request.then(handleSuccess, handleError));
		}
		function actualizarExperienciaLaboral(data){
			var request = $http({
				method: 'get',
				url: 'actualizarExperienciaLaboral',
				params:{
					experienciaLaboralId: data.experienciaLaboralId,
					personaId :data.personaId,
					organizacionId :data.organizacionId,
					nombreCargo :data.nombreCargo,
					descripcion :data.descripcion,
					fechaInicio :data.fechaInicio,
					laborandoActualmente :data.laborandoActualmente,
					fechaFin :data.fechaFin,
					created_by :data.created_by
				}
			});
			return (request.then(handleSuccess, handleError));
		}
		function eliminarExperienciaLaboral(data){
			var request = $http({
				method: 'get',
				url: 'eliminarExperienciaLaboral',
				params:{
					experienciaLaboralId: data.experienciaLaboralId
				}
			});
			return (request.then(handleSuccess, handleError));
		}

  // ===================== Certificaciones Obtenidas =====================
		function getCertificacionObtenida(data){
			var request = $http({
				method: 'get',
				url: 'getCertificacionObtenida',
				params:{
					personaId: data.personaId
				}
			});
			return (request.then(handleSuccess, handleError));			
		}
		function registrarCertificacionObtenida(data){
			var request = $http({
				method: 'get',
				url: 'registrarCertificacionObtenida',
				params:{
					personaId : data.personaId,
					tituloCertificacion : data.tituloCertificacion,
					fechaCertificacion : data.fechaCertificacion,
					organizacionId : data.organizacionId,
					descripcion : data.descripcion,
					created_by : data.created_by
				}
			});
			return (request.then(handleSuccess, handleError));
		}
		function actualizarCertificacionObtenida(data){
			var request = $http({
				method: 'get',
				url: 'actualizarCertificacionObtenida',
				params:{
					certificacionObtenidaId: data.certificacionObtenidaId,
					personaId : data.personaId,
					tituloCertificacion : data.tituloCertificacion,
					fechaCertificacion : data.fechaCertificacion,
					organizacionId : data.organizacionId,
					descripcion : data.descripcion,
					created_by : data.created_by
				}
			});
			return (request.then(handleSuccess, handleError));
		}
		function eliminarCertificacionObtenida(data){
			var request = $http({
				method: 'get',
				url: 'eliminarCertificacionObtenida',
				params:{
					certificacionObtenidaId: data.certificacionObtenidaId
				}
			});
			return (request.then(handleSuccess, handleError));
		}

  // ===================== Conocimiento Idioma =====================
		function getConocimientoIdioma(data){
			var request = $http({
				method: 'get',
				url: 'getConocimientoIdioma',
				params:{
					personaId: data.personaId
				}
			});
			return (request.then(handleSuccess, handleError));			
		}
		function registrarConocimientoIdioma(data){
			var request = $http({
				method: 'get',
				url: 'registrarConocimientoIdioma',
				params:{
						personaId : data.personaId, 
						idiomaId : data.idiomaId, 
						nivelIdiomaId : data.nivelIdiomaId, 
						created_by : data.created_by
				}
			});
			return (request.then(handleSuccess, handleError));
		}
		function actualizarConocimientoIdioma(data){
			var request = $http({
				method: 'get',
				url: 'actualizarConocimientoIdioma',
				params:{
					conocimientoIdiomaId: data.conocimientoIdiomaId,
					personaId : data.personaId, 
					idiomaId : data.idiomaId, 
					nivelIdiomaId : data.nivelIdiomaId, 
					created_by : data.created_by
				}
			});
			return (request.then(handleSuccess, handleError));
		}
		function eliminarConocimientoIdioma(data){
			var request = $http({
				method: 'get',
				url: 'eliminarConocimientoIdioma',
				params:{
					conocimientoIdiomaId: data.conocimientoIdiomaId
				}
			});
			return (request.then(handleSuccess, handleError));
		}
  // ===================== Habilidades Personales =====================
		function getHabilidadPersonal(data){
			var request = $http({
				method: 'get',
				url: 'getHabilidadPersonal',
				params:{
					personaId: data.personaId
				}
			});
			return (request.then(handleSuccess, handleError));			
		}
		function registrarHabilidadPersonal(data){
			var request = $http({
				method: 'get',
				url: 'registrarHabilidadPersonal',
				params:{
					personaId : data.personaId,
					habilidadId : data.habilidadId,
					descripcion : data.descripcion,
					created_by : data.created_by
				}
			});
			return (request.then(handleSuccess, handleError));
		}
		function actualizarHabilidadPersonal(data){
			var request = $http({
				method: 'get',
				url: 'actualizarHabilidadPersonal',
				params:{
					habilidadPersonalId: data.habilidadPersonalId,
					personaId : data.personaId,
					habilidadId : data.habilidadId,
					descripcion : data.descripcion,
					created_by : data.created_by
				}
			});
			return (request.then(handleSuccess, handleError));
		}
		function eliminarHabilidadPersonal(data){
			var request = $http({
				method: 'get',
				url: 'eliminarHabilidadPersonal',
				params:{
					habilidadPersonalId: data.habilidadPersonalId
				}
			});
			return (request.then(handleSuccess, handleError));
		}

		return ({

			// Formación Profesional
			getFormacionProfesional: getFormacionProfesional,
			registrarFormacionProfesional: registrarFormacionProfesional,
			actualizarFormacionProfesional: actualizarFormacionProfesional,
			eliminarFormacionProfesional: eliminarFormacionProfesional,
			// Experiencia Laboral
			getExperienciaLaboral: getExperienciaLaboral,
			registrarExperienciaLaboral: registrarExperienciaLaboral,
			actualizarExperienciaLaboral: actualizarExperienciaLaboral,
			eliminarExperienciaLaboral: eliminarExperienciaLaboral,
			// Certificación Obtenida
			getCertificacionObtenida: getCertificacionObtenida,
			registrarCertificacionObtenida: registrarCertificacionObtenida,
			actualizarCertificacionObtenida: actualizarCertificacionObtenida,
			eliminarCertificacionObtenida: eliminarCertificacionObtenida,
			// Conocimiento Idioma
			getConocimientoIdioma: getConocimientoIdioma,
			registrarConocimientoIdioma: registrarConocimientoIdioma,
			actualizarConocimientoIdioma: actualizarConocimientoIdioma,
			eliminarConocimientoIdioma: eliminarConocimientoIdioma,
			// Habilidades Personales
			getHabilidadPersonal : getHabilidadPersonal,
			registrarHabilidadPersonal : 	registrarHabilidadPersonal,
			actualizarHabilidadPersonal : 	actualizarHabilidadPersonal,
			eliminarHabilidadPersonal : 	eliminarHabilidadPersonal


	
		});
  });
