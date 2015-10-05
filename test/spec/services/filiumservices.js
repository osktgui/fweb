'use strict';

describe('Service: filiumServices', function () {

  // load the service's module
  beforeEach(module('filiumApp'));

  // instantiate service
  var filiumServices;
  beforeEach(inject(function (_filiumServices_) {
    filiumServices = _filiumServices_;
  }));

  it('should do something', function () {
    expect(!!filiumServices).toBe(true);
  });

});
