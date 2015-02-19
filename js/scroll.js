/**
 * Custom theme styles
 */

( function( $ ) {
	
	$("ul li a").click(function() {
		var link = $(this).attr('href');
	    $('html, body').animate({
	        scrollTop: $(link).offset().top
	    }, 1000);
	});	

} )( jQuery );
