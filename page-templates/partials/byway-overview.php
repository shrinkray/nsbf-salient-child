<?php
	
	/**
	 * @template
	 * @date Jul142021
	 * @author Greg Miller, gregmiller.io
	 * @testedwith
	 */

?>
	
	<div class="row"><!-- overview  -->
		<div class="section my-4">
			<div class="boxed-subsection">
				<?php
					//vars
					$byway_synopsis = get_field( 'nb_byway_synopsis' );
				
				?>
				<div id="overview" class="anchored"></div>
				<h2 class="text-4xl h2 overview">Overview</h2>
				<?php echo $byway_synopsis; ?>
			</div> <!-- .boxed-subsection -->
		</div>
	</div> <!-- overview row -->