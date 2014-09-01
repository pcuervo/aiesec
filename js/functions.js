(function($){

	"use strict";

	$(function(){

		/**
		 * Validación de emails
		 */
		window.validateEmail = function (email) {
			var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return regExp.test(email);
		};



		/**
		 * Regresa todos los valores de un formulario como un associative array
		 */
		window.getFormData = function (selector) {
			var result = [],
				data   = $(selector).serializeArray();

			$.map(data, function (attr) {
				result[attr.name] = attr.value;
			});
			return result;
		}


	});

	/**   MENU MOVIL   **/

	// Menú móvil
		//mostrarMenu();
		toggleMenuMovil();

	function mostrarMenu() {
		$(window).resize(function(){
			if ($(window).width() > 750)
		   		$('.navegacion').attr('style', 'display: block');
		   	else
		   		$('.navegacion').attr('style', 'display: inline');
		});
	}

	function toggleMenuMovil(){
		$('#btn-movil').on('click', function(e){
			e.preventDefault();
			if($('.navegacion').css('display')=='none'){
				$(this).find('a').css('color', '#003399');
				$('.navegacion').slideDown('fast');
			} else {
				$(this).find('a').css('color', '#003399');
				$('.navegacion').slideUp('fast');
			}
		});
	}

})(jQuery);