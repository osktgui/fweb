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
    'datePicker',
    'ngTouch'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/landing.html',
        controller: 'LandingCtrl'
      })
      .when('/landing', {
        templateUrl: 'views/landing.html',
        controller: 'LandingCtrl'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
