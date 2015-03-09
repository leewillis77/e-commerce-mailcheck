jQuery( function( $ ) {
    'use strict';
  	if ( $( '#wpcm-suggest' ).length < 1 ) {
  		$( 'div.col-1' ).append( '<div id="wpcm-suggest"></div>' );
  	}

	$( 'input#billing_email' ).on( 'blur', function() {
		$( '#wpcm-suggest' ).html( '' );
	    $( this ).mailcheck({
	      suggested: function( element, suggestion ) {
	      	$( '#wpcm-suggest' ).html( 'Did you mean ' + suggestion.full + '?');
	      }
	    });
	});
});