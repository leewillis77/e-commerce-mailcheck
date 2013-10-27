jQuery(document).ready(function() {

  	if ( jQuery ( '#wpcm-suggest' ).length < 1 )
  		jQuery( 'div.col-1' ).append('<div id="wpcm-suggest"></div>');

	jQuery('input#billing_email').on('blur', function() {
		jQuery ( '#wpcm-suggest' ).html('');
	    jQuery(this).mailcheck({
	      suggested: function(element, suggestion) {
	      	jQuery ( '#wpcm-suggest' ).html ( "Did you mean "+suggestion.full+"?");
	      },
	    });

	});
	
});