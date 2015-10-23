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
    $scope.libre  ='#257e4a';
    $scope.ocupado='#555e4a';

    $scope.YSelected=0;
    $scope.MSelected=0;
    $scope.DSelected=0;
    $scope.horariosDisponibles=[
        {
            end: new Date(2015,9,22,4,45,0,0),
            hFin: "04:45 a.m.",
            hIni: "04:00 a.m.",
            id: 5,
            identificador: "10/22/2015-5",
            start: new Date(2015,9,22,4,0,0,0),
            title: "Ocupado",
            color: $scope.ocupado
        },
        {
            end: new Date(2015,9,22,5,45,0,0),
            hFin: "05:45 a.m.",
            hIni: "05:00 a.m.",
            id: 6,
            identificador: "10/22/2015-6",
            start: new Date(2015,9,22,5,0,0,0),
            title: "Libre",
            color: $scope.libre
        },
        {
            end: new Date(2015,9,22,7,45,0,0),
            hFin: "07:45 a.m.",
            hIni: "07:00 a.m.",
            id: 8,
            identificador: "10/22/2015-8",
            start: new Date(2015,9,22,7,0,0,0),
            title: "Libre",
            color: $scope.libre
        },
        {
            end: new Date(2015,09,22,8,45,0,0),
            hFin: "08:45 a.m.",
            hIni: "08:00 a.m.",
            id: 9,
            identificador: "10/22/2015-9",
            start: new Date(2015,9,22,8,0,0,0),
            title: "Libre",
            color: $scope.libre
        }
    ];
    $scope.eventosDia=[];
    $scope.eventSources = [];
    $scope.uiConfig = {
      calendar:{
        header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            selectable: true,

            //selectHelper: true,
            select: function(start, end) {
                //console.log(start, end);
                $scope.YSelected=end._d.getFullYear();
                $scope.MSelected=end._d.getMonth();
                $scope.DSelected=end._d.getDate();
                $("#myModal").modal();
                $scope.tituloPopup=start.format("dddd, DD MMMM");
                selEventosDiaSel(end._d);
                },
            lang: 'es',
            editable: false,
            eventLimit: true,
            events: $scope.horariosDisponibles
        //dayClick: $scope.alertEventOnClick,
        //eventDrop: $scope.alertOnDrop,
        //eventResize: $scope.alertOnResize
      }
    };
    //fin calendario
    $scope.horas=[
        {id:1,text:'12:00 a.m',isinuse:true},
        {id:2,text:'01:00 a.m.',isinuse:true},
        {id:3,text:'02:00 a.m.',isinuse:true},
        {id:4,text:'03:00 a.m.',isinuse:true},
        {id:5,text:'04:00 a.m.',isinuse:true},
        {id:6,text:'05:00 a.m.',isinuse:true},
        {id:7,text:'06:00 a.m.',isinuse:true},
        {id:8,text:'07:00 a.m.',isinuse:true},
        {id:9,text:'08:00 a.m.',isinuse:true},
        {id:10,text:'09:00 a.m.',isinuse:true},
        {id:11,text:'10:00 a.m.',isinuse:true},
        {id:12,text:'11:00 a.m.',isinuse:true},
        {id:13,text:'12:00 p.m.',isinuse:true},
        {id:14,text:'01:00 p.m.',isinuse:true},
        {id:15,text:'02:00 p.m.',isinuse:true},
        {id:16,text:'03:00 p.m.',isinuse:true},
        {id:17,text:'04:00 p.m.',isinuse:true},
        {id:18,text:'05:00 p.m.',isinuse:true},
        {id:19,text:'06:00 p.m.',isinuse:true},
        {id:20,text:'07:00 p.m.',isinuse:true},
        {id:21,text:'08:00 p.m' ,isinuse:true},
        {id:22,text:'09:00 p.m' ,isinuse:true},
        {id:23,text:'10:00 p.m' ,isinuse:true},
        {id:24,text:'11:00 p.m' ,isinuse:true}
        ];

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
    
    //selecciona eventos del dia para el popup
    function selEventosDiaSel(dia){
        $scope.eventosDia = $.grep($scope.horariosDisponibles, function(e) { return e.start.toLocaleDateString() === (new Date(dia)).toLocaleDateString()});
    }

    $scope.agregando=function(inicio,fin){
        for (var i=inicio.id-1 ; i<fin-1; i++){
            //identificando si ya se encuentra en el array esta hora
            var a=$.grep($scope.horariosDisponibles, function(e) {
                return e.identificador === ((new Date($scope.YSelected,$scope.MSelected,$scope.DSelected)).toLocaleDateString()+'-'+$scope.horarios[i].id)
            });
            //si no se encuentra se agrega
            if (a.length===0)
            {
                $scope.horariosDisponibles.push(
                    {
                        id:$scope.horarios[i].id,
                        identificador:(new Date($scope.YSelected,$scope.MSelected,$scope.DSelected)).toLocaleDateString()+'-'+$scope.horarios[i].id,
                        hIni:$scope.horarios[i].hIni,
                        hFin:$scope.horarios[i].hFin,
                        title:'Libre',
                        start: new Date($scope.YSelected,$scope.MSelected,$scope.DSelected,$scope.horarios[i].id-1,0,0),
                        end: new Date($scope.YSelected,$scope.MSelected,$scope.DSelected,$scope.horarios[i].id-1,45,0)
                    }
                );
            }
        }
        selEventosDiaSel(new Date($scope.YSelected,$scope.MSelected,$scope.DSelected));
        console.log($scope.horariosDisponibles);
    };
    
    $scope.priComboSelected=function(hora){
        angular.forEach($scope.horas, function(e){
            e.isinuse=(e.id>hora.id);
        });
    };
    
    $scope.removeHorario=function(horarioId){
        for (var i = 0; i < $scope.horariosDisponibles.length; i++) {
            if ($scope.horariosDisponibles[i].identificador===horarioId){
                $scope.horariosDisponibles.splice(i,1);
            }
        };
        selEventosDiaSel(new Date($scope.YSelected,$scope.MSelected,$scope.DSelected));
    };
  });
