<?php

 
	if ( $state_dot_name ) : ?>
<div class="label-minor-heading">Statewide Byway Partners</div>

<div class="departments grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-2">
    
        <div class="partner-digits">
			<?php
				// vars
				$state_dot_name = get_field('sp_state_department_of_transportation_name');
				$state_dot_byway_website = get_field('sp_state_department_of_transportation_website');
				$state_dot_byway_phone = get_field('sp_state_department_of_transportation_phone');
				
				/**
				 * If the organization exists, add its name. If the web and or phone properties exist,
				 * render, otherwise do not show them.
				 */
				if ( $state_dot_name ) : ?>
                    <div class="detail-organization"><?php echo $state_dot_name;?></div>

                    <div class="detail-properties">
						<?php // If we have a website URL add a link
							if ( $state_dot_website ) :  ?>
                                <a class="byway-website-property" href="<?php echo $state_dot_website;
								?>" target="_blank" title="Learn more at our website!">Website</a>
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
    <div class="partner-digits">
		<?php
			// vars
			$state_tourism_board_name = get_field('sp_state_tourism_board_name');
			$state_tourism_board_website = get_field('sp_state_tourism_board_website');
			$state_tourism_board_phone = get_field('sp_state_tourism_board_phone');
			
			/**
			 * If the organization exists, add its name. If the web and or phone properties exist,
			 * render, otherwise do not show them.
			 */
			if ( $state_tourism_board_name ) :  ?>

        <div class="detail-organization"><?php echo $state_tourism_board_name;?></div>

        <div class="detail-properties">
			<?php // If we have a website URL add a link
				if ( $state_tourism_board_website ) :  ?>
                    <a class="byway-website-property" href="<?php echo $state_tourism_board_website;
					?>" target="_blank" title="Learn more at our website!">Website</a>
				<?php endif; ?>
			
			<?php // If we have a phone URL add a link
				if (  $state_tourism_board_phone ) :  ?>
                    <a class="byway-phone-property" href="tel:<?php echo $state_tourism_board_phone;
					?>" title="Need help? Call our offices."><?php echo $state_tourism_board_phone;?></a>
				<?php endif; ?>
        </div> <!-- .detail-properties -->
    </div> <!-- .partner-digits -->
    
</div> <!-- .departments -->
<?php else : ?>
    <div class="text-sm text-mangotango truncate ...">
		<?php  echo 'NOT LOADED:   sp_state_tourism_board_name ?'; ?>
    </div>
<?php endif; // $state_tourism_board_name
?>
 

 <!-- .detail-subsection // Statewide Byway Partners  -->
<?php endif; //

?>
