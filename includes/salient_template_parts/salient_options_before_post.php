<?php
/**
 * New part tucked above posts loop
 * @date Jul-12-2021
 */
	$blog_standard_type = ( ! empty( $nectar_options['blog_standard_type'] ) ) ? $nectar_options['blog_standard_type'] : 'classic';
	$blog_type          = $nectar_options['blog_type'];
	
	if ( null === $blog_type ) {
		$blog_type = 'std-blog-sidebar';
	}
	
	if ( 'minimal' === $blog_standard_type && 'std-blog-sidebar' === $blog_type || 'std-blog-fullwidth' === $blog_type ) {
		$std_minimal_class = 'standard-minimal';
	} else {
		$std_minimal_class = '';
	}
	
	if ( 'std-blog-fullwidth' === $blog_type || '1' === $hide_sidebar ) {
		// No sidebar.
		echo '<div class="post-area col ' . $std_minimal_class . ' span_12 col_last">'; // WPCS: XSS ok.
	} else {
		// Sidebar.
		echo '<div class="post-area col ' . $std_minimal_class . ' span_9">'; // WPCS: XSS ok.
	}