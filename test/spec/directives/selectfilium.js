'use strict';

describe('Directive: selectFilium', function () {

  // load the directive's module
  beforeEach(module('filiumApp'));

  var element,
    scope;

  beforeEach(inject(function ($rootScope) {
    scope = $rootScope.$new();
  }));

  it('should make hidden element visible', inject(function ($compile) {
    element = angular.element('<select-filium></select-filium>');
    element = $compile(element)(scope);
    expect(element.text()).toBe('this is the selectFilium directive');
  }));
});
