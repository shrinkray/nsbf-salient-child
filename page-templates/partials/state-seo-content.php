<?php
/**
 * Building unique contextual content onto state pages (Partner content project).
 *
 * @template   single-state
 * @date       April302024
 * @update     Aug252024
 * @author     Greg Miller, gregmiller.io
 * @package    Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * This is an intro text field for leading information about the state byways
 */

	$intro_text = get_field( 'intro_text_content_builder' );
?>
	<div class="spacer-y-10"></div>
	<div class="mx-auto max-w-7xl " >
		
			<?php
			$state_info = get_field( 'state_info' );
			echo $state_info ?
			'<h2 class="text-2xl text-left md:text-3xl text-outerspace">' .
			esc_html( $state_info ) . '</h2>' : '';

			?>
			
		
	</div>
	<div class="mx-auto max-w-7xl ">
		<section class="state-information">
			<div class="max-w-3xl gap-8 mx-0 mt-4 lg:flex lg:max-w-none">
				<div class="lg:flex-auto">
					<?php
					echo $intro_text ?
					'<div class="state-information">' .
					acf_esc_html( $intro_text ) . '</div>' : '';
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

					echo $links_section_heading ?
					'<h2 class="mt-12 mb-4 text-2xl text-left md:text-3xl text-outerspace">' .
					esc_html( $links_section_heading ) .
					'</h2>' : '';
					echo $links_section_description ?
					'<p class="mb-2 text-left">' .
					esc_html( $links_section_description ) . '</p>' : '';
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
			$link_heading ?
			'<h2 class="mt-12 mb-8 text-2xl text-left md:text-3xl text-outerspace">' .
			esc_html( $link_heading ) . '</h2>' : '';

			$link_description ? '<p class="text-left">' .
			esc_html( $link_description ) . '</p>' : '';
			?>
				

				<div class="mt-4 state-information">

<ul class="grid gap-3 list-none list-outside sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
		<?php
		while ( have_rows( 'content_builder_links' ) ) :
			the_row();
			$link_type  = get_sub_field( 'type_of_link' ); // is this needed?
			$show_url   = get_sub_field( 'content_builder_url_link' );
			$show_pdf   = get_sub_field( 'content_builder_add_pdf' );
			$show_phone = get_sub_field( 'content_builder_phone' );

			?>
			<?php

			// This displays the the URL link.
			if ( $show_url ) :

				if ( have_rows( 'url_meta' ) ) :
					while ( have_rows( 'url_meta' ) ) :
						the_row();

						$url_heading     = get_sub_field( 'url_heading' );
						$url_description = get_sub_field( 'url_description' );


						?>

						<li class="item state-link">
							
						<?php

						// display heading & description if available.
						echo $url_heading ?
						'<h3 class="text-xl">' .
						esc_html( $url_heading ) .
						'</h3>' : '';
						echo $url_description ?
						'<p class="text-sm" id="urlDescription">' .
						esc_html( $url_description ) . '</p>' : '';
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
						endwhile; // url_meta.
					endif; // url_meta.

				elseif ( $show_phone ) :

					if ( have_rows( 'phone_meta' ) ) :
						while ( have_rows( 'phone_meta' ) ) :
							the_row();
							$phone_heading     = get_sub_field( 'phone_name_of_organization' );
							$phone_description = get_sub_field( 'phone_description' );

							// strip hyphens for the linked phone number.
							$phone = str_replace( '-', '', $show_phone );
							?>
						<li class="item state-phone">
							

							<?php
							// display heading & description if available.
							echo $phone_heading ?
							'<h3 class="text-xl">' .
							esc_html( $pdf_heading ) . '</h3>' : '';
							echo $phone_description ?
							'<p class="text-sm" id="phoneDescription">' .
							esc_html( $phone_description ) . '</p>' : '';
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
								endwhile; // phone_meta.
							endif; // phone_meta.


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

								// display heading & description if available.
								echo $pdf_heading ?
								'<h3 class="text-xl">' .
								esc_html( $pdf_heading ) . '</h3>' : '';
								echo $pdf_description ?
								'<p class="text-sm" id="pdfDescription">' .
								esc_html( $pdf_description ) .
								'</p>' : '';
								?>
				
							<a href="<?php echo esc_url( $pdf_url ); ?>" target="_blank"
							aria-labelledby="pdfDescription pdfLabel"
							class=""><span id="pdfLabel"
							>
											<?php
											echo esc_html( $pdf_label );
											?>
												</span></a>
							
						</li>

									<?php
								endwhile; // pdf_meta.
							endif; // pdf_meta.
						endif; // link types.

					endwhile; // content_builder_links.
		?>
							</ul>
						</div>
					</div>
				</div> <!-- .partner-links-group -->
			<?php

		endif; // content_builder_links.
?>
			</section> <!-- .local-byway-partner-section -->


		

	<div class="mt-10 color-bar bg-gradient-to-r from-yellow-600 to-yellow-300"></div>
	
	<?php

