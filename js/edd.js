jQuery(document).ready(function() {

    if ( jQuery ( '#wpcm-suggest' ).length < 1 )
        jQuery( 'p#edd-email-wrap' ).append('<div id="wpcm-suggest"></div>');

    jQuery('input#edd-email').on('blur', function() {
        jQuery ( '#wpcm-suggest' ).html('');
        jQuery(this).mailcheck({
          suggested: function(element, suggestion) {
            jQuery ( '#wpcm-suggest' ).html ( "Did you mean "+suggestion.full+"?");
          },
        });

    });
    
});