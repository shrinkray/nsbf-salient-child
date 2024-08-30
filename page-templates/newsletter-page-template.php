<?php
/**
 * Template name: Newsletter Page Template
 *
 * @package Salient WordPress Theme
 * @version 10.5
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
nectar_page_header( $post->ID );
$nectar_fp_options = nectar_get_full_page_options();

?>

<div class="container-wrap">
	<div class="
	<?php
	if ( 'on' !== $nectar_fp_options['page_full_screen_rows'] ) {
		echo 'container'; }
	?>
	main-content">
		<div class="row">
			
			<?php

			nectar_hook_before_content();

			if ( have_posts() ) :
				while ( have_posts() ) :

					the_post();
					the_content();

				endwhile;
			endif;

			nectar_hook_after_content();

			// ************* */

			$terms = get_terms( 'nsbf_news_year' );

			echo '<div class="newsletter-container flex-container">';
				echo '<div class="newsletter-inner flex-2-3-col margin-center-element">';

			foreach ( $terms as $the_term ) {

				$args = array(
					'post_type'      => 'nsbf_newsletters',
					'posts_per_page' => -1,
					'tax_query'      => array(
						array(
							'taxonomy' => 'nsbf_news_year',
							'field'    => 'slug',
							'terms'    => $the_term->slug,
						),
					),
				);

				$custom_post_type = new WP_Query( $args );

				if ( $custom_post_type->have_posts() ) :

					echo acf_esc_html(
						'<div id="nsbf-newsletter-' .
						$the_term->name . '" class="newsletter-header nsbf-news-' .
						$the_term->name . '">' .
						'<h4>' . $the_term->name . '</h4>' .
						'</div>'
					);

					echo acf_esc_html(
						'<div class="nsbf-newsletter nsbf-newsletter-' . $the_term->name . '">'
					);

					while ( $custom_post_type->have_posts() ) :
						$custom_post_type->the_post();

							$the_title          = get_the_title();
							$newsletter_link    = get_field( 'newsletter_link' );
							$newsletter_pdf     = get_field( 'newsletter_pdf_link' );
							$newsletter_stories = get_field( 'in_this_newsletter' );

						if ( $newsletter_link || $newsletter_pdf ) {

							echo acf_esc_html(
								'<div class="flex-wrap newsletter-item' .
								'flex-container flex-v-center flex-space-between">' .
								'<div class="newsletter-title"><h5>' . $the_title . '</h5></div>' .
								'<div class="newsletter-link flex-container">' .

								( ( $newsletter_link ) ?
								'<div class="newsletter-html general-button blue-button">' .
									'<a href="' . $newsletter_link . '
									" target="_blank">Newsletter HTML</a>' .
								'</div>'
								: '' ) .

								( ( $newsletter_pdf ) ?
								'<div class="newsletter-pdf general-button green-button">' .
									'<a href="' . $newsletter_pdf . '
									" target="_blank">Newsletter PDF</a>' .
								'</div>'
								: '' ) .

								'</div>' .

								( ( $newsletter_stories ) ?
								'<div class="in-the-news">' .
									'<div><h5>In this Newsletter: </h5></div>' .
									'<div class="newsletter-stories">' . $newsletter_stories .
									'</div>' .
								'</div>'
								: '' ) .
								'</div>'
							);
						}

						endwhile;

							echo '</div>'; // end newsletter class.

							wp_reset_postdata();
						endif;

			} //end foreach.

				echo '</div>'; // end newsletter inner.

				echo '<div class="newsletter-signup-sidebar flex-3-col">';
					echo '<div class="newsletter-signup-inner">';
						dynamic_sidebar( 'Newsletter Signup' );
					echo '</div>';
				echo '</div>';

			echo '</div>'; // end newsletter container.

			?>
			
		</div><!--/row-->
	</div><!--/container-->
</div><!--/container-wrap-->

<?php get_footer(); ?>