<?php
	/**
	 * @template Details Section
	 * @date Jul142021
	 * @author Greg Miller, gregmiller.io
	 * @testedwith
	 */
	?>

<div class="row grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 mb-6">
    <div class="section details order-last md:order-none lg:order-none ">
        <div id="details" class="anchored"></div>
        <h2 class="text-3xl md:text-4xl h2 wayfinder">Details</h2>
        <?php

//            $intrinsic_quality                  = get_field( 'sb_intrinsic_quality' );
            $state_or_states_that_contain_byway = get_field( 'sb_state_or_states_that_contain_byway' );
            $designation                        = get_field( 'sb_current_state_designation' );
	        $designation_year                   = get_field('sb_designation_year');
            $length_of_byway_miles              = get_field( 'sb_length_of_byway_miles' );
            $sb_state                           = get_field( 'sb_state' );
            $organization              = get_field( 'sb_dedicated_byway_organization' );
	
	        
        ?>
        <ul class="detail-list mt-7 mb-7">
            <!--  Setting Year only if it exists, otherwise do not show parenthesis   -->
            <li><span class="label-minor-heading">Designation</span><?php echo $designation;?> <?php
                    echo $designation_year? '(' . $designation_year . ')' : '' ?></li>
        
            <li><span class="label-minor-heading">Location</span><?php echo $sb_state;
				?></li>
            <li><span class="label-minor-heading">Length</span><?php echo $length_of_byway_miles;?>&nbsp;miles</li>
        </ul>
		
		
		<?php
			//vars
			$dedicated_byway_organization       = get_field( 'sb_dedicated_byway_organization' );
			$dedicated_byway_organization_website   = get_field( 'sb_dedicated_byway_organization_website' );
			$dedicated_byway_organization_phone = get_field( 'sb_dedicated_byway_organization_phone' );
		
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
        
        <div class="detail-subsection mt-7">
            <div class="label-minor-heading">Statewide Byway Partners</div>
			
			<div class="departments grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-2">
                <div class="partner-digits">
					<?php
					// vars
						$state_dot_name = get_field('sp_state_department_of_transportation_name');
						$state_dot_byway_website = get_field('pb_state_department_of_transportation_website');
						$state_dot_byway_phone = get_field('sp_state_department_of_transportation_phone');
						
						/**
						 * If the organization exists, add it's name. If the web and or phone properties exist,
						 * render, otherwise do not show them.
						 */
						if ( $state_dot_name ) : ?>
                            <div class="detail-organization"><?php echo $state_dot_name;?></div>

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
                            </div>
                            <!-- .detail-properties -->
                            <?php else : ?>
                           <div class="text-sm text-mangotango truncate ...">
	                           <?php  echo 'missing sp_state_department_of_transportation_name ?'; ?>
                           </div>
						<?php endif; // $state_dot_names
					?>
                </div> <!-- .partner-digits -->

                <div class="partner-digits">
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
						<?php else : ?>
                            <div class="text-sm text-mangotango truncate ...">
								<?php  echo 'missing sp_state_tourism_board_name ?'; ?>
                            </div>
						<?php endif; // $state_tourism_board_name
					?>
                </div> <!-- .partner-digits -->
            </div> <!-- .departments -->
            
	
	        

        </div> <!-- .detail-subsection // Statewide Byway Partners  -->

    </div> <!-- .section -->
    
    
	<?php if ( ! empty( have_rows( 'sb_iconic_images' ) ) ) :
		$first_credit = true;
		
		// combo conditional to get just the first record
		while ( $first_credit && have_rows( 'sb_iconic_images' ) ) : the_row();
            $img_title = get_sub_field( 'image_title' );
            $img_alt = get_sub_field( 'image_alt_text' );
            $attr = get_sub_field( 'image_attribution' );
            $img_url = get_sub_field( 'image_url' );
            
	?>
    <div class="section image order-first mb-8 md:order-none lg:order-none">
        <div class="detail-image">
	       
			<?php
				
				$image = get_the_post_thumbnail( $post_id, "byway_large" );
				echo $image;
				echo $img_title;
//			?>
        </div>
        <div class="attribution text-right italic">
            <?php
            // set false to stop from getting the next record
            $first_credit = false;
            ?>
            <span class="source"><?php echo $attr; ?></span>
            <?php if( ! empty( $attr ) ) : ?>
                <span class="photo-credit"></span>
            <?php endif; //
            ?>
				
        </div>
    </div> <!-- .section -->
		<?php
		endwhile; ?>
	<?php else : ?>
		<?php // no rows found ?>
	<?php endif; ?>
</div> <!-- .row // Details -->
