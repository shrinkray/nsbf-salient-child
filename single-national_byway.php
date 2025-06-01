<?php
/**
 * Template Name: National Byway Information Page.
 *
 * @package Salient WordPress Theme
 * @version 10.5
 * @filename single-national-byway-page.php
 * @description This represents the details of one national byway.
 */

 // phpcs:disable WordPress.Files.FileName

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) :
	exit;
endif;

get_header();
?>

<main class="container-wrap">
	<div class="container main-content">

<?php
	// Unused Template Detail Byway Variables.
	$state               = get_field( 'nb_state' );
	$official_byway_name = get_field( 'nb_official_byway_name' );
	// $designating_agency  = get_field( 'nb_designating_agency' );

?>
		
		<div class="pb-0 mb-0 row md:mb-2 ">
		   
			<h1 class="text-3xl md:text-5xl entry-title"><?php the_title(); ?></h1>
			
		<?php
		// Navigation of page.
		?>
			<ul class="pb-0 mt-3 mb-10 byway-sub-nav">
				<li id="item-overview" class="hidden anchor-nav"><a href="#overview" 
				class="" title="Trip
				Overview">Overview</a></li>
				<li id="item-story" class="hidden anchor-nav"><a href="#story" class="" 
				title="Story of the
				Byway">Story</a></li>
				<li id="item-directions" class="hidden anchor-nav"><a href="#directions" 
				class="" title="Driving
				Directions">Directions</a></li>
				<li id="item-points" class="hidden anchor-nav"><a href="#points" class="" 
				title="Points of
				Interest">Points of Interest</a></li>
				<li id="item-itinerary" class="hidden anchor-nav" title="Itinerary" ><a
							href="#itinerary" >Itinerary</a></li>
			</ul>
			
		</div> <!-- .row // H1 & Anchor Nav -->
		
		
		<?php
		// pull in templates to build page.


		// Feature: Overlook maps.
		$show_national_map = get_field( 'show_national_maps', 'option' );

		if ( $show_national_map ) :
			nsbf_get_template_part(
				'template-parts/map/national',
				'',
				array('the_title' => get_the_title())
			);
		else :
			?>
		<section class="pb-0 mb-1,2 row">
			<!-- Map Options are disabled -->
		</section>
			<?php
		endif;

		// Feature National content templates.
		nsbf_get_template_part(
			'template-parts/byway/content/detail',
				'',
		);

		nsbf_get_template_part(
			'template-parts/byway/content/overview',
			'',
		);

		nsbf_get_template_part(
			'template-parts/partner/local',
			'',
		);

		nsbf_get_template_part(
			'template-parts/byway/content/story',
			'',
		);

		nsbf_get_template_part(
			'template-parts/byway/content/directions',
			'',
		);

		nsbf_get_template_part(
			'template-parts/byway/content/points',
			'',
		);

		nsbf_get_template_part(
			'template-parts/byway/content/itinerary',
			'',
		);
		?>

		
		<div class="update-data">
			<p><a href="<?php echo esc_url( site_url( '/update/', 'https' ) ); ?>" class="bell" 
			title="Help our foundation maintain accurate information about
			<?php echo esc_attr( $official_byway_name ); ?>."><i class="fa fa-bell">
			</i>&nbsp;Update</a> this byway information today!</p>
		</div>
	</div><!--/container main-content-->

</main> <!-- closing main from single-national_byway.php -->


<?php

get_footer();
