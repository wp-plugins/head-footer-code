<?php
/**
 * Inject site-wide code to head and footer with custom priorty.
 */
$auhfc_defaults = auhfc_defaults();
if ( empty( $auhfc_defaults['priority'] ) ) {
	$auhfc_defaults['priority'] = 10;
}
add_action( 'wp_head', 'auhfc_wp_head', $auhfc_defaults['priority'] );
add_action( 'wp_footer', 'auhfc_wp_footer', $auhfc_defaults['priority'] );

/**
 * Inject site-wide and Article specific head code before </head>
 */
function auhfc_wp_head() {

	// Get variables to test
	$auhfc_settings = auhfc_defaults();
	$auhfc_meta = auhfc_get_meta( 'head' );

	// If no code to inject, simple exit
	if ( empty( $auhfc_settings['head'] ) && empty( $auhfc_meta ) ) {
		return;
	}

	global $post;
	$behavior = auhfc_get_meta( 'behavior' );

	// Prepare code output.
	$out = '';

	// Inject site-wide head code
	if (
		! empty( $auhfc_settings['head'] ) &&
		(
			'replace' !== $behavior ||
			( 'replace' == $behavior && ! in_array( $post->post_type, $auhfc_settings['post_types'] ) ) ||
			( 'replace' == $behavior && in_array( $post->post_type, $auhfc_settings['post_types'] ) && empty( $auhfc_meta ) )
		)
	) {
		if ( WP_DEBUG ) { $out .= "<!-- Head & Footer Code: Site-wide head section start ({$post->post_type}) -->\n"; }
		$out .= $auhfc_settings['head'];
		if ( WP_DEBUG ) { $out .= "<!-- Head & Footer Code: Site-wide head section end ({$post->post_type}) -->\n"; }
	}

	// Inject article specific head code if post_type is allowed
	if ( ! empty( $auhfc_meta ) && in_array( $post->post_type, $auhfc_settings['post_types'] ) ) {
		if ( WP_DEBUG ) { $out .= "<!-- Head & Footer Code: Article specific head section start ({$post->post_type}) -->\n"; }
		$out .= $auhfc_meta;
		if ( WP_DEBUG ) { $out .= "<!-- Head & Footer Code: Article specific head section end ({$post->post_type}) -->\n"; }
	}

	// Print prepared code.
	echo $out;

	// Free some memory.
	unset( $out, $auhfc_settings, $auhfc_meta, $behavior );

} // END function auhfc_wp_head()

/**
 * Inject site-wide and Article specific footer code before the </body>
 */
function auhfc_wp_footer() {

	// Get variables to test
	$auhfc_settings = auhfc_defaults();
	$auhfc_meta = auhfc_get_meta( 'footer' );

	// If no code to inject, simple exit
	if ( empty( $auhfc_settings['footer'] ) && empty( $auhfc_meta ) ) {
		return;
	}

	global $post;
	$behavior = auhfc_get_meta( 'behavior' );

	// Prepare code output
	$out = '';

	// Inject site-wide head code
	if (
		! empty( $auhfc_settings['footer'] ) &&
		(
			'replace' !== $behavior ||
			( 'replace' == $behavior && ! in_array( $post->post_type, $auhfc_settings['post_types'] ) ) ||
			( 'replace' == $behavior && in_array( $post->post_type, $auhfc_settings['post_types'] ) && empty( $auhfc_meta ) )
		)
	) {
		if ( WP_DEBUG ) { $out .= "<!-- Head & Footer Code: Site-wide footer section start ({$post->post_type}) -->\n"; }
		$out .= $auhfc_settings['footer'];
		if ( WP_DEBUG ) { $out .= "<!-- Head & Footer Code: Site-wide footer section end ({$post->post_type}) -->\n"; }
	}

	// Inject article specific head code if post_type is allowed
	if ( ! empty( $auhfc_meta ) && in_array( $post->post_type, $auhfc_settings['post_types'] ) ) {
		if ( WP_DEBUG ) { $out .= "<!-- Head & Footer Code: Article specific footer section start ({$post->post_type}) -->\n"; }
		$out .= trim( $auhfc_meta );
		if ( WP_DEBUG ) { $out .= "<!-- Head & Footer Code: Article specific footer section end ({$post->post_type}) -->\n"; }
	}

	// Print prepared code.
	echo $out;

	// Free some memory.
	unset( $out, $auhfc_settings, $auhfc_meta, $behavior );

} // END function auhfc_wp_footer()
