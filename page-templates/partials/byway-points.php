<?php
	/**
	 * @template
	 * @date Jul142021
	 * @author Greg Miller, gregmiller.io
	 * @testedwith
	 */
	// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
	
	<div class="mb-12 row">
		<div class="section">
			
			<div id="points" class="anchored"></div>
			<?php


				// Check rows exists.
			if ( ! empty( have_rows( 'nb_point_of_interest' ) ) ) :
				?>
					
			<h2 class="text-3xl md:text-4xl h2 poi">Points of Interest</h2>
					<ul>
					<?php
						// Loop through rows.
					while ( have_rows( 'nb_point_of_interest' ) ) :
						the_row();
						// vars

						$poi_name              = get_sub_field( 'nb_poi_name' );
						$poi_brief_description = get_sub_field( 'nb_poi_brief_description' );
						$poi_map_website       = get_sub_field( 'nb_poi_map_url' );
						$poi_website           = get_sub_field( 'nb_poi_website' );
						$toggle_points         = 'block';

						?>
								<li class="item mb-7">
									<div class="item-heading"><?php echo esc_html( $poi_name ); ?></div>
									<div><?php echo wp_kses_post( $poi_brief_description ); ?></div>
									
							<?php
								// If either of these properties exist, build out this section,
								// otherwise, skip.
							if ( $poi_map_website || $poi_website ) :
								?>
									<div class="detail-properties">
								<?php

								if ( $poi_map_website ) :
									?>
												<a class="byway-website-property"
													href="
												<?php
												echo esc_url( $poi_map_website );
												?>
													" target="_blank" title="Use Google Maps to explore <?php echo esc_attr( $poi_name ); ?>!">Directions</a>
											<?php
											endif; // opts out if no PO website URL

								if ( $poi_website ) :
									?>
												<a class="byway-website-property" href="
											<?php
											echo esc_url( $poi_website );
											?>
												" target="_blank" title="Learn more at the <?php echo esc_attr( $poi_name ); ?> website!">Website</a>
											<?php
											endif; // opts out if no PO website URL

								?>
									</div>
								<?php
								endif;
							?>
		
								</li>
							<?php
							endwhile; // nb_point_of_interest.
					?>
					
					</ul>
					<script>
						const itemPoints = document.getElementById('item-points');
						itemPoints.classList.remove('hidden');
						itemPoints.classList.add('block');
					</script>
				<?php
				endif; // nb_point_of_interest.
			?>
		
		</div> <!-- .section Points of Interest -->
	</div> <!-- .row  // POI-->
