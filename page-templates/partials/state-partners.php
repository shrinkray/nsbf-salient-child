<?php
/**
 * State partner template.
 *
 * @package template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="spacer"></div>
<div class="grid grid-cols-1 gap-4 px-2 py-6 mt-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 md:max-w-2xl lg:max-w-4xl xl:max-w-6xl detail-subsection border-goldenrod">
	
<?php 
// vars.
			$state_dot_name    			 = get_field( 'sp_state_department_of_transportation_name' );
			$state_dot_website 			 = get_field( 'sp_state_department_of_transportation_website' );
			$state_dot_phone   			 = get_field( 'sp_state_department_of_transportation_phone' );
			$state_tourism_board_name    = get_field( 'sp_state_tourism_board_name' );
			$state_tourism_board_website = get_field( 'sp_state_tourism_board_website' );
			$state_tourism_board_phone   = get_field( 'sp_state_tourism_board_phone' );

			/**
			 * Uses Total cols are four. If calspan is 2, use full width 2-columns per item. 
			 */

			$columns = 0;

			if ($state_dot_name) $columns++;
			if ($state_tourism_board_name) $columns++;

			$col_span = $columns == 1 ? 'md:col-span-2 lg:col-span-3 xl:col-span-4' : 'md:col-span-1 lg:col-span-2';
   

?>
	<div class="p-2 text-center partner-digits <?php echo $col_span; ?>">
		<?php

			/**
			 * If the organization exists, add it's name. If the web and or phone properties exist,
			 * render, otherwise do not show them.
			 */
		if ( $state_dot_name ) :
			?>
				<div class="p-2 text-xl font-bold text-center detail-organization partner-digits ">
					<?php echo esc_html( $state_dot_name ); ?></div>
				
				<div class="detail-properties">
					<?php
					// If we have a website URL add a link.
					if ( $state_dot_website ) :
						?>
							<a class="byway-website-property" href="
							<?php
							echo esc_html( $state_dot_website );
							?>
							" target="_blank"
								title="Learn more about us at the&nbsp;
								<?php echo esc_html( $state_dot_name ); ?> website!">Website</a>
						<?php
					endif;
					?>
					
					<?php
					// If we have a phone URL add a link.
					if ( $state_dot_phone ) :
						?>
						<div class="p-2 text-center partner-digits <?php echo $col_span; ?>">
							<a class="byway-phone-property" href="tel:
							<?php
							echo esc_html( $state_dot_phone );
							?>
							" title="Need help? Call our offices.">
							<?php echo esc_html( $state_dot_phone ); ?></a>
						</div>
						<?php
						
					endif;
					?>
				</div> <!-- .detail-properties -->
			<?php
			endif; // $state_dot_name
	
		?>
	</div>
	<div class="p-2 text-center partner-digits <?php echo $col_span; ?>">
		<?php

			/**
			 * If the organization exists, add it's name. If the web and or phone properties exist,
			 * render, otherwise do not show them.
			 */
			
		if ( $state_tourism_board_name ) :
			// Removed the_content function.
			?>
			<div class="px-2 pt-8 text-center partner-digits md:pt-2 ">
				<div class="text-xl font-bold detail-organization">
					<?php echo esc_html( $state_tourism_board_name ); ?></div>
				
				<div class="detail-properties">
					<?php
					// If we have a website URL add a link.
					if ( $state_tourism_board_website ) :
						?>
						<a class="byway-website-property" href="
						<?php
						echo esc_html( $state_tourism_board_website );
						?>
						" target="_blank"
							title="Learn more about us at the&nbsp;
							<?php
							echo esc_html( $state_tourism_board_name );
							?>
							&nbsp;website!">Website</a>
						<?php
					endif;
						// If we have a phone URL add a link.
					if ( $state_tourism_board_phone ) :
						?>
						<a class="byway-phone-property" href="tel:
						<?php
						echo esc_html( $state_tourism_board_phone );
						?>
						" title="Need help? Call our offices.">
						<?php echo esc_html( $state_tourism_board_phone ); ?></a>
						<?php
					endif;
					?>
				</div> <!-- .detail-properties -->
	</div>
						<?php
			endif; // $state_tourism_board_name.
		?>
	
	</div>
		

</div> <!-- .detail-subsection // Statewide Byway Partners  -->