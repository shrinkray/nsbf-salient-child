<?php
	/**
	 * @template Details Section
	 * @date Jul142021
	 * @author Greg Miller, gregmiller.io
	 * @testedwith
	 */
	// Exit if accessed directly
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
    ?>

<div class="grid grid-cols-1 mb-6 row md:grid-cols-2 lg:grid-cols-2">
    <div class="order-last section details md:order-none lg:order-none ">
       
        <div id="details" class="anchored"></div>
        <h2 class="text-3xl md:text-4xl h2 wayfinder">Details</h2>
        <?php
            
            $designation                        = get_field( 'sb_current_state_designation' );
	        $designation_year                   = get_field('sb_designation_year');
            $length_of_byway_miles              = get_field( 'sb_length_of_byway_miles' );
            $sb_state                           = get_field( 'sb_state' );
            $organization                       = get_field( 'sb_dedicated_byway_organization' );
	
	        
        ?>
        <ul class="detail-list mt-7 mb-7">
            <!--  Setting Year only if it exists, otherwise do not show parenthesis   -->
            <li><span class="label-minor-heading">Designation</span><?php echo $designation;?> <?php
                    echo $designation_year ? '(' . $designation_year . ')' : '' ?></li>
	       
            <li><span class="label-minor-heading">Location</span><?php echo $sb_state;
				?></li>
            <li><span class="label-minor-heading">Length</span><?php echo $length_of_byway_miles;?>&nbsp;miles</li>
        </ul>
		
		
		<?php
			//vars
			$dedicated_byway_organization           = get_field( 'sb_dedicated_byway_organization' );
			$dedicated_byway_organization_website   = get_field( 'sb_dedicated_byway_organization_website' );
			$dedicated_byway_organization_phone     = get_field( 'sb_dedicated_byway_organization_phone' );
		
		?>
        <?php
        // Add if we have a field for a dedicated organization
        if ( $dedicated_byway_organization ) :
            ?>
        <!--                Dedicated organization -->
        <div class="detail-subsection">
            <div class="label-minor-heading">Dedicated Byway Visitor Information</div>
            <div class="detail-organization"><?php echo $dedicated_byway_organization; ?></div>
            <div class="detail-properties">
				
				<?php // If we have a website URL add a link
					if ( $dedicated_byway_organization_website ) :  ?>
                        <a class="byway-website-property" href="<?php echo $dedicated_byway_organization_website;
						?>" target="_blank" title="Learn more at the <?php echo $dedicated_byway_organization; ?> website!">Website</a>
					<?php endif; // website ?>
				
				<?php // If we have a phone URL add a link
					if (  $dedicated_byway_organization_phone ) :  ?>
                        <a class="byway-phone-property" href="tel:<?php echo $dedicated_byway_organization_phone;
						?>" title="Need help? Call our offices."><?php echo $dedicated_byway_organization_phone;?></a>
					<?php endif; // phone ?>
            </div> <!-- .detail-properties -->
        </div> <!-- .detail-subsection -->
        <?php endif; //dedicated_byway_organization
	       
        ?>
<!--        State DOT byway info-->
        <div class="detail-subsection mt-7">
	        <?php
		
		        include_once( 'state-byway-visitor.php' );
	
	        ?>
    
        </div>
    </div> <!-- .row // Details -->
    
    
    <div class="order-first mb-8 section image md:order-none lg:order-none">
	    <?php
		    $image = get_the_post_thumbnail($post_id, "byway_large",  ['alt' => get_the_title()] );
		    if ( ! empty ($image) ) :
			    ?>

        <div class="detail-image">
		    <?php
		
		    echo $image;
		
		    ?>
        </div>
		    <?php
		    else :
	    ?>

        <div class="detail-image placeholder">
        
        </div>
        
	    <?php
	endif;
	    ?>
        
        
        <div class="italic text-right attribution">
            <?php if ( ! empty( have_rows( 'sb_iconic_images' ) ) ) :
                    $first_credit = true;
                    
                    // combo conditional to get just the first record
                    while ( $first_credit && have_rows( 'sb_iconic_images' ) ) : the_row();
           
                    $attribution = get_sub_field( 'image_attribution' );
            // set false to stop from getting the next record
                    $first_credit = false;
            ?>
        
        
            <span class="source"><?php echo $attribution; ?></span>
                <?php if( ! empty( $attribution ) ) : ?>
            <span class="photo-credit"> Photo</span>
                <?php endif; ?>
            <?php
                endwhile; ?>
            <?php else :
	           // no rows found ?>
            <?php endif; ?>
        </div>
    </div> <!-- .section -->
</div> <!-- .row // Details -->
