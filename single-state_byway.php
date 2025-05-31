<?php
/**
 * Template Name: State Byway Detail
 *
 * Note: This filename uses an underscore to match the custom post type name
 * and follows WordPress template hierarchy conventions. Do not rename.
 *
 * @package Salient WordPress Theme
 *
 * @date Aug17,2024
 * @version 10.5
 * @filename single-state_byway.php
 * @description This represents the details of one state byway.
 */

// phpcs:disable WordPress.Files.FileName

if ( ! defined( 'ABSPATH' ) ) :
	exit;
endif;

get_header();
?>

<main class="container-wrap">
	<div class="container main-content">
		<?php
		// vars.
		$state               = get_field( 'sb_state' );
		$official_byway_name = get_field( 'sb_official_byway_name' );
		// $designating_agency  = get_field( 'nb_designating_agency' );
		?>
		
		<div class="mb-0 row md:mb-4 lg:mb-8">
			<h1 class="mb-0 text-3xl md:text-5xl entry-title"><?php the_title(); ?></h1>
		</div> <!-- .row // H1 & Anchor Nav -->
		
		<?php
		// Feature: Overlook maps.
		$show_state_map = esc_url( get_field( 'show_state_maps', 'option' ) );

		if ( $show_state_map ) :
			// Try template part first
			nsbf_get_template_part(
				'template-parts/map/state',
				'page-templates/partials/byway-map-state.php'
			);
		else :
			?>
			<section class="pb-0 mb-12 row">
				<!-- Map Options are disabled -->
			</section>
			<?php
		endif;

		// Feature State content templates.
		nsbf_get_template_part(
			'template-parts/byway/content/detail',
			'state',
			'page-templates/partials/byway-detail-sb.php'
		);

		nsbf_get_template_part(
			'template-parts/byway/content/overview',
			'state',
			'page-templates/partials/byway-overview-sb.php'
		);

		nsbf_get_template_part(
			'template-parts/partner/local',
			'state',
			'page-templates/partials/byway-local-partners-sb.php'
		);
		?>
		<div class="update-data">
			<p><a href="<?php echo esc_url( site_url( '/update/', 'https' ) ); ?>" class="bell" 
			title="Help our foundation maintain accurate information about
			<?php echo esc_html( $official_byway_name ); ?>."><i class="fa fa-bell">
			</i>&nbsp;Update</a> this byway information today!</p>
		</div>
	</div><!--/container main-content-->

</main> <!-- .container-wrap -->


<?php

get_footer();
