'use strict';

describe('Directive: nameValidation', function () {

  // load the directive's module
  beforeEach(module('filiumApp'));

  var element,
    scope;

  beforeEach(inject(function ($rootScope) {
    scope = $rootScope.$new();
  }));

  it('should make hidden element visible', inject(function ($compile) {
    element = angular.element('<name-validation></name-validation>');
    element = $compile(element)(scope);
    expect(element.text()).toBe('this is the nameValidation directive');
  }));
});
