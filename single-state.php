<?php
/**
 * Template Name: Single State Page.
 *
 * @update Sept262024
 *
 * @package  templated
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

	get_header();

	$the_title 		 = esc_html( get_the_title() );
	$state     		 = acf_esc_html( get_field( 'nb_state' ) );
	$the_link  		 = esc_url( get_permalink() );
	$hyphenated_name = str_replace( ' ', '-', strtolower( $the_title ));
	$nsbf_id         = '?ref=nsbs';

	/**
	 * Switch structure enables setting variable then in the args below we call it.
	 */

switch ( $the_title ) {
	case 'Alabama':
		$nb_meta_value = 'AL';
		break;
	case 'Alaska':
		$nb_meta_value = 'AK';
		break;
	case 'Arizona':
		$nb_meta_value = 'AZ';
		break;
	case 'Arkansas':
		$nb_meta_value = 'AR';
		break;
	case 'California':
		$nb_meta_value = 'CA';
		break;
	case 'Colorado':
		$nb_meta_value = 'CO';
		break;
	case 'Connecticut':
		$nb_meta_value = 'CT';
		break;
	case 'Delaware':
		$nb_meta_value = 'DE';
		break;
	case 'District of Columbia':
		$nb_meta_value = 'DC';
		break;
	case 'Florida':
		$nb_meta_value = 'FL';
		break;
	case 'Georgia':
		$nb_meta_value = 'GA';
		break;
	case 'Hawaii':
		$nb_meta_value = 'HI';
		break;
	case 'Idaho':
		$nb_meta_value = 'ID';
		break;
	case 'Illinois':
		$nb_meta_value = 'IL';
		break;
	case 'Indiana':
		$nb_meta_value = 'IN';
		break;
	case 'Iowa':
		$nb_meta_value = 'IA';
		break;
	case 'Kansas':
		$nb_meta_value = 'KS';
		break;
	case 'Kentucky':
		$nb_meta_value = 'KY';
		break;
	case 'Louisiana':
		$nb_meta_value = 'LA';
		break;
	case 'Maine':
		$nb_meta_value = 'ME';
		break;
	case 'Maryland':
		$nb_meta_value = 'MD';
		break;
	case 'Massachusetts':
		$nb_meta_value = 'MA';
		break;
	case 'Michigan':
		$nb_meta_value = 'MI';
		break;
	case 'Minnesota':
		$nb_meta_value = 'MN';
		break;
	case 'Mississippi':
		$nb_meta_value = 'MS';
		break;
	case 'Missouri':
		$nb_meta_value = 'MO';
		break;
	case 'Montana':
		$nb_meta_value = 'MT';
		break;
	case 'Nebraska':
		$nb_meta_value = 'NE';
		break;
	case 'Nevada':
		$nb_meta_value = 'NV';
		break;
	case 'New Hampshire':
		$nb_meta_value = 'NH';
		break;
	case 'New Jersey':
		$nb_meta_value = 'NJ';
		break;
	case 'New Mexico':
		$nb_meta_value = 'NM';
		break;
	case 'New York':
		$nb_meta_value = 'NY';
		break;
	case 'North Carolina':
		$nb_meta_value = 'NC';
		break;
	case 'North Dakota':
		$nb_meta_value = 'ND';
		break;
	case 'Ohio':
		$nb_meta_value = 'OH';
		break;
	case 'Oklahoma':
		$nb_meta_value = 'OK';
		break;
	case 'Oregon':
		$nb_meta_value = 'OR';
		break;
	case 'Pennsylvania':
		$nb_meta_value = 'PA';
		break;
	case 'Rhode Island':
		$nb_meta_value = 'RI';
		break;
	case 'South Carolina':
		$nb_meta_value = 'SC';
		break;
	case 'South Dakota':
		$nb_meta_value = 'SD';
		break;
	case 'Tennessee':
		$nb_meta_value = 'TN';
		break;
	case 'Texas':
		$nb_meta_value = 'TX';
		break;
	case 'Utah':
		$nb_meta_value = 'UT';
		break;
	case 'Vermont':
		$nb_meta_value = 'VT';
		break;
	case 'Virginia':
		$nb_meta_value = 'VA';
		break;
	case 'Washington':
		$nb_meta_value = 'WA';
		break;
	case 'West Virginia':
		$nb_meta_value = 'WV';
		break;
	case 'Wisconsin':
		$nb_meta_value = 'WI';
		break;
	case 'Wyoming':
		$nb_meta_value = 'WY';
		break;
}
?>

		
  
