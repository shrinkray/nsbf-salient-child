<?php
	/**
	 * National byway directions template.
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

$driving_directions = get_field( 'nb_driving_directions_route_description' );


if ( ! empty( $driving_directions ) ) :
	?>
	<div class="mb-12 row"> <!-- Story of the Byway + Driving Directions -->
		
		<div class="section directions">
			
			<div class="">
				<div id="directions" class="anchored"></div>
					<h2 class="text-3xl md:text-4xl h2 driving">Driving Directions</h2>
					
					<?php echo acf_esc_html( $driving_directions ); ?>

					<script>
						const itemDirections = document.getElementById('item-directions');
						itemDirections.classList.remove('hidden');
						itemDirections.classList.add('block');
					</script>
					<?php
endif;
?>
			</div> <!-- .col // directions -->
   
		</div> <!-- .section -->
	</div> <!-- .row // story of byway + directions -->
