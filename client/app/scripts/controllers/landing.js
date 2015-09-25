'use strict';

/**
 * @ngdoc function
 * @name filiumApp.controller:LandingctrlCtrl
 * @description
 * # LandingctrlCtrl
 * Controller of the filiumApp
 */
angular.module('filiumApp')

  .controller('LandingCtrl',function ($scope, $window) {
  	$scope.landing = {}
  	$scope.variable = {}
  	// Show schedule input when the date is selected
  	angular.element( '#land-date' ).blur(function() {	if (angular.element('#land-date').val()!==''){ loadSchedule();}	});
  	// Show schedule input when the date is changed
  	angular.element('#land-schedule').change(function(){angular.element('#land-schedule').removeClass('landing-select');});
  	//Variable que evalúa si se puede continuar
  	var v_continuar=true;
  	// Action of "Reservar CIta" button
		$scope.reservarCita = function() {
			v_continuar=true;
  		if (angular.isUndefined($scope.landing.names)) setError('land-name');
  		if (!$scope.variable.llamada && !$scope.variable.skype) setError('landing-form-contact-way-text');
  		if (angular.isUndefined($scope.landing.phone) && $scope.variable.llamada) setError('land-phone');
  		if (angular.isUndefined($scope.landing.email) && $scope.variable.skype) setError('land-email');
  		if (angular.isUndefined($scope.landing.date) && ($scope.variable.llamada || $scope.variable.skype)) setError('land-date');
  		if (angular.isUndefined($scope.landing.schedule) && !angular.isUndefined($scope.landing.date)) setError('land-schedule');
  		if(v_continuar)
  		{
  			if(!$scope.variable.terminos){$('#landing-terminos-condiciones').addClass('error');}
  			else{reservarCita()}
  		}
  	};
  	// Function to load schedule input
  	function loadSchedule(){
  		angular.element('.schedule-hidden').css('display','inline-block');
  		angular.element('.schedule-hidden').focus();
  		angular.element('#land-schedule').val('');
  		angular.element('#land-schedule').addClass('landing-select');
  		angular.element('#land-date').removeClass('error');
  	}
  	// Function to show inputs error
  	function setError(inputId){angular.element('#'+inputId).addClass('error');v_continuar=false;}
  	// Function to remove inputs error
  	$scope.rmvError = function(inputId) {
			angular.element('#'+inputId).removeClass('error');
     };
    // Function reservarCita()  
    function reservarCita(){
     	$window.alert("ReservarCita");
     }
  });
