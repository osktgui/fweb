/**=========================================================
 * Module: SparklinesDirective.js
 * SparkLines Mini Charts
 =========================================================*/
 
(function() {
    'use strict';

    angular
        .module('filiumApp')
        .directive('sparkline', sparkline);
    
    sparkline.$inject = ['$timeout', '$window'];
    function sparkline($timeout, $window) {


      controller.$inject = ['$scope', '$element'];
      return {
        restrict: 'EA',
        scope: {
          'values': '=?',
          'options': '=?'
        },
        controller: controller
      };

      function controller ($scope, $element) {
        var values = $scope.values;
        var runSL = function(){
          initSparkLine($element);
        };

        $timeout(runSL);
      
        function initSparkLine($element) {
          var options = $scope.options;

          options.type = options.type || 'bar'; // default chart is bar
          options.disableHiddenCheck = true;

          $element.sparkline(values, options);

          if(options.resize) {
            $($window).resize(function(){
              $element.sparkline(values, options);
            });
          }
        }
      }
    }

})();
