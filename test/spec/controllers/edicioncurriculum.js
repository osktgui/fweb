'use strict';

describe('Controller: EdicioncurriculumCtrl', function () {

  // load the controller's module
  beforeEach(module('filiumApp'));

  var EdicioncurriculumCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    EdicioncurriculumCtrl = $controller('EdicioncurriculumCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(EdicioncurriculumCtrl.awesomeThings.length).toBe(3);
  });
});
