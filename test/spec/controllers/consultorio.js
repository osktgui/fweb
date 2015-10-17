'use strict';

describe('Controller: ConsultorioCtrl', function () {

  // load the controller's module
  beforeEach(module('filiumApp'));

  var ConsultorioCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    ConsultorioCtrl = $controller('ConsultorioCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(ConsultorioCtrl.awesomeThings.length).toBe(3);
  });
});
