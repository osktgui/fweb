'use strict';

/**
 * @ngdoc service
 * @name filiumApp.DataMaestra
 * @description
 * # DataMaestra
 * Service in the filiumApp.
 */
angular.module('filiumApp')
  .service('DataMaestra', function ($http, $q, pageConfig) {
    function getTipoDocumento(){
      var request = $http({
        method: 'get',
        url: 'getTipoDocumento'
      });
      return (request.then(handleSuccess, handleError));
    }
    function getSexo(){
      var request = $http({
        method: 'get',
        url: 'getSexo'
      });
      return (request.then(handleSuccess, handleError));
    }
    function getTipoRegistro(){
      var request = $http({
        method: 'get',
        url: 'getTipoRegistro'
      });
      return (request.then(handleSuccess, handleError));
    }
    function getRoles(){
      var request = $http({
        method: 'get',
        url: 'getRoles'
      });
      return (request.then(handleSuccess, handleError));
    }
    function getEstadoCitas(){
      var request = $http({
        method: 'get',
        url: 'getEstadoCitas'
      });
      return (request.then(handleSuccess, handleError));
    }
    function getTipoCita(){
      var request = $http({
        method: 'get',
        url: 'getTipoCita'
      });
      return (request.then(handleSuccess, handleError));
    }
    function getRubroEmpresas(){
      var request = $http({
        method: 'get',
        url: 'getRubroEmpresas'
      });
      return (request.then(handleSuccess, handleError));
    }
    function getTipoCodigoEmpresa(){
      var request = $http({
        method: 'get',
        url: 'getTipoCodigoEmpresa'
      });
      return (request.then(handleSuccess, handleError));
    }
    function getGradoAcademico(){
      var request = $http({
        method: 'get',
        url: 'getGradoAcademico'
      });
      return (request.then(handleSuccess, handleError));
    }
    function getIdiomas(){
      var request = $http({
        method: 'get',
        url: 'getIdiomas'
      });
      return (request.then(handleSuccess, handleError));
    }
    function getNivelIdiomas(){
      var request = $http({
        method: 'get',
        url: 'getNivelIdiomas'
      });
      return (request.then(handleSuccess, handleError));
    }
    function getHabilidades(){
      var request = $http({
        method: 'get',
        url: 'getHabilidades'
      });
      return (request.then(handleSuccess, handleError));
    }
    function getOrganizaciones(){
      var request = $http({
        method: 'get',
        url: 'getOrganizaciones'
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
      getTipoDocumento: getTipoDocumento,
      getSexo: getSexo,
      getTipoRegistro: getTipoRegistro,
      getRoles: getRoles,
      getEstadoCitas: getEstadoCitas,
      getTipoCita: getTipoCita,
      getRubroEmpresas: getRubroEmpresas,
      getTipoCodigoEmpresa: getTipoCodigoEmpresa,
      getGradoAcademico: getGradoAcademico,
      getIdiomas: getIdiomas,
      getNivelIdiomas: getNivelIdiomas,
      getHabilidades: getHabilidades,
      getOrganizaciones: getOrganizaciones
		});
  });




