/**
 * Custom theme styles
 */

( function( $ ) {
	
	$("ul li a").click(function() {
		var link = $(this).attr('href');
	    $('html, body').animate({
	        scrollTop: $(link).offset().top-50  //the - 50 is to make the scroll line up with the page correctly. 
	    }, 1000);
	});	

} )( jQuery );
