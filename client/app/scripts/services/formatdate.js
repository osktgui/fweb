'use strict';

/**
 * @ngdoc service
 * @name filiumApp.formatDate
 * @description
 * # formatDate
 * Service in the filiumApp.
 */
angular.module('filiumApp')
  .service('formatDate', function (pageConfig) {
    // AngularJS will instantiate a singleton by calling "new" on this function
    function getCompleteDate(date){
    	var anio=date.substring(0, 4);
    	var mes=getCompleteMonth(date.substring(5, 7));
    	var dia=date.substring(8, 10);
    	return dia+' de '+mes+' del '+anio;
    }
    function getCompleteMonth(month){
    	var intMonth = parseInt(month);
    	switch(intMonth){
    		case 1: return "Enero"; break;
    		case 2: return "Febrero"; break;
    		case 3: return "Marzo"; break;
    		case 4: return "Abril"; break;
    		case 5: return "Mayo"; break;
    		case 6: return "Junio"; break;
    		case 7: return "Julio"; break;
    		case 8: return "Agosto"; break;
    		case 9: return "Setiembre"; break;
    		case 10: return "Octubre"; break;
    		case 11: return "Noviembre"; break;
    		case 12: return "Diciembre"; break;
    	}
    }
		return ({
			getCompleteDate: getCompleteDate
		});


  });
