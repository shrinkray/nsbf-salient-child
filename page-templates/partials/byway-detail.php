<?php
	/**
	 * @template Details Section
	 * @date Jul142021
	 * @author Greg Miller, gregmiller.io
	 * @testedwith
	 */
	?>

<div class="row">
    <div id="details" class="anchored"></div>
    <h2 class="h2 wayfinder">Details</h2>
</div> <!-- .row // Detail H2 -->
    
<div class="row grid grid-cols-2">
    <div class="section">
        <?php

            $intrinsic_quality                  = get_field( 'nb_intrinsic_quality' );
            $state_or_states_that_contain_byway = get_field( 'nb_state_or_states_that_contain_byway' );
            $designation                        = get_field( 'nb_current_national_designation' );
	        $designation_year                   = get_field('nb_designation_year');
            $length_of_byway_miles              = get_field( 'nb_length_of_byway_miles' );

        ?>
        <ul>
            <li><span class="label-minor-heading">Designation</span><?php echo $designation;?> (<?php echo $designation_year ?>)</li>
            <li><span class="label-minor-heading">Intrinsic Qualities</span><?php echo $intrinsic_quality;
				?></li>
            <li><span class="label-minor-heading">Location</span><?php echo $state_or_states_that_contain_byway;
				?></li>
            <li><span class="label-minor-heading">Length</span><?php echo $length_of_byway_miles;?>&nbsp;miles</li>
        </ul>
		
		
		<?php
			//vars
			$dedicated_byway_organization       = get_field( 'nb_dedicated_byway_organization' );
			$dedicated_byway_organization_url   = get_field( 'nb_dedicated_byway_organization_url' );
			$dedicated_byway_organization_phone = get_field( 'nb_dedicated_byway_organization_phone' );
		
		?>
    <?php
        // Add if we have a field for a dedicated organization
        if ( $dedicated_byway_organization ) :
            
            ?>
        <!--                Dedicated organization -->
        <div class="detail-subsection">
            <div class="label-minor-heading">Byway Visitor Information</div>
            <div class="detail-organization"><?php echo $dedicated_byway_organization; ?></div>
            <div class="detail-properties">
				
				<?php // If we have a website URL add a link
					if ( $dedicated_byway_organization_website ) :  ?>
                        <a class="byway-website-property" href="<?php echo $dedicated_byway_organization_website;
						?>" target="_blank" title="Learn more at our website!">Website</a>
					<?php endif; ?>
				
				<?php // If we have a phone URL add a link
					if (  $dedicated_byway_organization_phone ) :  ?>
                        <a class="byway-phone-property" href="tel:<?php echo $dedicated_byway_organization_phone;
						?>" title="Need help? Call our offices."><?php echo $dedicated_byway_organization_phone;?></a>
					<?php endif; ?>

            </div> <!-- .detail-organization -->

        </div> <!-- .detail-subsection -->
    <?php endif; //dedicated organization
    ?>


        <div class="detail-subsection">
            <div class="label-minor-heading">Statewide Byway Partners</div>
			
			<div class="departments grid grid-cols-1 md:grid-cols-2">
                <div class="partner-digits">
					<?php
						// vars
						$state_dot_name = get_field('nb_state_dot_name');
						$state_dot_byway_url = get_field('nb_state_dot_byway_url');
						$state_dot_byway_phone = get_field('nb_state_dot_byway_phone');
						
						/**
						 * If the organization exists, add it's name. If the web and or phone properties exist,
						 * render, otherwise do not show them.
						 */
						if ( $state_dot_name ) : ?>
                            <div class="detail-organization"><?php echo $state_dot_name;?></div>

                            <div class="detail-properties">
								<?php // If we have a website URL add a link
									if ( $state_dot_byway_url ) :  ?>
                                        <a class="byway-website-property" href="<?php echo $state_dot_byway_url;
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
                </div> <!-- .partner-digits -->

                <div class="partner-digits">
					<?php
						// vars
						$state_tourism_board_name = get_field('nb_state_tourism_board_name');
						$state_tourism_board_url = get_field('nb_state_tourism_board_url');
						$state_tourism_board_phone = get_field('nb_state_tourism_board_phone');
						
						/**
						 * If the organization exists, add it's name. If the web and or phone properties exist,
						 * render, otherwise do not show them.
						 */
						if ( $state_tourism_board_name ) :  ?>

                            <div class="detail-organization"><?php echo $state_tourism_board_name;?></div>

                            <div class="detail-properties">
								<?php // If we have a website URL add a link
									if ( $state_tourism_board_url ) :  ?>
                                        <a class="byway-website-property" href="<?php echo $state_tourism_board_url;
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
                </div> <!-- .partner-digits -->
            </div> <!-- .departments -->
            
	
	        

        </div> <!-- .detail-subsection // Statewide Byway Partners  -->
    </div> <!-- .section -->
    <div class="section">
        <div class="container mx-auto border-4 border-dotted"></div>
    </div> <!-- .section -->
</div> <!-- .row // Details -->