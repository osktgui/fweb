'use strict';

/**
 * @ngdoc function
 * @name filiumApp.controller:LandingctrlCtrl
 * @description
 * # LandingctrlCtrl
 * Controller of the filiumApp
 */
angular.module('filiumApp')

  .controller('LandingCtrl',function ($rootScope, $scope, $window,filiumServices) {
  	$scope.landing = {};
  	$scope.variable = {};
    $('#landDate').change(function() {
      var params={};            
      params.fechaCita=angular.element('#landDate').val();
       // window.alert(params.fechaCita);
      angular.element('#landSchedule').empty();
      angular.element("#landSchedule").prop('disabled', 'disabled');
      angular.element('#landSchedule').append('<option value="" disabled selected>Cargando horarios ...</option>'); 
      filiumServices.getHorarios(params).then(function(response){
        angular.element('#landSchedule').empty();
        angular.element("#landSchedule").removeAttr('disabled');
        angular.element('#landSchedule').append('<option value="" disabled selected>Horarios Disponibles</option>'); 
        // Limpiamos el arreglo que se encarga de limpiar los horarios que se repiten
        horariosListados =[];
        // Se llena el combo box de horarios disponibles
        angular.element.each(response,function(id,item){
            if(horarioRepetido(item.hora) && item.disponible){
              var _horario=timeFormat(item.hora);
              angular.element('#landSchedule').append('<option value="'+item.horarioDisponibleId+'">'+_horario+'</option>');              
            }
          });
      });
    });



    $scope.reservarCita = function(form){
      if(form.$invalid){
        return;
      }
      if(!$scope.variable.terminos){
        angular.element('#landing-terminos-condiciones').addClass('error');
      }
      else{
        angular.element('#landing-terminos-condiciones').removeClass('error');
        var params={};            
        params.nombre=$scope.landing.names;   
        if($scope.variable.llamada) {params.metodoContacto='llamada'; }  
        else if($scope.variable.skype) {params.metodoContacto='skype'; }
        params.celular=$scope.landing.phone;   
        params.skype=$scope.landing.skype;   
        params.correo=$scope.landing.email;    
        params.horario=$scope.landing.schedule; 
        filiumServices.saveCita(params).then(function(response){
          if (response==='LeadRegistrado'){angular.element('#SuccessModal').modal({keyboard: false,backdrop: 'static'});}
          else if (response==='HorarioNoDisponible'){angular.element('#ErrorModal').modal();}
        });
      }
    };


    $scope.reloadRoute = function() {
       $window.location.reload();
    }

    // Function time 12 h
    function timeFormat(time){
      function meridian(hourI){
        if (hourI>12) {return 'p.m.';}
        else {return 'a.m.';}
      }
      function formatHour12(hourI){
        if (hourI>12) {hourI=hourI-12;}
        return dosCifras(hourI);
      }
      function dosCifras(number){
        if (number<10) {return '0' + number;}
        else {return number;}
      }
      var hourI=parseInt(time.substring(0, 2));
      var minuteI=parseInt(time.substring(3, 5));
      var totalMinutesI = (hourI*60)+minuteI;
      var totalMinutesF = totalMinutesI+45;
      var hourF = parseInt(totalMinutesF/60);
      var minuteF = totalMinutesF%60;
      return 'De '+ formatHour12(hourI)+':'+dosCifras(minuteI)+' '+meridian(hourI)+' hasta '+ formatHour12(hourF)+':'+dosCifras(minuteF)+' '+meridian(hourF);
    }
    // Función que evita listar horarios repetidos
    var horariosListados =[];
    function horarioRepetido(time){
      var hour=parseInt(time.substring(0, 2));
      var minute=parseInt(time.substring(3, 5));
      var totalMinutes = (hour*60)+minute;
      for(var i=0;i<horariosListados.length;i++)
      {
        if(totalMinutes===horariosListados[i]){
          return false;
        }
      }
      horariosListados.push(totalMinutes);
      return true;
    }
    // Cambio automático del fondo de landing
    function myTimer() {
        if (opacar) {
          angular.element('.landing-contact-bg-2').css('opacity','0');
          opacar = false;
        }
        else
        {
          angular.element('.landing-contact-bg-2').css('opacity','1');
          opacar = true;
        }
    }
    var myVar = setInterval(myTimer, 8000);
    var opacar = true;
  

  });
