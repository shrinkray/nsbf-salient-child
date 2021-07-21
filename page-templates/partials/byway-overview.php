<?php
	
	/**
	 * @template
	 * @date Jul142021
	 * @author Greg Miller, gregmiller.io
	 * @testedwith
	 */

?>
	
	<div class="row mt-3 mb-12"><!-- overview  -->
		<div class="section">
			<div class="boxed-subsection">
				<?php
					//vars
					$byway_synopsis = get_field( 'nb_byway_synopsis' );
					
				?>
				<div id="overview" class="anchored"></div>
				<?php
					
					if ( ! empty( $byway_synopsis ) ) :
						?>
				<h2 class="text-4xl h2 overview">Overview</h2>
				<?php echo $byway_synopsis; ?>

                <?php else :
						//$toggle_overview = 'hidden';
                        ?>
				<?php endif; // end
				?>
			</div> <!-- .boxed-subsection -->
		</div>
	</div> <!-- overview row -->