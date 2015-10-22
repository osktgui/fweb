'use strict';
/**
 * @ngdoc function
 * @name filiumApp.controller:LandingctrlCtrl
 * @description
 * # LandingctrlCtrl
 * Controller of the filiumApp
 */
angular.module('filiumApp')
  .controller('PsicologoCitaCtrl',function ($rootScope, $scope, $window,filiumServices) {
  	 
     //calendario
    $scope.YSelected=0;
    $scope.MSelected=0;
    $scope.DSelected=0;
    $scope.horariosDisponibles=[{
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2015-10-28T02:00:00'
                }];

    $scope.eventSources = [];
    $scope.uiConfig = {
      calendar:{
        header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            selectable: true,
            selectHelper: true,
            select: function(start, end) {
                    $("#myModal").modal();
                    $scope.tituloPopup=start.format("dddd, DD MMMM");
                    $scope.YSelected=start._d.getFullYear();
                    $scope.MSelected=start._d.getMonth();
                    $scope.DSelected=start._d.getDate();
                /*var title = prompt('Evento:');
                var eventData;
                if (title) {
                    eventData = {
                        title: title,
                        start: start,
                        end: end
                    };
                    $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                }
                $('#calendar').fullCalendar('unselect');
                */
                },
            lang: 'es',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: $scope.horariosDisponibles
        //dayClick: $scope.alertEventOnClick,
        //eventDrop: $scope.alertOnDrop,
        //eventResize: $scope.alertOnResize
      }
    };
    //fin calendario
    $scope.horas=[
        {id:1,text:'12:00 a.m'},
        {id:2,text:'01:00 a.m.'},
        {id:3,text:'02:00 a.m.'},
        {id:4,text:'03:00 a.m.'},
        {id:5,text:'04:00 a.m.'},
        {id:6,text:'05:00 a.m.'},
        {id:7,text:'06:00 a.m.'},
        {id:8,text:'07:00 a.m.'},
        {id:9,text:'08:00 a.m.'},
        {id:10,text:'09:00 a.m.'},
        {id:11,text:'10:00 a.m.'},
        {id:12,text:'11:00 a.m.'},
        {id:13,text:'12:00 p.m.'},
        {id:14,text:'01:00 p.m.'},
        {id:15,text:'02:00 p.m.'},
        {id:16,text:'03:00 p.m.'},
        {id:17,text:'04:00 p.m.'},
        {id:18,text:'05:00 p.m.'},
        {id:19,text:'06:00 p.m.'},
        {id:20,text:'07:00 p.m.'},
        {id:21,text:'08:00 p.m'},
        {id:22,text:'09:00 p.m'},
        {id:23,text:'10:00 p.m'},
        {id:24,text:'11:00 p.m'}];

    $scope.horarios=[
    { id:1  ,hIni:'12:00 a.m.', hFin:'12:45 a.m.'},
    { id:2  ,hIni:'01:00 a.m.', hFin:'01:45 a.m.'},
    { id:3  ,hIni:'02:00 a.m.', hFin:'02:45 a.m.'},
    { id:4  ,hIni:'03:00 a.m.', hFin:'03:45 a.m.'},
    { id:5  ,hIni:'04:00 a.m.', hFin:'04:45 a.m.'},
    { id:6  ,hIni:'05:00 a.m.', hFin:'05:45 a.m.'},
    { id:7  ,hIni:'06:00 a.m.', hFin:'06:45 a.m.'},
    { id:8  ,hIni:'07:00 a.m.', hFin:'07:45 a.m.'},
    { id:9  ,hIni:'08:00 a.m.', hFin:'08:45 a.m.'},
    { id:10 ,hIni:'09:00 a.m.', hFin:'09:45 a.m.'},
    { id:11 ,hIni:'10:00 a.m.', hFin:'10:45 a.m.'},
    { id:12 ,hIni:'11:00 a.m.', hFin:'11:45 a.m.'},
    { id:13 ,hIni:'12:00 p.m.', hFin:'12:45 p.m.'},
    { id:14 ,hIni:'01:00 p.m.', hFin:'01:45 p.m.'},
    { id:15 ,hIni:'02:00 p.m.', hFin:'02:45 p.m.'},
    { id:16 ,hIni:'03:00 p.m.', hFin:'03:45 p.m.'},
    { id:17 ,hIni:'04:00 p.m.', hFin:'04:45 p.m.'},
    { id:18 ,hIni:'05:00 p.m.', hFin:'05:45 p.m.'},
    { id:19 ,hIni:'06:00 p.m.', hFin:'06:45 p.m.'},
    { id:20 ,hIni:'07:00 p.m.', hFin:'07:45 p.m.'},
    { id:21 ,hIni:'08:00 p.m.', hFin:'08:45 p.m.'},
    { id:22 ,hIni:'09:00 p.m.', hFin:'09:45 p.m.'},
    { id:23 ,hIni:'10:00 p.m.', hFin:'10:45 p.m.'},
    { id:24 ,hIni:'11:00 p.m.', hFin:'11:45 p.m.'}
    ];

    

    $scope.agregando=function(inicio,fin){
        for (var a=inicio.id-1 ; a<fin.id-1; a++){
            //console.log($scope.horarios[a].id,$scope.horarios[a].hIni,$scope.horarios[a].hFin);
            //console.log($scope.YSelected,$scope.MSelected,$scope.DSelected,$scope.horarios[a].id,0,0);
            $scope.horariosDisponibles.push(
                {
                    id:$scope.horarios[a].id,
                    hIni:$scope.horarios[a].hIni,
                    hFin:$scope.horarios[a].hFin,
                    title:'Libre',
                    start: new Date($scope.YSelected,$scope.MSelected,$scope.DSelected,$scope.horarios[a].id,0,0),
                    fin:new Date($scope.YSelected,$scope.MSelected,$scope.DSelected,$scope.horarios[a].id,45,0)
                }
            );
        }
        
        /*$scope.horariosDisponibles.push({
                    id:1,
                    title: 'Libre',
                    start: new Date($scope.YSelected,$scope.MSelected,$scope.DSelected,1,0,0)
                });*/
        //console.log($scope.horariosDisponibles);
        //console.log(Date($scope.YSelected,$scope.MSelected,$scope.DSelected,$scope.horarios[a],0,0));
    };

  });
