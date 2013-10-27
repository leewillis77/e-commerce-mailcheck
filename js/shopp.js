jQuery(document).ready(function() {
	
	if ( jQuery ( '#wpcm-suggest' ).length < 1 )
	    jQuery( 'input#email' ).parent().append('<div id="wpcm-suggest"></div>');

	jQuery('input#email').on('blur', function() {
		jQuery ( '#wpcm-suggest' ).html('');
		jQuery(this).mailcheck({
	      suggested: function(element, suggestion) {  	
	      	jQuery ( '#wpcm-suggest' ).html ( "Did you mean "+suggestion.full+"?");
	      },
	    });
	});
	
});