<main class="container-wrap" style="padding-top:40px;">
	<div class="container main-content">

		<h1 class="text-3xl text-center entry-title md:text-5xl mb-9 lg:mb-14">Byways in 
		<?php // escaped above
		echo $the_title;
		?>
		</h1>
		
		<!-- Set State map -->
		<section class="pb-0 mb-12 row">
		
		<div style="width: 100%; height: 500px; position: relative;">

			<iframe src="<?php echo 'https://overlookmaps.com/states/' .
			esc_attr( $hyphenated_name ) .
			'/map' .
			esc_attr( $nsbf_id ); ?>"
			title="<?php echo 'The great state of ' . $the_title . ' map from Overlook'; ?>"
			aria-label="Interactive map showing <?= $the_title ?> state's byway routes and locations."
			width="100%"
			height="100%"
			frameborder="0"
			allowfullscreen
			tabindex="0"
			loading="eager"
			style="border: none; position: absolute; top: 0; left: 0;">
			<!-- Fallback content -->
				
				Your browser does not support iframes
				
			</iframe>
		</div>

		<div class="mt-4 text-right">
			<a class="" href="<?php echo 'https://overlookmaps.com/states/' .
			$hyphenated_name; ?>" target='_blank' >
			Embed this map on your site.
			</a>
	</div>

	</section>

		
		<?php

		

			/*
			===============================================================
				National Byway Args
				This loops through names and permalinks
			 */
			// phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key.
			// phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_value.
			// phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_tax_query.

			$nb_args = array(
				'numberposts' => -1,
				'post_type'   => 'national_byway',
				'post_status' => 'publish',
				'orderby'     => 'title',
				'order'       => 'ASC',
				'meta_key'    => 'nb_state',
				'meta_value'  => sanitize_text_field( $nb_meta_value ), // Sanitize the meta value.
				'tax_query'   => array(
					array(
						'taxonomy' => 'nb_designation',
						'field'    => 'slug',
						'terms'    => array( 'nsb', 'aar' ),
					),
				),
			);

			// America's Byways Collection Query.
			$nb_query = new WP_Query( $nb_args );

			require_once 'page-templates/partials/national-byway-list.php';

			// Destroys the previous query and sets up a new query.
			wp_reset_postdata();

			/*
			===============================================================
				State Byway Args
				This loops through all byway names and permalinks
			*/

			$sb_args = array(
				'numberposts'    => -1,
				'posts_per_page' => -1,
				'post_type'      => 'state_byway',
				'post_status'    => 'publish',
				'orderby'        => 'title',
				'order'          => 'ASC',
				'meta_key'       => 'sb_state',
				'meta_value'     => sanitize_text_field( $nb_meta_value ), // Sanitize meta value.
				'tax_query'      => array(
					array(
						'taxonomy'         => 'sb_designation',
						'field'            => 'slug',
						'terms'            => array( 'fsb', 'sb', 'blm' ),
						'include_children' => true,
						'operator'         => 'EXISTS',
					),
				),
			);


			// State Byways Query.
			$sb_query = new WP_Query( $sb_args );
			/**
			 * This is for the STATE byway list
			 */



			require_once 'page-templates/partials/state-byway-list.php';


			// Destroys the previous query and sets up a new query.
			wp_reset_postdata();
			?>
	 <?php
			/*
			===============================================================
				State Partner Args
				Loops through the limited data about partners
			*/

			$sp_args = array(
				'numberposts' => -1,
				'post_type'   => 'state_partners',
				'orderby'     => 'title',
				'post_status' => 'any',
				'meta_key'    => 'sp_state',
				'meta_value'  => sanitize_text_field( $nb_meta_value ), // Sanitize meta value.
			);

			// State Partner Query.
			$partners = new WP_Query( $sp_args );

			// Loop querying posts for National Byways ($nb_query) to capture partner data.
			if ( $partners->have_posts() ) :

				while ( $partners->have_posts() ) :
					$partners->the_post();

							// Feature: Overlook maps.
					$show_partner_map = esc_url( get_field( 'show_state_partner_maps', 'option' ) );

					if ( $show_partner_map ) :

						require_once 'page-templates/partials/byway-map-partner.php';
					else :
						?>
						<section class="pb-0 mb-12 row">
							<!-- Map Options are disabled -->
						</section>
						<?php

					endif;
					
					// Prints website and phone number to the page.
					include_once 'page-templates/partials/state-partners.php';

				endwhile;

			endif;

			// Destroys the previous query and sets up a new query.
			wp_reset_postdata();

			/**
		 * This is custom content to load SEO dense info.
		 *
		 * @update Aug252024
		 */
		$show_partner_content_option = get_field( 'show_partner_content', 'option' );

		if ( $show_partner_content_option ) :
			require_once 'page-templates/partials/state-seo-content.php';
		endif;
			?>
	 

		<div class="color-bar bg-gradient-to-r from-yellow-300 to-yellow-600 mt-14"></div>
	
		<?php
			// this function restores the $post global to the current post in the main query.
			wp_reset_postdata();

		?>
	</div>
</main>

<?php get_footer(); ?>
