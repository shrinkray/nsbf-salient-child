<?php
/**
 * Template Name: National Byway Detail
 *
 * @package Salient WordPress Theme
 * @version 10.5
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
 

 <div class="container-wrap">
	<div class="container main-content">
<?php
            // Unused Template Detail Byway Variables
	        $state = get_field( 'nb_state' );
            $designation_year = get_field('nb_designation_year');
            $official_byway_name = get_field('nb_official_byway_name');
            $designating_agency = get_field('nb_designating_agency');

            ?>
		
        <div class="row">
           
            <h1 class="entry-title"><?php the_title(); ?></h1>

            <?php
			// Main content loop.
	            the_post();
	
	            get_the_post_thumbnail();
            ?>
            <ul class="byway-sub-nav">
                <li class="anchor-nav"><a href="#overview" class="active">Overview</a></li>
                <li class="anchor-nav"><a href="#story" class="">Story of the Byway</a></li>
                <li class="anchor-nav"><a href="#directions" class="">Driving Directions</a></li>
                <li class="anchor-nav"><a href="#points" class="">Points of Interest</a></li>
            </ul>

        </div> <!-- .row // H1 & Anchor Nav -->

        <div class="row">
            <div id="details" class="anchored"></div>
            <h2 class="h2 wayfinder">Details</h2>
        </div> <!-- .row // Detail H2 -->
    
        <div class="row">
            <div class="section">
	            <?php
		
		            $intrinsic_quality                  = get_field( 'nb_intrinsic_quality' );
		            $state_or_states_that_contain_byway = get_field( 'nb_state_or_states_that_contain_byway' );
		            $designation                        = get_field( 'nb_current_national_designation' );
		            $length_of_byway_miles              = get_field( 'nb_length_of_byway_miles' );
	
	            ?>
                <ul>
                    <li><span class="label-minor-heading">Designation</span><?php echo $designation;?></li>
                    <li><span class="label-minor-heading">Intrinsic Qualities</span><?php echo $intrinsic_quality;
						?></li>
                    <li><span class="label-minor-heading">Location</span><?php echo $state_or_states_that_contain_byway;
						?></li>
                    <li><span class="label-minor-heading">Length</span><?php echo $length_of_byway_miles;?></li>
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

                </div> <!-- .detail-subsection // Statewide Byway Partners  -->
            </div> <!-- .section -->
        </div> <!-- .row // Details -->
		
		
		
        <div class="row"><!-- overview  -->
            <div class="section">
                <div class="boxed-subsection">
	                <?php
		                //vars
		                $byway_synopsis = get_field( 'nb_byway_synopsis' );
	
	                ?>
                    <div id="overview" class="anchored"></div>
                    <h2 class="h2 overview">Overview</h2>
					<?php echo $byway_synopsis;  ?>
                </div> <!-- .boxed-subsection -->
            </div>
        </div> <!-- overview row -->

        <!-- ===================== -->

        <div class="row"> <!-- Local Byway Partners -->

            <div class="section">
                <div class="detail-subsection"> <!-- Byway Partners -->
                    <div class="label-minor-heading">Local Byway Partners</div>
					<?php
						// Check this Array to see if rows exists.
						if( have_rows( 'nb_local_partner_organization' ) ):
					
					    ?>

                    <ul>
	
	                <?php
						// Loop through rows.
						while( have_rows( 'nb_local_partner_organization' ) ) : the_row();
						// set vars
						$local_partner_organization = get_field('nb_local_partner_organization');
						$partner_organization = get_sub_field('nb_po_name');
						$partner_organization_phone = get_sub_field('nb_po_phone');
						$partner_organization_website = get_sub_field('nb_po_website');
					
					?>

                        <li class="item">
                            <div class="detail-organization"><?php echo $partner_organization; ?></div>
    
                            <div class="detail-properties">
                                <?php
                                    if ( $partner_organization_website ) :  ?>
                                        <a class="byway-website-property" href="<?php echo $partner_organization_website;
                                        ?>" target="" title="Learn more at our website!">Website</a>
                                    <?php endif; // opts out if no PO website URL
                
                                    if ( $partner_organization_phone ) :  ?>
                                        <a class="byway-phone-property" href="tel:<?php echo $partner_organization_phone;
                                        ?>" title="Need help? Call our offices."><?php echo $partner_organization_phone;?></a>
                                    <?php endif; // opts out if no PO phone  ?>
    
    
    
                            </div> <!-- .detail-properties -->
                        </li>
                    
						<?php endwhile; // end of nb_local_partner_organization
	                ?>

                    </ul>
						
						<?php
						endif;
					?>
                </div> <!-- .detail-subsection   // Byway Partners -->
            </div> <!-- .section -->

        </div> <!-- byway partner row -->

        <!-- ===================== -->  
		
        <div class="row"> <!-- Story of the Byway + Driving Directions -->

            <div class="section">
                <div class="col">
                    <div id="story" class="anchored"></div>
                    <h2 class="h2 story">Story of the Byway</h2>
	
	                <?php
	                //vars
	                $byway_story        = get_field( 'nb_byway_story' );

			           if ( $byway_story ) :  ?>
				           <?php echo $byway_story;  ?>
			           <?php endif; // end
		           ?>
               </div><!-- .col // story of byway -->

               <div class="col">
                   <div id="directions" class="anchored"></div>
                   <h2 class="h2 driving">Driving Directions</h2>
		
		           <?php
			           $driving_directions = get_field( 'nb_driving_directions_route_description' );
			           
			           if ( $driving_directions ) :  ?>
				           <?php echo $driving_directions;  ?>
			           <?php endif; // end
		           ?>
               </div> <!-- .col // directions -->
           </div> <!-- .section -->
        </div> <!-- .row // story of byway + directions -->

        <div class="row">
            <div class="section">

                <div id="points" class="anchored"></div>
                <h2 class="h2 poi">Points of Interest</h2>
	            <?php
              
		
		            // Check rows exists.
		            if ( have_rows( 'nb_point_of_interest' ) ):
			            ?>

                    <ul>
			            <?php
			            // Loop through rows.
			            while ( have_rows( 'nb_point_of_interest' ) ) : the_row();
				            // vars
				            
				            $poi_name = get_sub_field('nb_poi_name');
				            $poi_brief_description = get_sub_field('nb_poi_brief_description');
				            $poi_map_url = get_sub_field('nb_poi_map_url');
				            $poi_website = get_sub_field('nb_poi_website');
		                    ?>
                            <li class="item">
                                <div class="item-heading"><?php echo $poi_name; ?></div>
                                <div><?php echo $poi_brief_description; ?></div>
                                <div class="detail-properties">
                                    <?php
            
                                        if ( $poi_map_url ) : ?>
                                            <a class="byway-website-property"
                                               href="<?php echo $poi_map_url;
                                               ?>" target="_blank" title="Explore!">Map</a>
                                        <?php endif; // opts out if no PO website URL
            
                                        if ( $poi_website ) :  ?>
                                            <a class="byway-website-property" href="<?php echo $$poi_website;
                                            ?>" target="_blank" title="Learn more at our website!">Website</a>
                                        <?php endif; // opts out if no PO website URL
        
                                    ?>
                                </div>
                            
                            </li>
			            <?php endwhile; // nb_point_of_interest
			            ?>

                    </ul>
		
		            <?php
		            endif; // nb_point_of_interest
	            ?>

            </div> <!-- .section Points of Interest -->
        </div> <!-- .row  // POI-->

        <div class="row">
            <div class="section">
                <div id="itinerary" class="anchored"></div>
                <h2 class="h2 itinerary">Itinerary</h2>
	            <?php
		
		            // Check rows exists.
		            if ( have_rows( 'nb_itinerary' ) ):
			            ?>

                <ul>
			            <?php
				           
			            // Loop through rows.
			            while ( have_rows( 'nb_itinerary' ) ) : the_row();
		            //vars
				            $itinerary_name = get_sub_field('nb_itinerary_name');
				            $itinerary_description = get_sub_field('nb_itinerary_brief_description');
				            ?>
                
                    <li>
                        <div class=""><?php echo $itinerary_name; ?></div>
                        <div class=""><?php echo $itinerary_description; ?></div>
                    </li>
			
			            <?php endwhile;
			            ?>

                </ul>
	
	                <?php
		            endif;
	
	            ?>
            </div> <!-- .section  -->
        </div> <!-- .row // Itinerary -->



<?php
	//		wp_link_pages();

		?>


    </div><!--/container main-content-->

 </div> <!-- .container-wrap -->


<?php

get_footer(); ?>