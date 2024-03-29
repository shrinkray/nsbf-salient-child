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
	
	<div class="row mt-3 mb-12"><!-- overview  -->
		<div class="section">
			<div class="boxed-subsection border-2 md:border-4">
				<?php
					//vars
					$byway_synopsis = get_field( 'nb_byway_synopsis' );
					
				?>
				<div id="overview" class="anchored"></div>
				<?php
					
					if ( ! empty( $byway_synopsis ) ) :
						?>
				<h2 class="text-3xl md:text-4xl h2 overview">Overview</h2>
				<?php echo $byway_synopsis; ?>

                        <script>
                            const itemOverview = document.getElementById('item-overview');
                            itemOverview.classList.remove('hidden');
                            itemOverview.classList.add('block');
                        </script>
				<?php endif; // end
				?>
			</div> <!-- .boxed-subsection -->
		</div>
	</div> <!-- overview row -->
