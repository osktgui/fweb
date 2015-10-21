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


  // ---------------- Certificaciones -----------------------------------------------
    $scope.editarCertificados = function(certificado){
      $scope.submittedCertificacion=false;
      $scope.mostrarForm=true;
      $scope.editando=true;
      $scope.registrando=false;

      $scope.certifTitle=certificado.tituloCertificacion;
      angular.element('#fechaCertif').val(formatDate.getShortDate(certificado.fechaCertificacion));
      $scope.certifCenter=certificado.organizacionId;
      $scope.certifDescription=certificado.descripcion;
      angular.element(".filium-control").addClass('selectActive');
    }
    $scope.agregarCertificados = function(){
      $scope.submittedCertificacion=false;
      $scope.mostrarForm=true;
      $scope.editando=false;
      $scope.registrando=true;
      $scope.certifTitle="";
      angular.element('#fechaCertif').val("");
      $scope.certifCenter="";
      $scope.certifDescription="";
      angular.element(".filium-control").removeClass('selectActive');
    }


    $scope.matrizCertificaciones = [{
      // Datos de Tabla Específica
      certificacionObtenidaId: '1',
      personaId: '2',
      tituloCertificacion: 'Experto en Diseño Web',
      fechaCertificacion: formatDate.getCompleteDate('2012-12-31'),
      organizacionId: '1',
      descripcion: 'Experto en el diseño de Portales Web y Aplicaciones.',
      // Datos de Tabla Maestra
      organizacionName: 'Centro de Estudios Xurface'
    },{
      // Datos de Tabla Específica
      certificacionObtenidaId: '1',
      personaId: '2',
      tituloCertificacion: 'Experto en Diseño Web',
      fechaCertificacion: formatDate.getCompleteDate('2012-12-31'),
      organizacionId: '1',
      descripcion: 'Experto en el diseño de Portales Web y Aplicaciones.',
      // Datos de Tabla Maestra
      organizacionName: 'Centro de Estudios Xurface'
    },{
      // Datos de Tabla Específica
      certificacionObtenidaId: '1',
      personaId: '2',
      tituloCertificacion: 'Experto en Diseño Web',
      fechaCertificacion: formatDate.getCompleteDate('2012-12-31'),
      organizacionId: '1',
      descripcion: 'Experto en el diseño de Portales Web y Aplicaciones.',
      // Datos de Tabla Maestra
      organizacionName: 'Centro de Estudios Xurface'
    }];

  // ---------------- Idiomas -----------------------------------------------
    $scope.editarIdiomas = function(idiomas){
      $scope.submittedIdioma=false;
      $scope.mostrarForm=true;
      $scope.editando=true;
      $scope.registrando=false;
      $scope.lernedLanguage=idiomas.idiomaId;
      $scope.languageLevel=idiomas.nivelIdiomaId;
      angular.element(".filium-control").addClass('selectActive');
    }
    $scope.agregarIdiomas = function(){
      $scope.submittedIdioma=false;
      $scope.mostrarForm=true;
      $scope.editando=false;
      $scope.registrando=true;
      $scope.lernedLanguage="";
      $scope.languageLevel="";
      angular.element(".filium-control").removeClass('selectActive');
    }

    $scope.matrizIdiomas = [{
      // Datos de Tabla Específica
      conocimientoIdiomaId: '1',
      personaId: '2',
      idiomaId: '2',
      nivelIdiomaId: '3',
      // Datos de Tabla Maestra
      idiomaName: 'Inglés',
      nivelIdiomaName: 'Avanzado'
    },{
      // Datos de Tabla Específica
      conocimientoIdiomaId: '2',
      personaId: '2',
      idiomaId: '2',
      nivelIdiomaId: '3',
      // Datos de Tabla Maestra
      idiomaName: 'Francés',
      nivelIdiomaName: 'Avanzado'
    },{
      // Datos de Tabla Específica
      conocimientoIdiomaId: '3',
      personaId: '2',
      idiomaId: '2',
      nivelIdiomaId: '3',
      // Datos de Tabla Maestra
      idiomaName: 'Italiano',
      nivelIdiomaName: 'Avanzado'
    }];

  // ---------------- Habilidades -----------------------------------------------
    $scope.editarHabilidades = function(habilidad){
      $scope.submittedHabilidad=false;
      $scope.mostrarForm=true;
      $scope.editando=true;
      $scope.registrando=false;
      $scope.abilityValue = habilidad.habilidadId;
      $scope.abilitiesDescription = habilidad.descripcion;
      angular.element(".filium-control").addClass('selectActive');
    }
    $scope.agregarHabilidades = function(){
      $scope.submittedHabilidad=false;
      $scope.mostrarForm=true;
      $scope.editando=false;
      $scope.registrando=true;
      $scope.abilityValue = "";
      $scope.abilitiesDescription = "";
      angular.element(".filium-control").removeClass('selectActive');
    }

    $scope.matrizHabilidades = [{
      // Datos de Tabla Específica
      habilidadPersonalId: '1',
      personaId: '2',
      habilidadId: '3',
      descripcion: 'Liderezgo y alta capacidad para el trabajo en equipo.',
      // Datos de Tabla Maestra
      habilidadName: 'Trabajo en Equipo'
    },{
      // Datos de Tabla Específica
      habilidadPersonalId: '1',
      personaId: '2',
      habilidadId: '3',
      descripcion: 'Liderezgo y alta capacidad para el trabajo en equipo.',
      // Datos de Tabla Maestra
      habilidadName: 'Trabajo en Equipo'
    },{
      // Datos de Tabla Específica
      habilidadPersonalId: '1',
      personaId: '2',
      habilidadId: '3',
      descripcion: 'Liderezgo y alta capacidad para el trabajo en equipo.',
      // Datos de Tabla Maestra
      habilidadName: 'Trabajo en Equipo'
    }];




  });
