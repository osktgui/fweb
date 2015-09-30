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
  		if (angular.isUndefined($scope.landing.skype) && $scope.variable.skype) setError('land-skype');
      if (angular.isUndefined($scope.landing.email) && ($scope.variable.llamada || $scope.variable.skype)) setError('land-email');
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
      angular.element('#land-schedule').empty();
      angular.element('#land-schedule').append('<option value disabled>Horario de Consulta</option>');
      var params={};            
      params['fechaCita']=angular.element('#land-date').val();
      $.ajax({
        data : params,
        type: "GET",
        url: "leerHorariosDisponibles",
        dataType: "json",
        success : function(data) 
        {   
          angular.element('land-schedule').empty();
          $.each(data,function(id,item){
            if(horarioRepetido(item.hora) && item.disponible){
              var _horario=timeFormat(item.hora);
              angular.element('#land-schedule').append('<option value="'+item.horarioDisponibleId+'">'+_horario+'</option>');              
            }
          })
        },
        error: function() 
        {       
          $window.alert("Error");

        }
      });

  	}
  	// Function to show inputs error
  	function setError(inputId){angular.element('#'+inputId).addClass('error');v_continuar=false;}
  	// Function to remove inputs error
  	$scope.rmvError = function(inputId) {
			angular.element('#'+inputId).removeClass('error');
     };
    // Function reservarCita()  
    function reservarCita(){
      var params={};            
      params['nombre']=$scope.landing.names;   
      if($scope.variable.llamada) params['metodoContacto']='llamada';   
      else if($scope.variable.skype) params['metodoContacto']='skype';   
      params['celular']=$scope.landing.phone;   
      params['skype']=$scope.landing.skype;   
      params['correo']=$scope.landing.email;    
      params['horario']=$scope.landing.schedule;   


      $.ajax({
        data : params,
        type: "GET",
        url: "registrarLead",
        dataType: "text",
        success : function(data) 
        {   
          if (data=="LeadRegistrado"){
            $window.alert("Se ha registrado satisfactoriamente.");
            // window.location.href = "/";
          }
          else{

          }
        },
        error: function() 
        {       
            $window.alert("Lo sentimos, el horario acaba de ser reservado.");
        }
      });    	
    }
    // Function time 12 h
    function timeFormat(time){
      var hour_i=parseInt(time.substring(0, 2));
      var minute_i=parseInt(time.substring(3, 5));
      var totalMinutes_i = (hour_i*60)+minute_i;
      var totalMinutes_f = totalMinutes_i+45;
      var hour_f = parseInt(totalMinutes_f/60);
      var minute_f = totalMinutes_f%60;
      return 'De '+ formatHour12(hour_i)+':'+dosCifras(minute_i)+' '+meridian(hour_i)+' hasta '+ formatHour12(hour_f)+':'+dosCifras(minute_f)+' '+meridian(hour_f);
      function meridian(hour_i){
        if (hour_i>12) return 'p.m.';
        else return 'a.m.';
      }
      function formatHour12(hour_i){
        if (hour_i>12) hour_i=hour_i-12;
        return dosCifras(hour_i);
      }
      function dosCifras(number){
        if (number<10) return '0' + number;
        else return number;
      }
    }
    // Función que evita listar horarios repetidos
    var horariosListados =[];
    function horarioRepetido(time){
      var hour=parseInt(time.substring(0, 2));
      var minute=parseInt(time.substring(3, 5));
      var totalMinutes = (hour*60)+minute;
      for(var i=0;i<horariosListados.length;i++)
      {
        if(totalMinutes==horariosListados[i]){
          return false;
          break;
        }
      }
      horariosListados.push(totalMinutes);
      return true;
    }
    // To change the background image in landing
    var myVar = setInterval(myTimer, 8000);
    var opacar = true
    function myTimer() {
        if (opacar) {
          angular.element('.landing-contact-bg-2').css('opacity','0');
          opacar = false
        }
        else
        {
          angular.element('.landing-contact-bg-2').css('opacity','1');
          opacar = true
        }
    }
  });
