'use strict';

/**
 * @ngdoc directive
 * @name filiumApp.directive:nameValidation
 * @description
 * # nameValidation
 */
angular.module('filiumApp')
  .directive('onlynumber', function () {
    return {
    	require: 'ngModel',
    	link: function(scope, element, attrs, modelCtrl) {
    	modelCtrl.$parsers.push(function (inputValue) {
           if (inputValue === undefined) {
           	return '';
           } 
           var transformedInput = inputValue.replace(/[^0-9]/g, ''); 
           if (transformedInput !== inputValue) {
              modelCtrl.$setViewValue(transformedInput);
              modelCtrl.$render();
           }         

           return transformedInput;         
      });
     }
   	};
  });
