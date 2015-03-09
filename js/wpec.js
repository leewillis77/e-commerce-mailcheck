jQuery( function( $ ) {
    'use strict';
  	if ( $( '#wpcm-suggest' ).length < 1 ) {
  		$( 'p.wpsc_email_address_p' ).append( '<span id="wpcm-suggest"></span>' );
  	}

	$( '.wpsc_email_address input' ).on( 'blur', function() {
		$( '#wpcm-suggest' ).html( '' );
	    $( this ).mailcheck({
	      suggested: function( element, suggestion ) {
	      	$( '#wpcm-suggest' ).html( 'Did you mean ' + suggestion.full + '?' );
	      }
	    });
	});
});