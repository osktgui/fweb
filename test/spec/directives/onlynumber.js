'use strict';

describe('Directive: onlynumber', function () {

  // load the directive's module
  beforeEach(module('filiumApp'));

  var element,
    scope;

  beforeEach(inject(function ($rootScope) {
    scope = $rootScope.$new();
  }));

  it('should make hidden element visible', inject(function ($compile) {
    element = angular.element('<onlynumber></onlynumber>');
    element = $compile(element)(scope);
    expect(element.text()).toBe('this is the onlynumber directive');
  }));
});
