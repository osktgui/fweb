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
			getOrganizaciones: getOrganizaciones
		});
  });
