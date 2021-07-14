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
            // Template Detail Byway Variables
            
            $intrinsic_quality = get_field('nb_intrinsic_quality');
            $state = get_field('nb_state');
            $state_or_states_that_contain_byway = get_field('nb_state_or_states_that_contain_byway');
            $designation = get_field('nb_current_national_designation');
            $designation_year = get_field('nb_designation_year');
            $official_byway_name = get_field('nb_official_byway_name');
            $dedicated_byway_organization = get_field('nb_dedicated_byway_organization');
            $dedicated_byway_organization_url = get_field('nb_dedicated_byway_organization_url');
            $dedicated_byway_organization_phone = get_field('nb_dedicated_byway_organization_phone');
            
            $state_dot_name = get_field('nb_state_dot_name');
            $state_dot_byway_url = get_field('nb_state_dot_byway_url');
            $state_dot_byway_phone = get_field('nb_state_dot_byway_phone');
            $state_tourism_board_name = get_field('nb_state_tourism_board_name');
            $state_tourism_board_url = get_field('nb_state_tourism_board_url');
            $state_tourism_board_phone = get_field('nb_state_tourism_board_phone');
            
            $designating_agency = get_field('nb_designating_agency');
            $length_of_byway_miles = get_field('nb_length_of_byway_miles');
            
            $byway_synopsis = get_field('nb_byway_synopsis');
            
            $byway_story = get_field('nb_byway_story');
            $driving_directions = get_field('nb_driving_directions_route_description');
            
            $point_of_interest = get_field('nb_point_of_interest');
            $poi_name = get_sub_field('nb_poi_name');
            $poi_brief_description = get_sub_field('nb_poi_brief_description');
            $poi_map_url = get_sub_field('nb_poi_map_url');
            $poi_website = get_sub_field('nb_poi_website');
            
            $local_partner_organization = get_field('nb_local_partner_organization');
            $partner_organization = get_sub_field('nb_po_name');
            $partner_organization_phone = get_sub_field('nb_po_phone');
            $partner_organization_website = get_sub_field('nb_po_website');
            
            $itinerary = get_field('nb_itinerary');
            $itinerary_name = get_sub_field('nb_itinerary_name');
            $itinerary_description = get_sub_field('nb_itinerary_brief_description'); ?>
		
        <div class="row">
           
            <h1 class="entry-title"><?php the_title(); ?></h1>

            <?php
			// Main content loop.
	            the_post();
	
	            get_the_post_thumbnail();
            ?>
            <ul class="byway-sub-nav">
                <li class="anchor-nav"><a href="#overview" class="active">Overview</a></li>
                <li class="anchor-nav"><a href="#story" class="">Story of the Byways</a></li>
                <li class="anchor-nav"><a href="#directions" class="">Driving Directions</a></li>
                <li class="anchor-nav"><a href="#points" class="">Points of Interest</a></li>
            </ul>

        </div> <!-- .row // H1 & Anchor Nav -->

        <div class="row">
            <div id="details" class="anchored"></div>
            <h2 class="h2 wayfinder">Details</h2>
        </div>
        <div class="row">
            <div class="section">
                <ul>
                    <li><span class="label-minor-heading">Designation</span><?php echo $designation;?></li>
                    <li><span class="label-minor-heading">Intrinsic Qualities</span><?php echo $intrinsic_quality;
						?></li>
                    <li><span class="label-minor-heading">Location</span><?php echo $state_or_states_that_contain_byway;
						?></li>
                    <li><span class="label-minor-heading">Length</span><?php echo $length_of_byway_miles;?></li>
                </ul>

                <!--                Dedicated organization -->
                <div class="detail-subsection">
                    <div class="label-minor-heading">Byway Visitor Information</div>
                    <div class="detail-organization"><?php echo $dedicated_byway_organization ;?></div>
                    <div class="detail-properties">
						
						<?php // If we have a website URL add a link
							if ( $dedicated_byway_organization_website ) :  ?>
                                <a class="byway-website-property" href="<?php echo $dedicated_byway_organization_website;
								?>" target="_parent" title="Learn more at our website!">Website</a>
							<?php endif; ?>
						
						<?php // If we have a phone URL add a link
							if (  $dedicated_byway_organization_phone ) :  ?>
                                <a class="byway-phone-property" href="tel:<?php echo $dedicated_byway_organization_phone;
								?>" title="Need help? Call our offices."><?php echo $dedicated_byway_organization_phone;?></a>
							<?php endif; ?>

                    </div> <!-- .detail-organization -->

                </div> <!-- .detail-subsection -->



                <div class="detail-subsection">
                    <div class="label-minor-heading">Statewide Byway Partners</div>
					
					<?php
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
										?>" target="_parent" title="Learn more at our website!">Website</a>
									<?php endif; ?>
								
								<?php // If we have a phone URL add a link
									if (  $state_dot_byway_phone ) :  ?>
                                        <a class="byway-phone-property" href="tel:<?php echo $state_dot_byway_phone;
										?>" title="Need help? Call our offices."><?php echo $state_dot_byway_phone;?></a>
									<?php endif; ?>
                            </div> <!-- .detail-properties -->
						<?php endif; // $state_dot_name
						
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
										?>" target="_parent" title="Learn more at our website!">Website</a>
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

        <div class="row">
            <div class="section">
                <div class="boxed-subsection">
                    <div id="overview" class="anchored"></div>
                    <h2 class="h2 overview">Overview</h2>
		            <?php echo $byway_synopsis;  ?>
                </div> <!-- .boxed-subsection -->
            </div>
        </div> <!-- overview row -->

        <div class="row"> <!-- Local Byway Partners -->

            <div class="section">
                <div class="detail-subsection"> <!-- Byway Partners -->
                    <div class="label-minor-heading">Local Byway Partners</div>
		            <?php
			            // Check this Array to see if rows exists.
			            if( have_rows( 'nb_local_partner_organization' ) ):
			            // Loop through rows.
			            while( have_rows( 'nb_local_partner_organization' ) ) : the_row();
			            // set vars
			            $local_partner_organization = get_field('nb_local_partner_organization');
			            $partner_organization = get_sub_field('nb_po_name');
			            $partner_organization_phone = get_sub_field('nb_po_phone');
			            $partner_organization_website = get_sub_field('nb_po_website');
		            ?>

                    <div class="detail-organization"><?php echo $partner_organization; ?></div>

                    <div class="detail-properties">
			            <?php
				            if ( $partner_organization_website ) :  ?>
                                <a class="byway-website-property" href="<?php echo $partner_organization_website;
					            ?>" target="_parent" title="Learn more at our website!">Website</a>
				            <?php endif; // opts out if no PO website URL
				
				            if ( $partner_organization_phone ) :  ?>
                                <a class="byway-phone-property" href="tel:<?php echo $partner_organization_phone;
					            ?>" title="Need help? Call our offices."><?php echo $partner_organization_phone;?></a>
				            <?php endif; // opts out if no PO phone  ?>
			
			            <?php endwhile; // end of nb_local_partner_organization
				            endif;
			            ?>

                    </div> <!-- .detail-properties -->

                </div> <!-- .detail-subsection   // Byway Partners -->
            </div> <!-- .section -->

        </div> <!-- byway partner row -->

        <div class="row"> <!-- Story of the Byway + Driving Directions -->

           <div class="section">
               <div class="col">
                   <div id="story" class="anchored"></div>
                   <h2 class="h2 story">Story of the Byway</h2>
		
		           <?php
			           if ( $byway_story ) :  ?>
				           <?php echo $byway_story;  ?>
			           <?php endif; // end
		           ?>
               </div><!-- .col // story of byway -->

               <div class="col">
                   <div id="directions" class="anchored"></div>
                   <h2 class="h2 driving">Driving Directions</h2>
		
		           <?php
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
                


            </div> <!-- .section Points of Interest -->
        </div> <!-- .row  -->



     <div id="itinerary" class="anchored"></div>
     <h2 class="h2 itinerary">Itinerary</h2>



     <div>[ Column C ] <strong>Intrinsic Qualities:</strong> <?php echo $intrinsic_quality;?></div>
     <div>[ Column D ] <strong>State:</strong> <?php echo $state;?></div>
     <div style="margin-bottom: 25px;">[ Column E ] <strong>States:</strong> <?php echo $state_or_states_that_contain_byway;?></div>
     <div>[ Column F ] [ Post Title ] <strong>Official Byway Name:</strong> <?php echo $official_byway_name;?></div>


     <div>[ Column G ] <strong>Designation:</strong> <?php echo $designation;?></div>



     <div style="margin-bottom: 25px;">[ Column H ] <strong>Original/Current Designation Year:</strong> <?php echo $designation_year;?></div>



     <div>[ Column I ] <strong>Official Byway Organization:</strong> <?php echo $dedicated_byway_organization ;?></div>



     <div>[ Column J ] <strong>Official Byway Organization Website:</strong> <?php echo $dedicated_byway_organization_website;?></div>



     <div style="margin-bottom: 25px;">[ Column K ] <strong>Official Byway Organization Phone:</strong> <?php echo $dedicated_byway_organization_phone;?></div>



     <div>[ Column L ] <strong>State DOT Name:</strong> <?php echo $state_dot_name;?></div>



     <div>[ Column M ] <strong>State DOT Website:</strong> <?php echo $state_dot_byway_website;?></div>



     <div style="margin-bottom: 25px;">[ Column N ] <strong>State DOT Phone:</strong> <?php echo $state_dot_byway_phone;?></div>



     <div>[ Column O ] <strong>State Tourism Board Name:</strong> <?php echo $state_tourism_board_name;?></div>



     <div>[ Column P ] <strong>State Tourism Board Website:</strong> <?php echo $state_tourism_board_website;?></div>



     <div style="margin-bottom: 25px;">[ Column Q ] <strong>State Tourism Board Phone:</strong> <?php echo $state_tourism_board_phone;?></div>



     <div style="margin-bottom: 25px;">[ Column R ] <strong>Designating Agency:</strong> <?php echo $designating_agency;?></div>



     <div style="margin-bottom: 25px;">[ Column S ] <strong>Length of Byway:</strong> <?php echo $length_of_byway_miles;?></div>



     <div style="margin-bottom: 25px;">[ Column T ] [ Excerpt ] <strong>Byway Synopsis:</strong> <?php echo $byway_synopsis;?></div>



     <div style="margin-bottom: 25px;">[ Column U ] <strong>Byway Story:</strong> <?php echo $byway_story;?></div>



     <div style="margin-bottom: 25px;">[ Column V ] <strong>Driving Directions:</strong> <?php echo $driving_directions;?></div>
	
	
	 <?php
		
		 // Check rows exists.
		 if( have_rows('nb_point_of_interest') ):
			
			 // Loop through rows.
			 while( have_rows('nb_point_of_interest') ) : the_row(); ?>

                 <div>[ Columns W - CD ] <strong>Point of Interest:</strong> <?php the_sub_field('nb_poi_name');?></div>
                 <div><?php the_sub_field('nb_poi_brief_description');?></div>
                 <div><?php the_sub_field('nb_poi_map_url');?></div>
                 <div style="margin-bottom: 10px;"><?php the_sub_field('nb_poi_website');?></div>
			
			 <?php endwhile;
		
		 endif;
		
		
		
		
		
		
		 // Check rows exists.
		 if( have_rows('nb_itinerary') ):
			
			 // Loop through rows.
			 while( have_rows('nb_itinerary') ) : the_row(); ?>

                 <div>[ Columns DC - DH ] <strong>Itineraries:</strong> <?php the_sub_field('nb_itinerary_name');?></div>
                 <div style="margin-bottom: 10px;"><?php the_sub_field('nb_itinerary_brief_description');?></div>
			
			 <?php endwhile;
		
		 endif;
		 // @todo where does this go?
//		 while ( have_posts() ) :
//				  endwhile;
//			if ( have_posts() ) :
//			 endif;
	
	                    if( have_rows('nb_local_partner_organization') ):
		
		                    // Loop through rows.
		                    while( have_rows('nb_local_partner_organization') ) : the_row(); ?>

                                <div>[ Columns CE - DB ] <strong>Partner Organizations:</strong> <?php the_sub_field('nb_po_name');?></div>
                                <div><?php the_sub_field('nb_po_phone');?></div>
                                <div style="margin-bottom: 10px;"><?php the_sub_field('nb_po_website');?></div>
		
		                    <?php endwhile;
	
	                    endif;

			wp_link_pages();
			
		?>


	</div><!--/container main-content-->

 </div> <!-- .container-wrap -->

<?php

get_footer(); ?>