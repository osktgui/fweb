'use strict';

/**
 * @ngdoc service
 * @name rimacActualizacionDatosApp.pageConfig
 * @description
 * # pageConfig
 * Factory in the rimacActualizacionDatosApp.
 */
angular.module('filiumApp')
  .factory('pageConfig', function () {
    return {
        //baseUrl: "/buscador-seguros-de-salud/" //produccion
        baseUrl: '' //local
    };
  });