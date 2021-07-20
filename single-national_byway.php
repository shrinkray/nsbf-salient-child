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
		
        <div class="row">
           
            <h1 class="entry-title"><?php the_title(); ?></h1>

            
            <ul class="byway-sub-nav">
                <li class="anchor-nav"><a href="#overview" class="active">Overview</a></li>
                <li class="anchor-nav"><a href="#story" class="">Story of the Byway</a></li>
                <li class="anchor-nav"><a href="#directions" class="">Driving Directions</a></li>
                <li class="anchor-nav"><a href="#points" class="">Points of Interest</a></li>
                <li class="anchor-nav"><a href="#itinerary" class="">Itinerary</a></li>
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
        include('page-templates/partials/byway-points.php');

        //
        include('page-templates/partials/byway-itinerary.php');
		?>

    </div><!--/container main-content-->

 </div> <!-- .container-wrap -->


<?php

get_footer();