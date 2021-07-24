<?php
	/**
	 * @template
	 * @date Jul142021
	 * @author Greg Miller, gregmiller.io
	 * @testedwith
	 */

?>
	
	<div class="row mb-12"> <!-- Story of the Byway + Driving Directions -->
		
		<div class="section directions">
			
			<div class="">
				<div id="directions" class="anchored"></div>
				
				
				<?php
					$driving_directions = get_field( 'nb_driving_directions_route_description' );
					
					
					if ( ! empty( $driving_directions ) ) :  ?>
                        
                        <h2 class="text-3xl md:text-4xl h2 driving">Driving Directions</h2>
                        
						<?php echo $driving_directions;  ?>

                        <script>
                            const itemDirections = document.getElementById('item-directions');
                            itemDirections.classList.remove('hidden');
                            itemDirections.classList.add('block');
                        </script>
					<?php endif; // end
				?>
			</div> <!-- .col // directions -->
   
		</div> <!-- .section -->
	</div> <!-- .row // story of byway + directions -->