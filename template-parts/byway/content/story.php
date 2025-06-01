<?php
	/**
	 * National byway story template.
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
?>
	
	<div class="mb-12 row"> <!-- Story of the Byway + Driving Directions -->
		
		<div class="max-w-4xl mx-auto section">
			<div class="">
				<div id="story" class="anchored"></div>
				
				<?php
					// vars.
					$byway_story  = get_field( 'nb_byway_story' );
					$toggle_story = 'block';

				if ( ! empty( $byway_story ) ) :
					?>
	 
				<h2 class="text-3xl md:text-4xl h2 story">Story of the Byway</h2>
	  
						<?php echo acf_esc_html( $byway_story ); ?>

						<script>
							const itemStory = document.getElementById('item-story');
							itemStory.classList.remove('hidden');
							itemStory.classList.add('block');
						</script>
					<?php
					endif; // end.
				?>
			</div><!-- .col // story of byway -->
   
		</div> <!-- .section -->
	</div> <!-- .row // story of byway + directions -->
