jQuery(document).ready(function() {
	
  	if ( jQuery ( '#wpcm-suggest' ).length < 1 )
  		jQuery( 'p.wpsc_email_address_p' ).append('<span id="wpcm-suggest"></span>');

	jQuery('.wpsc_email_address input').on('blur', function() {

		jQuery ( '#wpcm-suggest' ).html('');

	    jQuery(this).mailcheck({
	      suggested: function(element, suggestion) {
	      	jQuery ( '#wpcm-suggest' ).html ( "Did you mean "+suggestion.full+"?");
	      },
	    });

	});

});