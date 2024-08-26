<?php
	/**
	 * Byway detail template (national byways) required from single-national_byway.
	 *
	 * @template   Overlook Map Section
	 * @date       Aug262024
	 * @author     Greg Miller, gregmiller.io
	 * @package    template
	 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// vars.
$national_overlook_map = the_field( 'national_map_url' );

// Currently not working due to Content Security Policy or method to block what I wanted to do.
?>
<div class="row">

	<div style="width: 100%; height: 500px; position: relative;">
		<iframe src="<?php echo esc_html( $national_overlook_map ); ?>"
				title="<?php echo esc_html( $official_byway_name ) . ' Map'; ?>"
				aria-label="Interactive map showing byway route and location."
				width="100%"
				height="100%"
				frameborder="0"
				allowfullscreen
				tabindex="0"
				loading="lazy"
				style="border: none; position: absolute; top: 0; left: 0;">
		<!-- Fallback content -->
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/svg/scenic-byway.svg"
			alt="Your browser does not support iframes"
			style="width: 100%; height: 100%; object-fit: contain;">
		</iframe>
	</div>

</div> <!-- .row // Overlook map -->
	<?php

