'use strict';

describe('Service: DataMaestra', function () {

  // load the service's module
  beforeEach(module('filiumApp'));

  // instantiate service
  var DataMaestra;
  beforeEach(inject(function (_DataMaestra_) {
    DataMaestra = _DataMaestra_;
  }));

  it('should do something', function () {
    expect(!!DataMaestra).toBe(true);
  });

});
