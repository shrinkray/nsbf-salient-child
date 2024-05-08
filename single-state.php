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

/**
 * This is an intro text field for leading information about the state byways
 */

	$intro_text = get_field( 'intro_text_content_builder' );

?>

<main class="container-wrap" style="padding-top:40px;">
<div class="container main-content">

<h1 class="text-3xl text-center entry-title md:text-5xl mb-9 lg:mb-14">Byways in 
		<?php
		echo $title;
		?>
	</h1>

	<div class="mx-auto max-w-7xl " >
		
			<?php
			$state_info = get_field( 'state_info' );
			echo $state_info ? '<h2 class="text-2xl text-left md:text-3xl text-outerspace">' . $state_info . '</h2>' : '';

			?>
			
		
	</div>
	<div class="mx-auto max-w-7xl ">
		<section class="state-information">
			<div class="max-w-3xl gap-8 mx-0 mt-4 lg:flex lg:max-w-none">
				<div class="lg:flex-auto">
					<?php
					echo $intro_text ? '<div class="state-information">' . $intro_text . '</div>' : '';
					?>
				</div>
				<div class="-mt-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
					<div class="state-map">
						<?php
						$byways_image = get_field( 'byways_image' );
						$size         = 'full';
						if ( $byways_image ) :
							echo wp_get_attachment_image( $byways_image, $size );
						endif;
						?>
					</div>
				</div>
			</div>
		</section>

		<section class="local-byway-partner-section">
			<div class="max-w-3xl mx-0 mt-4 lg:flex lg:max-w-none">
				<div class="state-information huh">
					<?php
					$links_section_heading     = get_field( 'links_section_heading' );
					$links_section_description = get_field( 'links_section_description' );

					echo $links_section_heading ? '<h2 class="mt-12 mb-4 text-2xl text-left md:text-3xl text-outerspace">' . $links_section_heading . '</h2>' : '';
					echo $links_section_description ? '<p class="mb-2 text-left">' . $links_section_description . '</p>' : '';
					?>
				</div>
			</div>
<?php


	/**
	 * This is a link builder allowing a user to add a URL, phone number, or PDF to a page.
	 * It is a repeater field that allows for up to a row of four links to be added.
	 */

if ( have_rows( 'content_builder_links' ) ) :
	$link_heading     = get_field( 'cb_links_heading' );
	$link_description = get_field( 'links_row_description' );
	?>
		<div class="partner-links-group">
			<div class="detail-properties"> <!-- Byway Partners -->
			<?php
			$link_heading ? '<h2 class="mt-12 mb-8 text-2xl text-left md:text-3xl text-outerspace">' . $link_heading . '</h2>' : '';

			$link_description ? '<p class="text-left">' . $link_description . '</p>' : '';
			?>
				

				<div class="mt-4 state-information">

					<ul class="grid gap-3 list-none list-outside sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
		<?php
		while ( have_rows( 'content_builder_links' ) ) :
			the_row();
			$link_type  = get_sub_field( 'type_of_link' ); // this might not be needed
			$show_url   = get_sub_field( 'content_builder_url_link' );
			$show_pdf   = get_sub_field( 'content_builder_add_pdf' );
			$show_phone = get_sub_field( 'content_builder_phone' );

			?>
			<?php

			// This displays the the URL link
			if ( $show_url ) :

				if ( have_rows( 'url_meta' ) ) :
					while ( have_rows( 'url_meta' ) ) :
						the_row();

						$url_heading     = get_sub_field( 'url_heading' );
						$url_description = get_sub_field( 'url_description' );


						?>

						<li class="item state-link">
							
						<?php

						// display heading & description if available
						echo $url_heading ? '<h3 class="text-xl">' . $url_heading . '</h3>' : '';
						echo $url_description ? '<p class="text-sm" id="urlDescription">' . $url_description . '</p>' : '';
						?>

							<a href="<?php echo esc_url( $show_url['url'] ); ?>" target="_blank" 
							aria-labelledby="urlDescription urlLabel"
							><span id="urlLabel"
							>
							<?php
							echo esc_html( $show_url['title'] );
							?>
							</span></a>
							
						</li>

							<?php
						endwhile; // url_meta
					endif; // url_meta

				elseif ( $show_phone ) :

					if ( have_rows( 'phone_meta' ) ) :
						while ( have_rows( 'phone_meta' ) ) :
							the_row();
							$phone_heading     = get_sub_field( 'phone_name_of_organization' );
							$phone_description = get_sub_field( 'phone_description' );

							// strip hyphens for the linked phone number
							$phone = str_replace( '-', '', $show_phone );
							?>
						<li class="item state-phone">
							

							<?php
							// display heading & description if available
							echo $phone_heading ? '<h3 class="text-xl">' . $pdf_heading . '</h3>' : '';
							echo $phone_description ?
							'<p class="text-sm" id="phoneDescription">' . $phone_description . '</p>' : '';
							?>

							<a href="tel:
							<?php
							echo esc_attr( $phone );
							?>
							" target="_blank" 
							aria-labelledby="phoneDescription phoneLabel"
							class=""><span id="phoneLabel">
							<?php
							echo esc_html( $show_phone );
							?>
							</span></a>
							
							
						</li>
						
									<?php
								endwhile; // phone_meta
							endif; // phone_meta


					elseif ( $show_pdf ) :
						$pdf_url = wp_get_attachment_url( $show_pdf );

						if ( have_rows( 'pdf_meta' ) ) :
							while ( have_rows( 'pdf_meta' ) ) :
								the_row();

								$pdf_label       = get_sub_field( 'pdf_label' );
								$pdf_description = get_sub_field( 'pdf_description' );
								$pdf_heading     = get_sub_field( 'pdf_heading' );
								?>
						<li class="item state-download">
							

								<?php

								// display heading & description if available
								echo $pdf_heading ? '<h3 class="text-xl">' . $pdf_heading . '</h3>' : '';
								echo $pdf_description ? '<p class="text-sm" id="pdfDescription">' . $pdf_description . '</p>' : '';
								?>
				
							<a href="<?php echo esc_url( $pdf_url ); ?>" target="_blank" aria-labelledby="pdfDescription pdfLabel"
							class=""><span id="pdfLabel"
							>
											<?php
											echo esc_html( $pdf_label );
											?>
												</span></a>
							
						</li>

									<?php
								endwhile; // pdf_meta
							endif; // pdf_meta
						else :
							// show nothing
						endif; // link types

					endwhile; // content_builder_links
		?>
							</ul>
						</div>
					</div>
				</div> <!-- .partner-links-group -->
			<?php

		endif; // content_builder_links
?>
			</section> <!-- .local-byway-partner-section -->


		

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
			

		
		<?php
			// After looping through a separate query, this function restores
			// the $post global to the current post in the main query.
			wp_reset_postdata();

		?>
		<div class="mt-10 state-information">
			
		<?php
		$mobile_text  = get_field( 'summary_content_mobile' );
		$desktop_text = get_field( 'full_content_desktop' );

			echo $mobile_text ? '<div class="mobile-first">' . $mobile_text . '</div>' : '';

			echo $desktop_text ? '<div class="no-mobile">' . $desktop_text . '</div>' : '';
		?>

		</div>
		
	</div>
</main>

<?php get_footer(); ?>
