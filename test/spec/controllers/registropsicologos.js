'use strict';

describe('Controller: RegistropsicologosCtrl', function () {

  // load the controller's module
  beforeEach(module('filiumApp'));

  var RegistropsicologosCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    RegistropsicologosCtrl = $controller('RegistropsicologosCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(RegistropsicologosCtrl.awesomeThings.length).toBe(3);
  });
});
