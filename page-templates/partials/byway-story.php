<?php
	/**
	 * @template
	 * @date Jul142021
	 * @author Greg Miller, gregmiller.io
	 * @testedwith
	 */

?>
	
	<div class="row"> <!-- Story of the Byway + Driving Directions -->
		
		<div class="section">
			<div class="col">
				<div id="story" class="anchored"></div>
				<h2 class="text-4xl h2 story">Story of the Byway</h2>
				
				<?php
					//vars
					$byway_story        = get_field( 'nb_byway_story' );
					
					if ( $byway_story ) :  ?>
						<?php echo $byway_story;  ?>
					<?php endif; // end
				?>
			</div><!-- .col // story of byway -->
			
			<div class="col">
				<div id="directions" class="anchored"></div>
				<h2 class="h2 text-4xl driving">Driving Directions</h2>
				
				<?php
					$driving_directions = get_field( 'nb_driving_directions_route_description' );
					
					if ( $driving_directions ) :  ?>
						<?php echo $driving_directions;  ?>
					<?php endif; // end
				?>
			</div> <!-- .col // directions -->
		</div> <!-- .section -->
	</div> <!-- .row // story of byway + directions -->