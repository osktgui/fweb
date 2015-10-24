'use strict';

/**
 * @ngdoc overview
 * @name filiumApp
 * @description
 * # filiumApp
 *
 * Main module of the application.
 */
angular
  .module('filiumApp', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch',
    'ui.bootstrap',
    'ui.router',
    'ui.utils',
    'oc.lazyLoad',
    'cfp.loadingBar',
    'tmh.dynamicLocale',
    'pascalprecht.translate',
    'datePicker',
    'ui.calendar'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/landing.html',
        controller: 'LandingCtrl'
      })
      .when('/inicioSesion', {
        templateUrl: 'views/inicioSesion.html',
        controller: 'inicioSesionCtrl'
      })
      .when('/cambiarPassword', {
        templateUrl: 'views/cambiarPassword.html',
        controller: 'cambiarPasswordCtrl'
      })
      .when('/consultorio', {
        templateUrl: 'views/consultorio.html',
        controller: 'ConsultorioCtrl'
      })
      .when('/landing', {
        templateUrl: 'views/landing.html',
        controller: 'LandingCtrl'
      })
      .when('/landing-nosotros', {
        templateUrl: 'views/landing-nosotros.html',
        controller: 'LandingCtrl'
      })
      .when('/controls', {
        templateUrl: 'views/controls.html'
      })
      .when('/psicologoCita', {
        templateUrl: 'views/psicologoCita.html',
        controller: 'PsicologoCitaCtrl'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
