'use strict';

/**
 * @ngdoc directive
 * @name filiumApp.directive:telefono
 * @description
 * # telefono
 */
angular.module('filiumApp')
  .directive('telefono', function () {
    return {
    	require: 'ngModel',
    	link: function(scope, element, attrs, modelCtrl) {
	    	modelCtrl.$parsers.push(function (inputValue) {   
          if (inputValue === undefined) {
          	modelCtrl.$setValidity('telefono', true);
          	return '';
          }
          var num = inputValue.replace(/[^0-9]/g, ''); 
          if (num !== inputValue) {
            modelCtrl.$setViewValue(num);
            modelCtrl.$render();
            return false;
          } 
          var transformedInput = /(\d)\1{8}/g.test(inputValue); 
          var celularValido = /^9/.test(inputValue); 
          modelCtrl.$setValidity('telefono', !transformedInput && celularValido && inputValue.length === 9);
          return inputValue;        
	      });
      }
    };
  });




