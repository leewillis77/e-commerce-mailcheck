jQuery( function( $ ) {
    'use strict';
	if ( $( '#wpcm-suggest' ).length < 1 ) {
	    $( 'input#email' ).parent().append( '<div id="wpcm-suggest"></div> ');
	}

	$( 'input#email' ).on( 'blur', function() {
		$( '#wpcm-suggest' ).html( '' );
		$( this ).mailcheck({
	      suggested: function( element, suggestion ) {
	      	$( '#wpcm-suggest' ).html( 'Did you mean ' + suggestion.full + '?' );
	      }
	    });
	});
});