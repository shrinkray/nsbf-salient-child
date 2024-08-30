<?php
	/**
	 * Byway detail template (national byways) required from single-national_byway.
	 *
	 * @template   Details Section
	 * @date       Jul142021
	 * @update     Aug072024
	 * @author     Greg Miller, gregmiller.io
	 * @package    template
	 */

if ( ! defined( 'ABSPATH' ) ) :
	exit;
endif;

?>

<section class="grid grid-cols-1 pt-8 pb-0 mb-12 row md:grid-cols-2 lg:grid-cols-2">

	<div class="order-last section details md:order-none lg:order-none">
		
		<?php

		// Feature: Location details.
		$intrinsic_quality                  = get_field( 'nb_intrinsic_quality' );
		$state_or_states_that_contain_byway = get_field( 'nb_state_or_states_that_contain_byway' );
		$designation                        = get_field( 'nb_current_national_designation' );
		$designation_year                   = get_field( 'nb_designation_year' );
		$length_of_byway_miles              = get_field( 'nb_length_of_byway_miles' );

		// split the phrase by any number of commas or space characters into an array().
		// which include " ", \r, \t, \n and \f.

			$keywords = preg_split( '/[\s,]+/', $intrinsic_quality );
			$typelist = '';

			// for each single letter associate a word and build a new string.
		foreach ( $keywords as $keyword ) {

			switch ( $keyword ) {
				case 'S':
					$quality = 'Scenic';
					break;
				case 'H':
					$quality = 'Historic';
					break;
				case 'A':
					$quality = 'Archeological';
					break;
				case 'R':
					$quality = 'Recreation';
					break;
				case 'C':
					$quality = 'Cultural';
					break;
				case 'N':
					$quality = 'Natural';
					break;
			}
			// a word list is created along with a trailing comma and space.

			$typelist .= $quality . ', ';
		}
			// Remove space and last comma from the list and return the trimmed result.
			$trimmed = rtrim( trim( $typelist ), ',' );
		?>
		<div id="details" class="anchored"></div>
		<h2 class="text-3xl md:text-4xl h2 wayfinder">Details</h2>
		<ul class="detail-list mt-7 mb-7">
			<li><span class="label-minor-heading">Designation info</span>
			<?php
			echo esc_html( $designation );
			?>
			(<?php echo esc_html( $designation_year ); ?>)</li>
			<li><span class="label-minor-heading">Intrinsic Qualities</span>
			<?php
			echo esc_html( $trimmed );
			?>
			</li>
			<li><span class="label-minor-heading">Location</span>
			<?php
			echo esc_html( $state_or_states_that_contain_byway );
			?>
			</li>
			<li><span class="label-minor-heading">Length</span>
			<?php
			echo esc_html( $length_of_byway_miles );
			?>
			&nbsp;miles</li>
		</ul>
		
		
		<?php
		// vars.
		$dedicated_byway_organization         =
		get_field( 'nb_dedicated_byway_organization' );
		$dedicated_byway_organization_website =
		get_field( 'nb_dedicated_byway_organization_website' );
		$dedicated_byway_organization_phone   =
		get_field( 'nb_dedicated_byway_organization_phone' );
		// Add if we have a field for a dedicated organization.
		if ( $dedicated_byway_organization ) :

			?>
		<!--                Dedicated organization -->
		<div class="detail-subsection">
			<div class="label-minor-heading">Byway Visitor Information</div>
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
						<?php
						echo esc_attr( $dedicated_byway_organization );
						?>
						website!">Website</a>
				<?php
		endif;
			// If we have a phone URL add a link.
			if ( $dedicated_byway_organization_phone ) :
				?>
						<a class="byway-phone-property" href="tel:
						<?php
						echo esc_url( $dedicated_byway_organization_phone );
						?>
						" title="Need help? Call our offices.">
						<?php
						echo esc_attr( $dedicated_byway_organization_phone );
						?>
						</a>
		<?php endif; ?>

			</div> <!-- .detail-organization -->

		</div> <!-- .detail-subsection -->
			<?php
	endif; // dedicated organization.
		?>


		<div class="detail-subsection mt-7">
			<div class="label-minor-heading">Statewide Byway Partners</div>
			
			<div 
			class="grid grid-cols-1 gap-2 departments sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2">
				<div class="partner-digits">
					<?php
					// vars.
					$state_dot_name          = get_field( 'nb_state_dot_name' );
					$state_dot_byway_website = get_field( 'nb_state_dot_byway_website' );
					$state_dot_byway_phone   = get_field( 'nb_state_dot_byway_phone' );
					/**
					 * If the organization exists, add it's name.
					 * If the web and or phone properties exist, render, otherwise do not show them.
					 */
					if ( $state_dot_name ) :
						?>
							<div class="detail-organization">
								<?php echo esc_html( $state_dot_name ); ?></div>

							<div class="detail-properties">
						<?php
						// If we have a website URL add a link.
						if ( $state_dot_byway_website ) :
							?>
										<a class="byway-website-property" href="
										<?php
										echo esc_url( $state_dot_byway_website );
										?>
										" target="_blank" title="Learn more at the 
										<?php
										echo esc_attr( $state_dot_name );
										?>
										website!">Website</a>
						<?php endif; ?>
								
						<?php
						// If we have a phone URL add a link.
						if ( $state_dot_byway_phone ) :
							?>
										<a class="byway-phone-property" href="tel:
										<?php
										echo esc_url( $state_dot_byway_phone );
										?>
										" title="Need help? Call our offices.">
										<?php
										echo esc_attr( $state_dot_byway_phone );
										?>
										</a>
						<?php endif; ?>
							</div> <!-- .detail-properties -->
						<?php
					endif; // $state_dot_name
					?>
				</div> <!-- .partner-digits -->

				<div class="partner-digits">
					<?php
					// vars.
					$state_tourism_board_name    = get_field( 'nb_state_tourism_board_name' );
					$state_tourism_board_website = get_field( 'nb_state_tourism_board_website' );
					$state_tourism_board_phone   = get_field( 'nb_state_tourism_board_phone' );

					/**
					 * If the organization exists, add it's name.
					 * If the web and or phone properties exist.
					 * render, otherwise do not show them.
					 */
					if ( $state_tourism_board_name ) :
						?>

							<div class="detail-organization">
								<?php echo esc_html( $state_tourism_board_name ); ?></div>

							<div class="detail-properties">
						<?php
						// If we have a website URL add a link.
						if ( $state_tourism_board_website ) :
							?>
										<a class="byway-website-property" href="
										<?php
										echo esc_url( $state_tourism_board_website );
										?>
										" target="_blank" title="Learn more at the 
										<?php
										echo esc_attr( $state_tourism_board_name );
										?>
										website!">Website</a>
						<?php endif; ?>
								
						<?php
						// If we have a phone URL add a link.
						if ( $state_tourism_board_phone ) :
							?>
										<a class="byway-phone-property" href="tel:
										<?php
										echo esc_url( $state_tourism_board_phone );
										?>
										" title="Need help? Call our offices.">
										<?php
										echo esc_attr( $state_tourism_board_phone );
										?>
										</a>
						<?php endif; ?>
							</div> <!-- .detail-properties -->
						<?php
					endif; // $state_tourism_board_name
					?>
				</div> <!-- .partner-digits -->
			</div> <!-- .departments -->
			
	
			

		</div> <!-- .detail-subsection // Statewide Byway Partners  -->
	</div> <!-- .section -->
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
			// Find the National image in the array.
			if ( ! empty( have_rows( 'nb_iconic_images' ) ) ) :
				$first_credit = true;

					// Combo conditional to get just the first record.
				while ( $first_credit && have_rows( 'nb_iconic_images' ) ) :
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
		</div>
	</div> <!-- .section -->
</section> <!-- .row // Details -->
