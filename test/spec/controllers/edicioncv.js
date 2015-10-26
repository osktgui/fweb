'use strict';

describe('Controller: EdicioncvCtrl', function () {

  // load the controller's module
  beforeEach(module('filiumApp'));

  var EdicioncvCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    EdicioncvCtrl = $controller('EdicioncvCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(EdicioncvCtrl.awesomeThings.length).toBe(3);
  });
});
