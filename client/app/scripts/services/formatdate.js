'use strict';

/**
 * @ngdoc service
 * @name filiumApp.formatDate
 * @description
 * # formatDate
 * Service in the filiumApp.
 */
angular.module('filiumApp')
  .service('formatDate', function () {
    // AngularJS will instantiate a singleton by calling "new" on this function
    function getCompleteDate(date){
        if(date===null){
            return null;
        }
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
    function getShortDate(date){
        var lenDate=date.length;
        var anio=date.substring(lenDate-4,lenDate);
        var mes=getNumberTwoDigits(getShortMonth(date.slice(6,lenDate-9)));
        var dia=getNumberTwoDigits(date.substring(0,2));
        return dia+'/'+mes+"/"+anio;
        // return '02/10/2015';
    }
    function getDmyToYmd(date){
        var anio=date.substring(6,10);
        var mes=date.substring(3,5);
        var dia=date.substring(0, 2);
        return anio+'/'+mes+'/'+dia;
        // return '02/10/2015';
    }
    function getShortMonth(month){
        switch(month){
            case "Enero": return 1 ; break;
            case "Febrero": return 2 ; break;
            case "Marzo": return 3 ; break;
            case "Abril": return 4 ; break;
            case "Mayo": return 5 ; break;
            case "Junio": return 6 ; break;
            case "Julio": return 7 ; break;
            case "Agosto": return 8 ; break;
            case "Setiembre": return 9 ; break;
            case "Octubre": return 10 ; break;
            case "Noviembre": return 11 ; break;
            case "Diciembre": return 12 ; break;
        }
    }

    function getNumberTwoDigits(number){
        number = parseInt(number);
        if (number <10) {return '0'+number;}
        else {return ''+number;}
    }
		return ({
            getCompleteDate: getCompleteDate,
			getShortDate: getShortDate,
            getDmyToYmd: getDmyToYmd
		});


  });
