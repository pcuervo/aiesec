(function($){

	"use strict";

	$(function(){

        // Check to make sure the input box exists
        if( 0 < $('#fecha_inicio').length ) {
      		$( "#fecha_inicio" ).datepicker({
		      defaultDate: "+1w",
		      onClose: function( selectedDate ) {
		        $( "#fecha_inicio" ).datepicker( "option", "minDate", selectedDate );
		      }
		    });
		    $( "#fecha_final" ).datepicker({
		      defaultDate: "+1w",
		      changeMonth: true,
		      onClose: function( selectedDate ) {
		        $( "#fecha_final" ).datepicker( "option", "maxDate", selectedDate );
		      }
		    });
        } // end if

    });
}(jQuery));