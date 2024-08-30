<?php
	/**
	 * Byway overview.
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

	<div class="mt-3 mb-6 row"><!-- overview  -->
		<div class="section">
			<div class="boxed-subsection filter drop-shadow-md md:drop-shadow-xl">
				<?php
					// vars.
					$byway_synopsis = get_field( 'sb_byway_synopsis' );

				?>
				<div id="overview" class="anchored"></div>
				<?php

				if ( ! empty( $byway_synopsis ) ) :
					?>
				<h2 class="text-3xl md:text-4xl h2 overview">Overview</h2>
					<?php
					echo acf_esc_html( $byway_synopsis );

						else :
							// see nothing.
							?>

						<div class="text-sm text-mangotango truncate ...">
							<?php echo 'Missing Overview ...'; ?>
						</div>
						
						
							<?php
				endif; // byway synopsis.
						?>
			</div> <!-- .boxed-subsection -->
		</div>
	</div> <!-- overview row -->
