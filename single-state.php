<?php
/**
 * Template Name: Single State Page
 *
 * @date     2024-4-29
 * @category None
 * @package  Category
 * @author   Shrinkray <hello@gregmiller.io>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://github.com/shrinkray/nsbf-salient-child
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$title    = get_the_title();
$state    = get_field( 'nb_state' );
$the_link = get_permalink();

/**
 * Switch structure enables setting variable then in the args below we call it.
 */

switch ( $title ) {
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
		<?php
		echo $title;
		?>
	</h1>
			<?php

			$cb_intro_text   = the_field( 'intro_text_content_builder' );
			$cb_mobile_text  = the_field( 'summary_content_mobile' );
			$cb_desktop_text = the_field( 'full_content_desktop' );


			if ( $cb_intro_text ) :
				?>
			<div class="mt-10 state-information">
				<?php echo $cb_intro_text; ?> 
			</div>

				<?php
			else :
				// show nothing
			endif;

			?>
		

	<div class="mt-10 color-bar bg-gradient-to-r from-yellow-600 to-yellow-300"></div>
	
	<?php
		/*
		===============================================================
				National Byway Args
				This loops through names and permalinks
			*/

		$nb_args = array(
			'numberposts' => -1,
			'post_type'   => 'national_byway',
			'post_status' => 'publish',
			'orderby'     => 'title',
			'order'       => 'ASC',
			'meta_key'    => 'nb_state',
			'meta_value'  => $nb_meta_value,
			'tax_query'   => array(
				array(
					'taxonomy' => 'nb_designation',
					'field'    => 'slug',
					'terms'    => array( 'nsb', 'aar' ),
				),
			),
		);

		// America's Byways Collection Query
		$nb_query = new WP_Query( $nb_args );

		require_once 'page-templates/partials/national-byway-list.php';
		// Destroys the previous query and sets up a new query.
		wp_reset_query();

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
			'meta_value'     => $nb_meta_value,
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


		// State Byways Query
		$sb_query = new WP_Query( $sb_args );
		/**
		 * This is for the STATE byway list
		 */
		require_once 'page-templates/partials/state-byway-list.php';
		// Destroys the previous query and sets up a new query.
		wp_reset_query();
		?>
	<p><sup>*</sup>Byways in the <em>America’s Byways</em> collection with an 
	asterisk are All-American Roads.</p>
	
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
			'meta_value'  => $nb_meta_value,
		);

		// State Partner Query
		$partners = new WP_Query( $sp_args );

		// Loop querying posts for National Byways ($nb_query) to capture partner data
		if ( $partners->have_posts() ) :

			while ( $partners->have_posts() ) :
				$partners->the_post();

				// Prints website and phone number to the page
				include_once 'page-templates/partials/state-partners.php';
					endwhile;


			// Destroys the previous query and sets up a new query.
			wp_reset_query();
		endif;
		?>
	<div class="color-bar bg-gradient-to-r from-yellow-300 to-yellow-600 mt-14"></div>
			<div class="mt-10 state-information">

	<?php
	if ( have_rows( 'content_builder_links' ) ) :

		while ( have_rows( 'content_builder_links' ) ) :
			the_row();
			$content_builder_url_link = get_sub_field( 'content_builder_url_link' );

			if ( $content_builder_url_link ) :
				?>

					<a href="
					<?php
					echo esc_url( $content_builder_url_link['url'] );
					?>
					" target="
					<?php
						echo esc_attr( $content_builder_url_link['target'] );
					?>
					"><?php echo esc_html( $content_builder_url_link['title'] ); ?></a>
				<?php
	endif;

					$content_builder_add_pdf = get_sub_field( 'content_builder_add_pdf' );

			if ( $content_builder_add_pdf ) :
				$url = wp_get_attachment_url( $content_builder_add_pdf );
				?>

					<a href="<?php echo esc_url( $url ); ?>">Download File</a>

				<?php
				endif;
					the_sub_field( 'content_builder_phone' );
			endwhile;
	else :
		?>
		<?php
		// No rows found
endif;
	?>

<?php
if ( $cb_mobile_text ) :
	?>
<div class="mt-10 state-information">
	<?php echo $cb_mobile_text; ?> 
</div>

	<?php
	else :
		// show nothing
	endif;

	if ( $cb_desktop_text ) :
		?>
	<div class="mt-10 state-information">
		<?php echo $cb_desktop_text; ?> 
	</div>

		<?php
	endif;
	?>
	<div class="mt-10 state-information">
		<?php echo $cb_desktop_text; ?> 
	</div>
	
</div>
	<?php
		// After looping through a separate query, this function restores
		// the $post global to the current post in the main query.
		wp_reset_postdata();

	?>
</div>
</main>

<?php get_footer(); ?>
