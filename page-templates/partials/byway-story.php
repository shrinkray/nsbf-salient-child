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
	
	<div class="row mb-12"> <!-- Story of the Byway + Driving Directions -->
		
		<div class="section">
			<div class="">
				<div id="story" class="anchored"></div>
				
				<?php
					//vars
					$byway_story        = get_field( 'nb_byway_story' );
					$toggle_story = 'block';
					
					if ( ! empty( $byway_story ) ) :  ?>
     
				<h2 class="text-3xl md:text-4xl h2 story">Story of the Byway</h2>
      
						<?php echo $byway_story;  ?>

                        <script>
                            const itemStory = document.getElementById('item-story');
                            itemStory.classList.remove('hidden');
                            itemStory.classList.add('block');
                        </script>
					<?php endif; // end
				?>
			</div><!-- .col // story of byway -->
   
		</div> <!-- .section -->
	</div> <!-- .row // story of byway + directions -->
