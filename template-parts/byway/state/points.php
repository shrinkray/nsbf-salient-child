<?php
	/**
	 * State byway points of interest (poi) template.
	 * based on template-parts/byway/content/points.php.
	 *
	 * @template
	 * @date Jul142021
	 * @author Greg Miller, gregmiller.io
	 * @package template
	 */

	// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) :
	exit;
endif;

	// Check rows exists.
if ( ! empty( have_rows( 'sb_point_of_interest' ) ) ) :
	?>
<div class="mb-12 row">
	<div class="section">
		
		<div id="points" class="anchored"></div>
		<h2 class="text-3xl md:text-4xl h2 poi">Points of Interest</h2>
		<ul>
			<?php
				// Loop through rows.
			while ( have_rows( 'sb_point_of_interest' ) ) :
				the_row();
				// vars.

				$poi_name              = get_sub_field( 'sb_poi_name' );
				$poi_brief_description = get_sub_field( 'sb_poi_brief_description' );
				$poi_map_website       = get_sub_field( 'sb_poi_map_url' );
				$poi_website           = get_sub_field( 'sb_poi_website' );
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
								" target="_blank" title="Use Google Maps to explore &nbsp;
								<?php echo esc_attr( $poi_name ); ?>!">Directions</a>
						<?php
						endif; // opts out if no PO website URL.

					if ( $poi_website ) :
						?>
							<a class="byway-website-property" href="
						<?php
						echo esc_url( $poi_website );
						?>
							" target="_blank" title="Learn more at the &nbsp;
							<?php echo esc_attr( $poi_name ); ?> website!">Website</a>
						<?php
						endif; // opts out if no PO website URL.

					?>
					</div>
					<?php
					endif;
				?>

			</li>
				<?php
				endwhile; // sb_point_of_interest.
			?>
		
		</ul>
		<script>
			const itemPoints = document.getElementById('item-points');
			itemPoints.classList.remove('hidden');
			itemPoints.classList.add('block');
		</script>

	
	</div> <!-- .section Points of Interest -->
</div> <!-- .row  // POI-->
	<?php
	endif; // sb_point_of_interest.
?>