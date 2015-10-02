"use strict";angular.module("filiumApp",["ngAnimate","ngCookies","ngResource","ngRoute","ngSanitize","datePicker","ngTouch"]).config(["$routeProvider",function(a){a.when("/",{templateUrl:"views/landing.html",controller:"LandingCtrl"}).when("/landing",{templateUrl:"views/landing.html",controller:"LandingCtrl"}).otherwise({redirectTo:"/"})}]),angular.module("filiumApp").controller("MainCtrl",function(){this.awesomeThings=["HTML5 Boilerplate","AngularJS","Karma"]}),angular.module("filiumApp").controller("AboutCtrl",function(){this.awesomeThings=["HTML5 Boilerplate","AngularJS","Karma"]}),angular.module("filiumApp").directive("onlynumber",function(){return{require:"ngModel",link:function(a,b,c,d){d.$parsers.push(function(a){if(void 0===a)return"";var b=a.replace(/[^0-9]/g,"");return b!==a&&(d.$setViewValue(b),d.$render()),b})}}}),angular.module("filiumApp").controller("LandingCtrl",["$scope","$window",function(a,b){function c(){angular.element(".schedule-hidden").css("display","inline-block"),angular.element(".schedule-hidden").focus(),angular.element("#land-schedule").val(""),angular.element("#land-schedule").addClass("landing-select"),angular.element("#land-date").removeClass("error"),angular.element("#land-schedule").empty(),angular.element("#land-schedule").append("<option value disabled>Horario de Consulta</option>");var a={};a.fechaCita=angular.element("#land-date").val(),$.ajax({data:a,type:"GET",url:"leerHorariosDisponibles",dataType:"json",success:function(a){angular.element("land-schedule").empty(),$.each(a,function(a,b){if(g(b.hora)&&b.disponible){var c=f(b.hora);angular.element("#land-schedule").append('<option value="'+b.horarioDisponibleId+'">'+c+"</option>")}})},error:function(){b.alert("Error")}})}function d(a){angular.element("#"+a).addClass("error"),i=!1}function e(){var c={};c.nombre=a.landing.names,a.variable.llamada?c.metodoContacto="llamada":a.variable.skype&&(c.metodoContacto="skype"),c.celular=a.landing.phone,c.skype=a.landing.skype,c.correo=a.landing.email,c.horario=a.landing.schedule,$.ajax({data:c,type:"GET",url:"registrarLead",dataType:"text",success:function(a){"LeadRegistrado"==a&&b.alert("Se ha registrado satisfactoriamente.")},error:function(){b.alert("Lo sentimos, el horario acaba de ser reservado.")}})}function f(a){function b(a){return a>12?"p.m.":"a.m."}function c(a){return a>12&&(a-=12),d(a)}function d(a){return 10>a?"0"+a:a}var e=parseInt(a.substring(0,2)),f=parseInt(a.substring(3,5)),g=60*e+f,h=g+45,i=parseInt(h/60),j=h%60;return"De "+c(e)+":"+d(f)+" "+b(e)+" hasta "+c(i)+":"+d(j)+" "+b(i)}function g(a){for(var b=parseInt(a.substring(0,2)),c=parseInt(a.substring(3,5)),d=60*b+c,e=0;e<j.length;e++)if(d==j[e])return!1;return j.push(d),!0}function h(){k?(angular.element(".landing-contact-bg-2").css("opacity","0"),k=!1):(angular.element(".landing-contact-bg-2").css("opacity","1"),k=!0)}a.landing={},a.variable={},angular.element("#land-date").blur(function(){""!==angular.element("#land-date").val()&&c()}),angular.element("#land-schedule").change(function(){angular.element("#land-schedule").removeClass("landing-select")});var i=!0;a.reservarCita=function(){i=!0,angular.isUndefined(a.landing.names)&&d("land-name"),a.variable.llamada||a.variable.skype||d("landing-form-contact-way-text"),angular.isUndefined(a.landing.phone)&&a.variable.llamada&&d("land-phone"),angular.isUndefined(a.landing.skype)&&a.variable.skype&&d("land-skype"),angular.isUndefined(a.landing.email)&&(a.variable.llamada||a.variable.skype)&&d("land-email"),angular.isUndefined(a.landing.date)&&(a.variable.llamada||a.variable.skype)&&d("land-date"),angular.isUndefined(a.landing.schedule)&&!angular.isUndefined(a.landing.date)&&d("land-schedule"),i&&(a.variable.terminos?e():$("#landing-terminos-condiciones").addClass("error"))},a.rmvError=function(a){angular.element("#"+a).removeClass("error")};var j=[],k=(setInterval(h,8e3),!0)}]),angular.module("filiumApp").run(["$templateCache",function(a){a.put("views/landing.html",'<div class="landing-contact-bg"> <div class="landing-contact-bg-2"></div> </div> <div class="landing-contact-section"> <div class="common-conteiner align-right"> <div class="landing-main-menu"> <div class="landing-main-menu-item"><a href="#">Blog</a></div> <div class="landing-main-menu-item"><a href="#">Contáctenos</a></div> <div class="landing-main-menu-item"><a href="#">Login</a></div> <div class="landing-main-menu-item button"><a href="#">Registro</a></div> </div> </div> <div class="common-conteiner"> <div class="landing-logo"><i></i></div> </div> <div class="common-conteiner align-right"> <form name="formLanding" class="landing-form"> <div class="landing-form-title">Inicia tu cita en línea gratuita </div> <div class="landing-form-group"> <input type="text" name="land-name" id="land-name" ng-model="landing.names" placeholder="Nombres y Apellidos" ng-pattern="/^[A-Za-zÑñáéíóúÁÉÍÓÚ^ ]*$/" ng-change="rmvError(\'land-name\')" class="landing-form-input"> </div> <div class="landing-form-contact-way"> <div id="landing-form-contact-way-text" class="landing-form-contact-way-text">Elige el método de contacto: </div> <div class="landing-form-contact-way-options"><a href="javascript:void(0)" ng-click="variable.llamada=true; variable.skype=false;rmvError(\'landing-form-contact-way-text\')" ng-class="{active: variable.llamada}" class="button-to-contact call-button">Llamada Telefónica<i></i></a> <div class="landing-form-contact-way-options-text">ó</div><a href="javascript:void(0)" ng-click="variable.llamada=false; variable.skype=true;rmvError(\'landing-form-contact-way-text\')" ng-class="{active: variable.skype}" class="button-to-contact variable skype-button">Skype<i></i></a> </div> </div> <div ng-show="variable.llamada" class="landing-form-group"> <input type="text" name="land-phone" id="land-phone" ng-model="landing.phone" maxlength="9" placeholder="Número de Celular" ng-change="rmvError(\'land-phone\')" onlynumber="onlynumber" class="landing-form-input"> </div> <div class="space-vertical"></div> <div ng-show="variable.skype" class="landing-form-group"> <input type="text" name="land-skype" id="land-skype" ng-model="landing.skype" placeholder="Usuario de Skype" ng-change="rmvError(\'land-skype\')" class="landing-form-input"> </div> <div class="space-vertical"></div> <div ng-show="variable.llamada || variable.skype" class="landing-form-group"> <input type="text" name="land-email" id="land-email" ng-model="landing.email" placeholder="Correo Electrónico" ng-change="rmvError(\'land-email\')" class="landing-form-input"> </div> <div class="space-vertical"></div> <div ng-show="variable.llamada || variable.skype" class="landing-form-group"> <input type="text" name="land-date" id="land-date" ng-model="landing.date" format="dd/MM/yyyy" min-view="date" view="date" placeholder="Elige la Fecha" date-time="date-time" readonly class="landing-form-input"> </div> <div class="space-vertical"></div> <div class="landing-form-group schedule-hidden"> <select type="text" name="land-schedule" id="land-schedule" ng-model="landing.schedule" placeholder="Correo Electrónico" ng-change="rmvError(\'land-schedule\')" class="landing-form-input landing-select"> <option value="" disabled>Horario de Consulta</option> <option>De 9:00 a.m. hasta 9:45 p.m.</option> <option>De 9:00 a.m. hasta 9:45 p.m.</option> </select> </div> <div class="landing-form-terms-conditions"> <div ng-click="variable.terminos= !variable.terminos;rmvError(\'landing-terminos-condiciones\');" class="landing-rbtn"><i ng-class="{active: variable.terminos}"></i></div> <div id="landing-terminos-condiciones" class="landing-form-terms-conditions-text">Acepta los<a href="#">terminos y condiciones </a>*</div> </div> <div class="landing-form-button"><a href="javascript:void(0)" ng-click="reservarCita()" class="landing-primary-button">Reservar tu cita</a></div> </form> </div> <div class="common-conteiner"> <div class="landing-invitation-message">- Programa tu terapia psicológica en el momento más cómodo para tí -</div> </div> </div> <div class="landing-phrase"> <div class="landing-phrase-content">“Alguna veces he tenido que postergar mi visita al psicólogo porque el trabajo y el estudio me tienen la mayor parte del tiempo ocupada, pero ahora con Filium puedo seguir llevando mi terapia psicológica sin salir de casa, además evito el estrés del tráfico y los tiempos de desplazamiento”<i></i></div> <div class="common-conteiner"> <div class="landing-phrase-author">Diana E, Lima - Perú<i></i></div> </div> <div class="common-conteiner landing-dots"><i></i></div> </div> <div class="landing-phrase-shadow"></div> <div class="landing-caricature-section"> <div class="landing-caricature-section-title">“ Bienestar emocional en cada situación de la vida ”</div> <div class="landing-caricature-content-ask">¿Sabías que?</div> <div class="landing-caricature-content"> <div class="landing-caricature-content-cloud"><i></i></div> <div class="landing-caricature-speakcloud-left"><i></i> <div class="landing-caricature-speakcloud-left-text">La depresión, a nivel mundial, está clasificada como la causa más importante de discapacidad en la salud humana?.</div> </div> <div class="landing-caricature-speakcloud-right"><i> <div class="landing-caricature-speakcloud-right-text">Una de cada cuatro personas en el mundo padece alguna enfermedad mental a lo largo de su vida.</div></i></div> <div class="landing-caricature-psychologist"><i></i></div> </div> <div class="landing-message-pos-caricature">"No estás solo: Aprende y disfruta de cada momento de la vida, un psicólogo de Filium te ayudará a conseguir el bienestar emocional que todos necesitamos"</div> <div class="landing-caricature-content-cloud-right"><i></i></div> <div class="landing-only-logo"><i></i></div> <div class="landing-caricature-presentation-title">Para ello nació Filium</div> <div class="landing-caricature-presentation-content"> <div class="landing-caricature-presentation-description"> <p>Filium te brinda atención psicológica por video consulta o llamada en el momento que necesites y desde el lugar más cómodo para ti. </p> <p class="landing-presentation-centerline">“Confía en Filium”</p> <p> <div class="landing-title-line">Profesionalismo:</div>Contamos con una Red de psicólogos clínicos colegiados con alta vocación de servicio y nos preocupamos que tengan una buena dosis de sensibilidad y empatía, para que sean capaces de ayudarte en encontrar el equilibrio emocional necesario para tu vida. </p> <p> <div class="landing-title-line">Confidencialidad:</div>Hemos establecido un código de ética en beneficio de preservar intacto el secreto profesional. </p> <p> <div class="landing-title-line">Accesibilidad:</div>Invertimos en mantener una plataforma virtual de fácil acceso para que tu terapia se desarrolle sin inconvenientes. </p> </div> </div> </div> <div class="landing-video-section"> <div class="landing-video-play">Ver video<i></i></div> </div> <div class="landing-footer-bg"> <div class="landing-footer-column"> <div class="landing-footer-teamrequest">¿Quieres formar parte de nuestro equipo de psicólogos?</div><a href="#" class="landing-footer-teamrequest-btn">Conocer mas</a> </div> <div class="landing-footer-column"> <div class="landing-footer-menu"> <div class="landing-footer-menu-item"><a href="#">Nosotros</a></div> <div class="landing-footer-menu-item"><a href="#">Contáctenos</a></div> <div class="landing-footer-menu-item"><a href="#">Blog</a></div> </div> <form name="landingFooterForm"> <div class="landing-footer-form-info">Ingresa tu correo para mantenernos conectados</div> <input type="text" class="landing-footer-form-input"> </form> <div class="landing-footer-social"><a href="#" class="social-icon facebook"><i></i></a><a href="#" class="social-icon twitter"><i></i></a><a href="#" class="social-icon youtube"><i></i></a></div> <div class="landing-footer-copyright">© Filium 2015. Todos los derechos reservados.</div> </div> <div class="landing-footer-column"> <div class="landing-footer-phone-info">Linea Abierta para atención psicologica</div> <div class="landing-footer-phone-number">(01) 9238183<i></i></div> </div> </div> <div class="landing-footer-bg-smart"> <div class="landing-footer-column"> <div class="landing-footer-menu"> <div class="landing-footer-menu-item"><a href="#">Nosotros</a></div> <div class="landing-footer-menu-item"><a href="#">Contáctenos</a></div> <div class="landing-footer-menu-item"><a href="#">Blog</a></div> </div> <div class="landing-footer-teamrequest">¿Quieres formar parte de nuestro equipo de psicólogos?</div><a href="#" class="landing-footer-teamrequest-btn">Conocer mas</a> <div class="landing-footer-phone-info">Linea Abierta para atención psicologica</div> <div class="landing-footer-phone-number">(01) 9238183<i></i></div> <form name="landingFooterForm"> <div class="landing-footer-form-info">Ingresa tu correo para mantenernos conectados</div> <input type="text" class="landing-footer-form-input"> </form> <div class="landing-footer-social"><a href="#" class="social-icon facebook"><i></i></a><a href="#" class="social-icon twitter"><i></i></a><a href="#" class="social-icon youtube"><i></i></a></div> <div class="landing-footer-copyright">© Filium 2015. Todos los derechos reservados.</div> </div> </div>')}]);