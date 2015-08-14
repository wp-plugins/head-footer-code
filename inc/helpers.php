<?php

/**
 * Provide global defaults
 * @return array Arary of defined global values
 */
function auhfc_defaults() {
	$defaults = array(
		'head'       => '',
		'footer'     => '',
		'priority'   => 10,
		'post_types' => array( 'post', 'page' ),
	);
	$auhfc_settings = get_option( 'auhfc_settings', $defaults );
	$auhfc_settings = wp_parse_args( $auhfc_settings, $defaults );
	return $auhfc_settings;
} // END function auhfc_defaults()

/**
 * Get values of metabox fields
 * @param  string $field_name Post meta field key
 * @return string             Post meta field value
 */
function auhfc_get_meta( $field_name = '' ) {

	if ( empty( $field_name ) ) {
		return false;
	}

	global $post, $auhfc_post_meta;

	$field = get_post_meta( $post->ID, '_auhfc', true );

	if ( ! empty( $field ) && is_array( $field ) && ! empty( $field[ $field_name ] ) ) {
		return stripslashes_deep( $field[ $field_name ] );
	} elseif ( 'behavior' == $field_name ) {
		return 'append';
	} else {
		return false;
	}
} // END function auhfc_get_meta( $field_name )
