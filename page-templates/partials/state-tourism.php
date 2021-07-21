<div class="detail-subsection grid grid-cols-1 md:grid-cols-2">
	
	<div class="partner-digits text-center">
		<?php
			// vars
//			$state_dot_name = get_field('nb_state_dot_name');
//			$state_dot_byway_website = get_field('nb_state_dot_byway_website');
//			$state_dot_byway_phone = get_field('nb_state_dot_byway_phone');
			
			$state_dot_name = get_field(' sp_state_department_of_transportation_name');
			$state_dot_byway_website = get_field('sp_state_department_of_transportation_website');
			$state_dot_byway_phone = get_field('sp_state_department_of_transportation_phone');
			
			/**
			 * If the organization exists, add it's name. If the web and or phone properties exist,
			 * render, otherwise do not show them.
			 */
			if ( $state_dot_name ) : ?>
                <div class="detail-organization text-xl font-bold"><?php echo $state_dot_name;?></div>

                <div class="detail-properties">
					<?php // If we have a website URL add a link
						if ( $state_dot_byway_website ) :  ?>
                            <a class="byway-website-property" href="<?php echo $state_dot_byway_website;
							?>" target="_blank" title="Learn more at our website!">Website</a>
						<?php endif; ?>
					
					<?php // If we have a phone URL add a link
						if (  $state_dot_byway_phone ) :  ?>
                            <a class="byway-phone-property" href="tel:<?php echo $state_dot_byway_phone;
							?>" title="Need help? Call our offices."><?php echo $state_dot_byway_phone;?></a>
						<?php endif; ?>
                </div> <!-- .detail-properties -->
			<?php endif; // $state_dot_name
		
		?>
    </div>
    <div class="partner-digits text-center">
        <?php
            
            // vars
//            $state_tourism_board_name = get_field('nb_state_tourism_board_name');
//            $state_tourism_board_website = get_field('nb_state_tourism_board_website');
//            $state_tourism_board_phone = get_field('nb_state_tourism_board_phone');
            
            $state_tourism_board_name = get_field(' sp_state_tourism_board_name');
            $state_tourism_board_website = get_field('sp_state_tourism_board_website');
            $state_tourism_board_phone = get_field('sp_state_tourism_board_phone');
            
            /**
             * If the organization exists, add it's name. If the web and or phone properties exist,
             * render, otherwise do not show them.
             */
            if ( $state_tourism_board_name ) :  ?>
    
                <div class="detail-organization text-xl font-bold"><?php echo $state_tourism_board_name;?></div>
    
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
            <?php endif; // $state_tourism_board_name
        ?>
        
        
    </div>

</div> <!-- .detail-subsection // Statewide Byway Partners  -->