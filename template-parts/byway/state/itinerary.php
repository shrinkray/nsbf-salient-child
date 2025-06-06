<?php
/**
 * State byway itinerary template.
 * based on template-parts/byway/content/itinerary.php.
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
if ( ! empty( have_rows( 'sb_itinerary' ) ) ) :
	?>
<div class="mb-12 row">
	<div class="section">
		<div id="itinerary" class="anchored"></div>

		<h2 class="text-3xl md:text-4xl h2 itinerary">Itinerary</h2>
		
		
		<ul>

			<?php
			while ( have_rows( 'sb_itinerary' ) ) :
				the_row();
				// vars.
				$itinerary_name        = get_sub_field( 'sb_itinerary_name' );
				$itinerary_description = get_sub_field( 'sb_itinerary_brief_description' );
				$toggle_itinerary      = 'block';
				?>
					
			<li class="item mb-7">
				<div class="item-heading"><?php echo esc_html( $itinerary_name ); ?></div>
				<div class=""><?php echo acf_esc_html( $itinerary_description ); ?></div>
			</li>
				
				<?php
				endwhile;
			?>
		
		</ul>
		<script>
			const itemItinerary = document.getElementById('item-itinerary');
			itemItinerary.classList.remove('hidden');
			itemItinerary.classList.add('block');
		</script>

	</div> <!-- .section  -->
</div> <!-- .row // Itinerary -->
		<?php
		endif;
