'use strict';

/**
 * @ngdoc function
 * @name filiumApp.controller:EdicioncurriculumCtrl
 * @description
 * # EdicioncurriculumCtrl
 * Controller of the filiumApp
 */
angular.module('filiumApp')
  .controller('EdicioncurriculumCtrl', function ($scope,formatDate) {

    $scope.editarEstudios = function(estudio){
      // alert(estudio.institucion);

      // OJO!!! Con el tipo de datos que se está pasando
        // Problemas con los SELECT y los CHECKBOX

      $scope.institucion=estudio.studyCenter;
      $scope.grado=estudio.academicDegree;
      $scope.careerName=estudio.nomCarrera;
      $scope.activMencion=estudio.checkMen;
      $scope.mentionName=estudio.nomMencion;
      $scope.fecInicio=estudio.startDate;
      $scope.activFechaFin=estudio.checkEst;
      $scope.fecFin=estudio.endDate;
    }




    $scope.matrizEstudios = [{
      institucion: 'Universidad Peruana Los Andes',
      grado: 'Título Profesional',
      nomCarrera: 'Ingeniería de Sistemas y Computacion',
      activMencion: false,
      nomMencion:'',
      fecInicio : formatDate.getCompleteDate('2008-04-15'),
      activFechaFin: true,
      fecFin: formatDate.getCompleteDate('2012-12-31')
    },
    {
      institucion: 'Universidad Nacional del Centro del Perú',
      grado: 'Maestría',
      nomCarrera: 'Ingeniería de Sistemas',
      activMencion: true,
      nomMencion:'Mención en Gestión de Sistemas Empresariales',
      fecInicio : formatDate.getCompleteDate('2015-04-15'),
      activFechaFin: true,
      fecFin: formatDate.getCompleteDate('2016-06-30')
    },
    {
      institucion: 'Hardvard University',
      grado: 'Doctorado',
      nomCarrera: 'Ingeniería de Sistemas',
      activMencion: false,
      nomMencion:'',
      fecInicio : formatDate.getCompleteDate('2017-07-01'),
      activFechaFin: false,
      fecFin: formatDate.getCompleteDate('')
    }];





  });
