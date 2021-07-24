<?php
/**
 * Template Name: National Byway Detail
 *
 * @package Salient WordPress Theme
 * @version 10.5
 * @filename single-national-byway-page.php
 * @description This represents the details of one national byway.
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
   
    $official_byway_name = get_field('nb_official_byway_name');
    $designating_agency = get_field('nb_designating_agency');
    

            ?>
        
		
        <div class="row mb-0 md:mb-4 lg:mb-14">
           
            <h1 class="text-3xl md:text-5xl entry-title"><?php the_title(); ?></h1>
            
            <ul class="byway-sub-nav mt-3 mb-10">
                <li id="item-overview" class="anchor-nav hidden"><a href="#overview" class="" title="Trip
                Overview">Overview</a></li>
                <li id="item-story" class="anchor-nav hidden"><a href="#story" class="" title="Story of the
                Byway">Story</a></li>
                <li id="item-directions" class="anchor-nav hidden"><a href="#directions" class="" title="Driving
                Directions">Directions</a></li>
                <li id="item-points" class="anchor-nav hidden"><a href="#points" class="" title="Points of
                Interest">Points of Interest</a></li>
                <li id="item-itinerary" class="anchor-nav hidden" title="Itinerary" ><a
                            href="#itinerary" >Itinerary</a></li>

            </ul>
        </div> <!-- .row // H1 & Anchor Nav -->
		
		
		<?php
		//
        include('page-templates/partials/byway-detail.php');
        
		//
		include('page-templates/partials/byway-overview.php');

		//
		include('page-templates/partials/byway-local-partners.php');
	
        //
        include('page-templates/partials/byway-story.php');
        
        //
        include('page-templates/partials/byway-directions.php');

        //
        include('page-templates/partials/byway-points.php');

        //
        include('page-templates/partials/byway-itinerary.php');
		?>

    </div><!--/container main-content-->

 </div> <!-- .container-wrap -->


<?php

get_footer();