<?php
	/**
	 * State byway directions template.
	 * based on template-parts/byway/content/directions.php.
	 *
	 * @template
	 * @date Jul142021
	 * @author Greg Miller, gregmiller.io
	 * @package template
	 */

	// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$driving_directions = get_field( 'sb_driving_directions_route_description' );

// Debug output
if ( WP_DEBUG ) {
    error_log( 'Driving directions field value: ' . print_r( $driving_directions, true ) );
}

if ( ! empty( $driving_directions ) ) :
	?>
	<div class="mb-12 row"> <!-- Story of the Byway + Driving Directions -->
		
		<div class="section directions">
			
			<div class="">
				<div id="directions" class="anchored"></div>
					<h2 class="text-3xl md:text-4xl h2 driving">Driving Directions</h2>
					
					<?php echo acf_esc_html( $driving_directions ); ?>
					<?php
endif;
?>
			</div> <!-- .col // directions -->
   
		</div> <!-- .section -->
	</div> <!-- .row // story of byway + directions -->
