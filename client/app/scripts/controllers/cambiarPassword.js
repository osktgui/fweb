'use strict';
/**
 * @ngdoc function
 * @name filiumApp.controller:LandingctrlCtrl
 * @description
 * # LandingctrlCtrl
 * Controller of the filiumApp
 */
angular.module('filiumApp')
  .controller('cambiarPasswordCtrl',function ($rootScope, $scope, $window, filiumServices) {
       $scope.cambiarPassword=function(formCambiarPassword){
       		console.log("entra");	
       }
  });
