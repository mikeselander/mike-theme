(function($) {
	$(document).ready(function() {
		$( '.trigger' ).click( function(e) {
			$('body').toggleClass( 'menu-shown' );
			e.preventDefault();
	    });
	});
})( jQuery );
