'use strict';

/**
 * @ngdoc directive
 * @name filiumApp.directive:address
 * @description
 * # address
 */
angular.module('filiumApp')
  .directive('address', function () {
    return {
      require: 'ngModel',
      link: function(scope, element, attrs, modelCtrl) {
      modelCtrl.$parsers.push(function (inputValue) {
           if (inputValue === undefined) {
            return '';
           } 
           var transformedInput = inputValue.replace(/[^A-Za-z0-9#° ]/g, ''); 
           if (transformedInput !== inputValue) {
              modelCtrl.$setViewValue(transformedInput);
              modelCtrl.$render();
           }         

           return transformedInput;         
      });
     }
    };
  });