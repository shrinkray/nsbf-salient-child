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

		<div class="row">
            <h1 class="entry-title"><?php the_title(); ?> HELLO</h1>
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
            $itinerary_description = get_sub_field('nb_itinerary_brief_description');
            
			// Main content loop.
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
					<?php
					get_the_post_thumbnail();
					?>
                    <ul class="byway-subnav">
                        <li class="anchor-nav"><a href="#overview" class="active">Overview</a></li>
                        <li class="anchor-nav"><a href="#story" class="">Story of the Byways</a></li>
                        <li class="anchor-nav"><a href="#directions" class="">Driving Directions</a></li>
                        <li class="anchor-nav"><a href="#points" class="">Points of Interest</a></li>
                    </ul>
                    <div id="details" class="anchored"></div>
                    <h2 class="h2 wayfinder">Details</h2>
                    
                    <div id="overview" class="anchored"></div>
                    <h2 class="h2 overview">Overview</h2>
                    
                    <div id="story" class="anchored"></div>
                    <h2 class="h2 story">Story of the Byway</h2>
                   
                    <div id="directions" class="anchored"></div>
                    <h2 class="h2 driving">Driving Directions</h2>
                    
                    <div id="points" class="anchored"></div>
                    <h2 class="h2 poi">Points of Interest</h2>
                    
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
                    if( have_rows('nb_local_partner_organization') ):

                    // Loop through rows.
                    while( have_rows('nb_local_partner_organization') ) : the_row(); ?>

                    <div>[ Columns CE - DB ] <strong>Partner Organizations:</strong> <?php the_sub_field('nb_po_name');?></div>
                    <div><?php the_sub_field('nb_po_phone');?></div>
                    <div style="margin-bottom: 10px;"><?php the_sub_field('nb_po_website');?></div>

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

                        
				  endwhile;
			 endif; 

			wp_link_pages();
			
//			nectar_hook_after_content();

	// Bottom social location for default minimal post header style.
//			if ( 'default_minimal' === $blog_header_type &&
//			'fixed' !== $blog_social_style &&
//			'post' === get_post_type() ) {
//
//				get_template_part( 'includes/partials/single-post/default-minimal-bottom-social' );
//
//			}
//
//			if ( true === $fullscreen_header && get_post_type() === 'post' ) {
//				// Bottom meta bar when using fullscreen post header.
//				get_template_part( 'includes/partials/single-post/post-meta-bar-ascend-skin' );
//			}
//
//			if ( 'ascend' !== $theme_skin ) {
//
//				// Original/Material Theme Skin Author Bio.
//				if ( ! empty( $nectar_options['author_bio'] ) &&
//					$nectar_options['author_bio'] === '1' &&
//					'post' == get_post_type() ) {
//					 get_template_part( 'includes/partials/single-post/author-bio' );
//
//				}
//
//			}
//
//			?>
<!---->
<!--		</div>/post-area-->
<!--			-->
<!--			--><?php //if ( 'std-blog-fullwidth' !== $blog_type && '1' !== $hide_sidebar ) { ?>
<!--				-->
<!--				<div id="sidebar" data-nectar-ss="--><?php //echo esc_attr( $enable_ss ); ?><!--" class="col span_3 col_last">-->
<!--					--><?php //get_sidebar(); ?>
<!--				</div>/sidebar-->
<!--				-->
<!--			--><?php //} ?>
<!--				-->
<!--		</div>/row-->
<!---->
<!--		<div class="row">-->
<!---->
<!--			--><?php //
//
//				// Pagination/Related Posts.
//				nectar_next_post_display();
//				nectar_related_post_display();
//
//				// Ascend Theme Skin Author Bio.
//				if ( ! empty( $nectar_options['author_bio'] ) &&
//					'1' === $nectar_options['author_bio'] &&
//					'ascend' === $theme_skin &&
//					'post' == get_post_type() ) {
//					get_template_part( 'includes/partials/single-post/author-bio-ascend-skin' );
//				}
//
//			?>
<!---->
<!--			<div class="comments-section" data-author-bio="--><?php //if ( ! empty( $nectar_options['author_bio'] ) && $nectar_options['author_bio'] === '1' ) { echo 'true'; } else { echo 'false'; } ?><!--">-->
<!--				--><?php //comments_template(); ?>
<!--			</div>   -->
<!---->
<!--		</div>-->

	</div><!--/container-->

 </div> <!-- .container-wrap -->

<?php //if ( 'fixed' === $blog_social_style ) {
//	  // Social sharing buttons.
//		if( function_exists('nectar_social_sharing_output') ) {
//			nectar_social_sharing_output('fixed');
//		}
//}

get_footer(); ?>