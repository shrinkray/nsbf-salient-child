<?php
/**
 * State byway (sb) details page.
 *
 * @template   Details Section
 * @date       Jul142021
 * @update     Aug072024
 * @author     Greg Miller, gregmiller.io
 * @package    Template
 */

if ( ! defined( 'ABSPATH' ) ) :
	exit;
endif;
?>

<section class="grid grid-cols-1 mb-6 grid-auto-cols-max row md:grid-cols-2 lg:grid-cols-2">
	<div class="order-last section details md:order-none lg:order-none ">
	   
		<div id="details" class="anchored"></div>
		<h2 class="text-3xl md:text-4xl h2 wayfinder">Details</h2>
		<?php

			$designation           = get_field( 'sb_current_state_designation' );
			$designation_year      = get_field( 'sb_designation_year' );
			$length_of_byway_miles = get_field( 'sb_length_of_byway_miles' );
			$sb_state              = get_field( 'sb_state' );
			$organization          = get_field( 'sb_dedicated_byway_organization' );


		?>
		<ul class="detail-list mt-7 mb-7">
			<!--  Setting Year only if it exists, otherwise do not show parenthesis   -->
			<li><span class="label-minor-heading">Designation</span>
			<?php echo esc_html( $designation ); ?> <?php
					echo $designation_year ? '(' . esc_html( $designation_year ) . ')' : ''
			?>
																				</li>
		   
			<li><span class="label-minor-heading">Location</span>
			<?php
			echo esc_html( $sb_state );
			?>
			</li>
			<li><span class="label-minor-heading">Length</span>
			<?php echo esc_html( $length_of_byway_miles ); ?>&nbsp;miles</li>
		</ul>
		
		
		<?php
		// vars.
		$dedicated_byway_organization         = get_field( 'sb_dedicated_byway_organization' );
		$dedicated_byway_organization_website =
		get_field( 'sb_dedicated_byway_organization_website' );
		$dedicated_byway_organization_phone   =
		get_field( 'sb_dedicated_byway_organization_phone' );

		// Add if we have a field for a dedicated organization.
		if ( $dedicated_byway_organization ) :
			?>
		<!--                Dedicated organization -->
		<div class="detail-subsection">
			<div class="label-minor-heading">Dedicated Byway Visitor Information</div>
			<div class="detail-organization">
				<?php echo esc_html( $dedicated_byway_organization ); ?></div>
			<div class="detail-properties">
				
			<?php
			// If we have a website URL add a link.
			if ( $dedicated_byway_organization_website ) :
				?>
				<a class="byway-website-property" href="
				<?php
				echo esc_url( $dedicated_byway_organization_website );
				?>
				" target="_blank" title="Learn more at the 
				<?php echo esc_attr( $dedicated_byway_organization ); ?> website!">Website</a>
			<?php endif; // website. ?>
				
			<?php
			// If we have a phone URL add a link.
			if ( $dedicated_byway_organization_phone ) :
				?>
				<a class="byway-phone-property" href="tel:
				<?php
				echo esc_url( $dedicated_byway_organization_phone );
				?>
				" title="Need help? Call our offices.">
				<?php echo esc_attr( $dedicated_byway_organization_phone ); ?></a>
				<?php endif; // phone. ?>
			</div> <!-- .detail-properties -->
		</div> <!-- .detail-subsection -->
			<?php
		endif; // dedicated_byway_organization.

		?>
<!--        State DOT byway info-->
		<div class="detail-subsection mt-7">
			<?php

			require_once 'state-byway-visitor.php';

			?>
	
		</div>
	</div> <!-- .row // Details -->
	
	
	<div class="order-first mb-8 section image md:order-none lg:order-none">
		<?php
		// Debugging: Evaluate image.
		$my_post_id = isset( $post->ID ) ? $post->ID : get_the_ID();

		if ( ! $my_post_id ) :
			echo 'Error: Unable to get post ID';
		else :
			$image = get_the_post_thumbnail(
				$my_post_id,
				'byway_large',
				array(
					'class'   => 'feature',
					'loading' => 'lazy',
				)
			);

			if ( empty( $image ) ) :
				// Debugging: Check if the post has a thumbnail set.
				if ( has_post_thumbnail( $my_post_id ) ) :
					echo 'Post has a thumbnail, but get_the_post_thumbnail() returned empty.<br>';
				else :
					echo 'Post does not have a thumbnail set.<br>';
				endif;

				// Debugging: Check if 'byway_large' image size exists.
				global $_wp_additional_image_sizes;
				if ( ! isset( $_wp_additional_image_sizes['byway_large'] ) ) :
					echo '\'byway_large\' image size is not defined.<br>';
				endif;

				// Check if 'byway_large' image size exists.
				$image_sizes = wp_get_additional_image_sizes();
				if ( isset( $image_sizes['byway_large'] ) ) :
					echo esc_html(
						"'byway_large' image size is defined.
					Width: {$image_sizes['byway_large']['width']},
					Height: {$image_sizes['byway_large']['height']}<br>"
					);
				else :
					echo "'byway_large' image size is not defined.<br>";
				endif;

				// Fallback: Try to get the first image from the post content.
				$post_content = get_post_field( 'post_content', $my_post_id );
				$first_img    = '';
				if ( preg_match(
					'/<img.+src=[\'"]([^\'"]+)[\'"].*>/i',
					$post_content,
					$matches
				) ) :
					$first_img = $matches[1];
				endif;

				if ( ! empty( $first_img ) ) :
					echo '<img src="' . esc_url( $first_img ) .
					'" alt="First image from post content" class="fallback-image">';
				else :
					echo 'No image found in post content.<br>';
					// If no image in content, display a placeholder.
					echo '<img src="' .
					esc_url(
						get_template_directory_uri() .
						'/assets/images/placeholder.jpg'
					)
					. '" alt="Placeholder image" class="placeholder-image">';
				endif;
			endif;
		endif;

		?>
			<?php
			// Find the State image in the array.
			if ( ! empty( have_rows( 'sb_iconic_images' ) ) ) :
				$first_credit = true;

					// Combo conditional to get just the first record.
				while ( $first_credit && have_rows( 'sb_iconic_images' ) ) :
					the_row();

					// Evaluate if $alt_text contains a value, if not use the default message.
					$alt_text      = get_sub_field( 'image_alt_text' );
					$show_alt_text = ( $alt_text ) ? esc_attr( $alt_text ) :
						'Visit again for updated information';
					$attribution   = get_sub_field( 'image_attribution' );
					// Set  false to stop from getting the next record.
					$first_credit = false;

					// Add or replace the alt attribute in the image HTML.
					$image_with_alt = preg_replace(
						'/alt="[^"]*"/',
						'alt="' . $show_alt_text . '"',
						$image
					);

					// If no alt attribute is present, add it.
					if ( strpos( $image_with_alt, 'alt="' ) === false ) :
						$image_with_alt = str_replace(
							'<img',
							'<img alt="' . $show_alt_text . '"',
							$image_with_alt
						);
					endif;

					?>
						<div class="image-container">
									<?php

									echo wp_kses_post( $image_with_alt );
									?>
						</div>
						<div class="italic text-right attribution">
							<span class="source">
								<?php
								if ( ! empty( $attribution ) ) :
									echo esc_html( $attribution );
									?>
							</span>
								
							<span class="photo-credit"> Photo</span>
									<?php
					else :
						?>
						<span class="source">
						unattributed
						</span>
						<?php
					endif;
				endwhile;
			endif;
			?>
	</div> <!-- .section -->
</section> <!-- .row // Details -->
