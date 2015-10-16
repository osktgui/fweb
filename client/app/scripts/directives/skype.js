'use strict';

/**
 * @ngdoc directive
 * @name filiumApp.directive:skype
 * @description
 * # skype
 */
angular.module('filiumApp')
  .directive('skype', function () {
    return {
    	require: 'ngModel',
    	link: function(scope, element, attrs, modelCtrl) {
	    	modelCtrl.$parsers.push(function (inputValue) {   
          if (inputValue === undefined) {
          	modelCtrl.$setValidity('skype', true);
          	return '';
          }
          var num = inputValue.replace(/[^A-Za-z0-9.]/g, ''); 
          if (num !== inputValue) {
            modelCtrl.$setViewValue(num);
            modelCtrl.$render();
            return false;
          } 
          return inputValue;        
	      });
      }
    };
  });

