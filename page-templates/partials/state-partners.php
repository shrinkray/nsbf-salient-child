<?php
// Exit if accessed directly
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

?>

<div class="spacer"></div>
<div class="detail-subsection grid grid-cols-1 md:grid-cols-2 px-2 py-6 border-goldenrod  mt-8">
	
	<div class="partner-digits text-center p-2">
		<?php
			// vars
			$state_dot_name = get_field('sp_state_department_of_transportation_name');
			$state_dot_website = get_field('sp_state_department_of_transportation_website');
			$state_dot_phone = get_field('sp_state_department_of_transportation_phone');
			
			/**
			 * If the organization exists, add it's name. If the web and or phone properties exist,
			 * render, otherwise do not show them.
			 */
			if ( $state_dot_name ) : ?>
				<div class="detail-organization text-xl font-bold"><?php echo $state_dot_name;?></div>
				
				<div class="detail-properties">
					<?php // If we have a website URL add a link
						if ( $state_dot_website ) :  ?>
							<a class="byway-website-property" href="<?php echo $state_dot_website;
							?>" target="_blank"
                               title="Learn more about us at the <?php echo $state_dot_name; ?> website!">Website</a>
						<?php endif; ?>
					
					<?php // If we have a phone URL add a link
						if (  $state_dot_phone ) :  ?>
							<a class="byway-phone-property" href="tel:<?php echo $state_dot_phone;
							?>" title="Need help? Call our offices."><?php echo $state_dot_phone;?></a>
						<?php endif; ?>
				</div> <!-- .detail-properties -->
			<?php endif; // $state_dot_name
		
		?>
	</div>
	<div class="partner-digits text-center pt-8 md:pt-2 px-2">
		<?php
			
			// vars
			$state_tourism_board_name = get_field('sp_state_tourism_board_name');
			$state_tourism_board_website = get_field('sp_state_tourism_board_website');
			$state_tourism_board_phone = get_field('sp_state_tourism_board_phone');
			
			/**
			 * If the organization exists, add it's name. If the web and or phone properties exist,
			 * render, otherwise do not show them.
			 */
			if ( $state_tourism_board_name ) :  ?>
				<?php the_content(); ?>
				<div class="detail-organization text-xl font-bold"><?php echo $state_tourism_board_name;?></div>
				
				<div class="detail-properties">
					<?php // If we have a website URL add a link
						if ( $state_tourism_board_website ) :  ?>
							<a class="byway-website-property" href="<?php echo $state_tourism_board_website;
							?>" target="_blank"
                               title="Learn more about us at the <?php echo $state_tourism_board_name; ?> website!">Website</a>
						<?php endif; ?>
					
					<?php // If we have a phone URL add a link
						if (  $state_tourism_board_phone ) :  ?>
							<a class="byway-phone-property" href="tel:<?php echo $state_tourism_board_phone;
							?>" title="Need help? Call our offices."><?php echo $state_tourism_board_phone;?></a>
						<?php endif; ?>
				</div> <!-- .detail-properties -->
			<?php endif; // $state_tourism_board_name
		?>
	
	
	</div>

</div> <!-- .detail-subsection // Statewide Byway Partners  -->
