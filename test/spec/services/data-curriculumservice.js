'use strict';

describe('Service: dataCurriculumservice', function () {

  // load the service's module
  beforeEach(module('filiumApp'));

  // instantiate service
  var dataCurriculumservice;
  beforeEach(inject(function (_dataCurriculumservice_) {
    dataCurriculumservice = _dataCurriculumservice_;
  }));

  it('should do something', function () {
    expect(!!dataCurriculumservice).toBe(true);
  });

});
