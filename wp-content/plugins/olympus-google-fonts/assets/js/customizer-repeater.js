/* global jQuery */
'use strict';

jQuery(document).ready(function () {
    'use strict';
    var theme_controls = jQuery('#customize-theme-controls');

    /**
     * This adds a new box to repeater
     *
     */
    theme_controls.on('click', '.customizer-repeater-new-field', function () {
        var parent = jQuery(this).closest('.customize-control');

        if (typeof parent !== 'undefined') {
            /* Clone the first box*/
            var field = parent.find('.customizer-repeater-general-control-repeater-container:first').clone( true, true );

            if (typeof field !== 'undefined') {

                /*Show delete box button because it's not the first box*/
                field.find('#ogf-repeater-control-remove-field').show();

                /*Remove value from text field*/
                field.find('.customizer-repeater-control').val('');

                /*Append new box*/
                parent.find('.customizer-repeater-general-control-repeater-container:first').parent().append(field);

                /*Refresh values*/
                customizer_repeater_refresh_general_control_values();
            }

        }
        return false;
    });


    theme_controls.on('click', '#ogf-repeater-control-remove-field', function () {
			var control = jQuery(this).closest('.customizer-repeater-general-control-repeater-container');
        if (typeof control !== 'undefined') {
            control.hide(250, function(){
                control.remove();
                customizer_repeater_refresh_general_control_values();
            });
        }
        return false;
    });

    theme_controls.on('keyup', '.customizer-repeater-control', function () {
        customizer_repeater_refresh_general_control_values();
    });


    /**
     * Save elements and refresh the customizer.
     */
    theme_controls.on('click', '.ogf_save_elements_button', function () {
			wp.customize.previewer.save().done(function() {
				window.location.href = ogf_custom_selectors_url;
			})
    });

});

function customizer_repeater_refresh_general_control_values() {
    'use strict';
    jQuery('.customizer-repeater-general-control-repeater').each(function () {
        var values = [];
        jQuery( this ).find('.customizer-repeater-general-control-repeater-container').each(function () {

            var label = jQuery( this ).find('.customizer-repeater-label-control').val();
            var description = jQuery( this ).find('.customizer-repeater-description-control').val();
            var selectors = jQuery( this ).find('.customizer-repeater-selectors-control').val();

            if ( label !== '' || description !== '' || selectors !== '' ) {
								label = ( label !== '' ? label : selectors );
                values.push({
                    'label': escapeHtml(label),
                    'description': escapeHtml(description),
                    'selectors': escapeHtml(selectors),
                });
            }
        });
        jQuery(this).find('.customizer-repeater-colector').val(JSON.stringify(values));
        jQuery(this).find('.customizer-repeater-colector').trigger('change');
    });
}

var entityMap = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    '\'': '&#39;',
    '/': '&#x2F;'
};

function escapeHtml(string) {
    'use strict';
    //noinspection JSUnresolvedFunction
    string = String(string).replace(new RegExp('\r?\n', 'g'), '<br />');
    string = String(string).replace(/\\/g, '&#92;');
    return String(string).replace(/[&<>"'\/]/g, function (s) {
        return entityMap[s];
    });

}