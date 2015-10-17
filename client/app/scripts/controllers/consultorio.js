'use strict';

/**
 * @ngdoc function
 * @name filiumApp.controller:ConsultorioCtrl
 * @description
 * # ConsultorioCtrl
 * Controller of the filiumApp
 */
angular.module('filiumApp')
  .controller('ConsultorioCtrl', function ($scope,formatDate) {


  // ---------------- Experiencia Laboral -----------------------------------------------


    $scope.editarLabores = function(labor){
      // OJO!!! Con el tipo de datos que se está pasando
      $scope.submittedLaboral=false;
      $scope.mostrarForm=true;
      $scope.editando=true;
      $scope.registrando=false;
      $scope.workCenter= labor.organizacionId;
      $scope.job= labor.nombreCargo;
      $scope.jobDescription= labor.descripcion;
      angular.element('#fechaInicioLaboral').val(formatDate.getShortDate(labor.fechaInicio));
      angular.element('#fechaFinLaboral').val(formatDate.getShortDate(labor.fechaFin));
      $scope.checkLab= labor.laborandoActualmente;
      angular.element(".filium-control").addClass('selectActive');
    }

    $scope.agregarLabores = function(){
      // OJO!!! Con el tipo de datos que se está pasando

      $scope.submittedLaboral=false;
      $scope.mostrarForm=true;
      $scope.editando=false;
      $scope.registrando=true;

      $scope.workCenter= "";
      $scope.job= "";
      $scope.jobDescription= "";
      angular.element('#fechaInicioLaboral').val("");
      angular.element('#fechaFinLaboral').val("");
      $scope.checkLab= false
      angular.element(".filium-control").removeClass('selectActive');
    }

    $scope.matrizLaborales = [{
      // Datos de Tabla específica
      experienciaLaboralId: '1',
      personaId: '1',
      organizacionId: '2',
      nombreCargo: 'Diseñador Web',
      descripcion: 'Diseño y Programación de Sitios Web.',
      fechaInicio: formatDate.getCompleteDate('2013-07-01'),
      laborandoActualmente: false,
      fechaFin: formatDate.getCompleteDate('2015-06-30'),
      // Datos de Tabla Maestra
      organizacionName: 'DataSystem PC'
    },{
      // Datos de Tabla específica
      experienciaLaboralId: '1',
      personaId: '1',
      organizacionId: '2',
      nombreCargo: 'Analista - Programador',
      descripcion: 'Analisis y Desarrollo del Software de la Institución.',
      fechaInicio: formatDate.getCompleteDate('2013-07-01'),
      laborandoActualmente: false,
      fechaFin: formatDate.getCompleteDate('2015-06-30'),
      // Datos de Tabla Maestra
      organizacionName: 'Universidad Peruana Los Andes'
    },{
      // Datos de Tabla específica
      experienciaLaboralId: '1',
      personaId: '1',
      organizacionId: '2',
      nombreCargo: 'Analista - Programador',
      descripcion: 'Analisis y Desarrollo del Software de la Institución.',
      fechaInicio: formatDate.getCompleteDate('2013-07-01'),
      laborandoActualmente: true,
      fechaFin: formatDate.getCompleteDate('2015-06-30'),
      // Datos de Tabla Maestra
      organizacionName: 'Xurface'
    }];


  // ---------------- Formación Profesional -----------------------------------------------
    $scope.editarEstudios = function(estudio){
      // OJO!!! Con el tipo de datos que se está pasando
      $scope.submittedProfessionalEducation=false;
      $scope.mostrarForm=true;
      $scope.editando=true;
      $scope.registrando=false;
      $scope.studyCenter=estudio.organizacionId;
      $scope.academicDegree=estudio.gradoAcademicoId;
      $scope.careerName=estudio.nombreCarrera;
      $scope.checkMen=estudio.incluirMencion;$scope.vMencion=estudio.incluirMencion;
      $scope.mentionName=estudio.nombreMencion;
      angular.element('#fechaInicio').val(formatDate.getShortDate(estudio.fechaInicio));
      $scope.checkEst=!estudio.estudiandoActualmente;$scope.estudiandoActual=estudio.estudiandoActualmente;
      angular.element('#fechaFin').val(formatDate.getShortDate(estudio.fechaFin));
      angular.element(".filium-control").addClass('selectActive');
    }

    $scope.agregarEstudios = function(){
      // OJO!!! Con el tipo de datos que se está pasando
      $scope.submittedProfessionalEducation=false;
      $scope.mostrarForm=true;
      $scope.editando=false;
      $scope.registrando=true;
      $scope.studyCenter="";
      $scope.academicDegree="";
      $scope.careerName="";
      $scope.checkMen=false;$scope.vMencion=false;
      $scope.mentionName="";
      angular.element('#fechaInicio').val("");
      $scope.checkEst=false;$scope.estudiandoActual=true;
      angular.element('#fechaFin').val("");
      angular.element(".filium-control").removeClass('selectActive');
    }

    $scope.matrizEstudios = [{
      // Datos de Tabla específica
      formacionProfesionalId: '1',
      personaId: '1',
      organizacionId: '1',
      gradoAcademicoId: '1',
      nombreCarrera: 'Ingeniería de Sistemas y Computacion',
      incluirMencion: false,
      nombreMencion:'',
      fechaInicio : formatDate.getCompleteDate('2008-04-15'),
      estudiandoActualmente: true,
      fechaFin: formatDate.getCompleteDate('2012-12-31'),
      comentario: '',
      // Datos de Tabla Maestra
      organizacionName: 'Universidad Peruana Los Andes',
      gradoAcademicoName: 'Título Profesional'
    },
    {
      // Datos de Tabla específica
      formacionProfesionalId: '2',
      personaId: '1',
      organizacionId: '1',
      gradoAcademicoId: '1',
      nombreCarrera: 'Ingeniería de Sistemas',
      incluirMencion: true,
      nombreMencion:'Mención en Gestión de Sistemas Empresariales',
      fechaInicio : formatDate.getCompleteDate('2015-04-15'),
      estudiandoActualmente: true,
      fechaFin: formatDate.getCompleteDate('2016-06-30'),
      comentario: '',
      // Datos de Tabla Maestra
      organizacionName: 'Universidad Nacional del Centro del Perú',
      gradoAcademicoName: 'Maestríal'
    },
    {
      // Datos de Tabla específica
      formacionProfesionalId: '3',
      personaId: '1',
      organizacionId: '1',
      gradoAcademicoId: '1',
      nombreCarrera: 'Ingeniería de Sistemas',
      incluirMencion: false,
      nombreMencion:'',
      fechaInicio : formatDate.getCompleteDate('2017-07-01'),
      estudiandoActualmente: false,
      fechaFin: formatDate.getCompleteDate(''),
      comentario: '',
      // Datos de Tabla Maestra
      organizacionName: 'Hardvard University',
      gradoAcademicoName: 'Doctorado'
    }];

  });
