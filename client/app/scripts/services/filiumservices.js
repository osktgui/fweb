'use strict';

/**
 * @ngdoc service
 * @name filiumApp.filiumServices
 * @description
 * # filiumServices
 * Service in the filiumApp.
 */
angular.module('filiumApp')
  .service('filiumServices', function ($http, $q, pageConfig) {

		function getHorarios(data){
			var request = $http({
				method: 'get',
				url: 'leerHorariosDisponibles',
				params:{
					fechaCita: data.fechaCita.replace(/\//g,'-')
				}
			});
			return (request.then(handleSuccess, handleError));
		}
		function saveCita(data){
			var request = $http({
				method: 'get',
				url: 'registrarLead',
				params:{
					nombre: data.nombre,
					metodoContacto: data.metodoContacto,
					celular: data.celular,
					skype: data.skype,
					correo: data.correo,
					horario: data.horario
				}
			});
			return (request.then(handleSuccess, handleError));
		}
		function getDiasDisponibles(data){
			var request = $http({
				method: 'get',
				url: 'leerDiasDisponibles',
			});
			return (request.then(handleSuccess, handleError));
		}
		// Consulta CV
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
		// Registro de CV
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

		return ({
			getHorarios: getHorarios,
			saveCita: saveCita,
			// Registro de CV
			registrarFormacionProfesional: registrarFormacionProfesional,
			actualizarFormacionProfesional: actualizarFormacionProfesional,
			getFormacionProfesional: getFormacionProfesional
		});
  });
