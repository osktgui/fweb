'use strict';

describe('Directive: skype', function () {

  // load the directive's module
  beforeEach(module('filiumApp'));

  var element,
    scope;

  beforeEach(inject(function ($rootScope) {
    scope = $rootScope.$new();
  }));

  it('should make hidden element visible', inject(function ($compile) {
    element = angular.element('<skype></skype>');
    element = $compile(element)(scope);
    expect(element.text()).toBe('this is the skype directive');
  }));
});
