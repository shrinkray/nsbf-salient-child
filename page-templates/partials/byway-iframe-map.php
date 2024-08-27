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
$overlook_map = get_field( 'national_map_url' );
$proxy        = wp_remote_get( $overlook_map );

// Currently not working due to Content Security Policy or method to block what I wanted to do.

if ( $overlook_map ) :
	?>
<section class="pb-0 mb-12 row">
	
	<div style="width: 100%; height: 500px; position: relative;">
	<iframe src="
	<?php
	echo $overlook_map ? esc_url( $overlook_map ) :
	esc_url( get_stylesheet_directory_uri() ) . '/svg/scenic-byway.svg';
	?>
	"
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
		
		Your browser does not support iframes
		
	</iframe>
</div>

</section> <!-- .row // Overlook map -->
	<?php
endif;
