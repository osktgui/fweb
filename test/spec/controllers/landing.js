'use strict';

describe('Controller: LandingctrlCtrl', function () {

  // load the controller's module
  beforeEach(module('filiumApp'));

  var LandingctrlCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    LandingctrlCtrl = $controller('LandingctrlCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(LandingctrlCtrl.awesomeThings.length).toBe(3);
  });
});
