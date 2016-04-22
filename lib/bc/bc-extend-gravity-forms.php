<?php
/**
 * Move GFORM Scripts into Footer
 */
function bc_gform_init_scripts_footer() {
    return true;
}
add_filter("gform_init_scripts_footer", "bc_gform_init_scripts_footer");


/**
 * Append the form label to the class for all forms
 */
function bc_custom_field_class ( $classes, $field, $form ) {

	$classes .= " " . sanitize_title($field['label']);

    return $classes;
}
add_action( 'gform_field_css_class', 'bc_custom_field_class', 10, 3 );


/**
 * Alter label for address fields to be more meaningful for audience
 */
function bc_address_field_label ($addressTypes, $formID) {
	$addressTypes['international']['zip_label'] = 'Post Code';
	$addressTypes['international']['state_label'] = 'County';
	return $addressTypes;
}
add_filter('gform_address_types', 'bc_address_field_label', 10, 2);