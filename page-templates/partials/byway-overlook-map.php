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
	
	<object type="text/html" data="<?php echo esc_url( $overlook_map ); ?>"
	width="100%" height="500">
		Fallback content in case the object is not supported.
	</object>

</section> <!-- .row // Overlook map -->
	<?php
endif;
