<?php
	/**
	 * @template
	 * @date Jul142021
	 * @author Greg Miller, gregmiller.io
	 * @testedwith
	 */

?>

	<div class="row mb-12">
		<div class="section">
			<div id="itinerary" class="anchored"></div>
			
			<?php
				
				// Check rows exists.
				if ( ! empty( have_rows( 'nb_itinerary' ) ) ) :
					?>
                    
                    <h2 class="text-3xl md:text-4xl h2 itinerary">Itinerary</h2>
					<ul>
						<?php
							
							// Loop through rows.
							while ( have_rows( 'nb_itinerary' ) ) : the_row();
								//vars
								$itinerary_name = get_sub_field('nb_itinerary_name');
								$itinerary_description = get_sub_field('nb_itinerary_brief_description');
								$toggle_itinerary = 'block';
								?>
								
								<li class="item mb-7">
									<div class="item-heading"><?php echo $itinerary_name; ?></div>
									<div class=""><?php echo $itinerary_description; ?></div>
								</li>
							
							<?php endwhile;
						?>
					
					</ul>
				
				<?php
                else :
                    // $toggle_itinerary = "hidden";
				endif;
			
			?>
		</div> <!-- .section  -->
	</div> <!-- .row // Itinerary -->