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
 

 <main class="container-wrap">
	<div class="container main-content">

<?php
    // Unused Template Detail Byway Variables
    $state = get_field( 'nb_state' );
   
    $official_byway_name = get_field('nb_official_byway_name');
    $designating_agency = get_field('nb_designating_agency');
    

            ?>
        
		
        <div class="mb-0 row md:mb-4 lg:mb-14">
           
            <h1 class="text-3xl md:text-5xl entry-title"><?php the_title(); ?></h1>
            
            <ul class="mt-3 mb-10 byway-sub-nav">
                <li id="item-overview" class="hidden anchor-nav"><a href="#overview" class="" title="Trip
                Overview">Overview</a></li>
                <li id="item-story" class="hidden anchor-nav"><a href="#story" class="" title="Story of the
                Byway">Story</a></li>
                <li id="item-directions" class="hidden anchor-nav"><a href="#directions" class="" title="Driving
                Directions">Directions</a></li>
                <li id="item-points" class="hidden anchor-nav"><a href="#points" class="" title="Points of
                Interest">Points of Interest</a></li>
                <li id="item-itinerary" class="hidden anchor-nav" title="Itinerary" ><a
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
        <div class="update-data">
            <p><a href="<?php echo site_url( '/update/', 'https' ); ?>" class="bell" title="Help our foundation maintain accurate information about
<?php echo $official_byway_name; ?>."><i class="fa fa-bell"></i>&nbsp;Update</a> this byway information
                today!</p>
        </div>
    </div><!--/container main-content-->

 </main> <!-- .container-wrap -->


<?php

get_footer();
