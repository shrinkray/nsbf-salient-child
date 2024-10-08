<?php
/**
 * /*template name: Webinar Page Template
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

				$args = array(
					'post_type'      => 'nsbf_webinar',
					'posts_per_page' => -1,
				);

				$custom_post_type = new WP_Query( $args );

				if ( $custom_post_type->have_posts() ) :


					echo esc_html(
						'<div class="webinar-container">' .
							'<div class="webinar-inner flex-2-3-col margin-center-element">' .
								'<div
								class="webinar-header flex-container keep-flex flex-v-center">' .
								'<div class="flex-3-4-col">' .
									'<div class="webinar-title"><h5>Title</h5></div>' .
								'</div>' .
								'<div class="flex-4-col">' .
									'<div class="webinar-link">' .
										'<div class="webinar-date"><h5>Date</h5></div>' .
									'</div>' .
								'</div>' .
							'</div>'
					);


					while ( $custom_post_type->have_posts() ) :
						$custom_post_type->the_post();

						$the_title    = get_the_title();
						$webinar_date = get_field( 'date' );


						echo acf_esc_html(
							'<div class="webinar-item flex-container keep-flex flex-v-center">' .
								'<div class="flex-3-4-col">' .
									'<div class="webinar-title"><h5>' . $the_title . '</h5></div>' .
								'</div>' .
								'<div class="flex-4-col">' .
									'<div class="webinar-link flex-container">' .
										'<div class="webinar-date">' . $webinar_date . '</div>' .
									'</div>' .
								'</div>' .
							'</div>'
						);

							endwhile;
							wp_reset_postdata();
						echo '</div>';
					echo '</div>';

				endif;

				// } //end foreach

				?>
			
		</div><!--/row-->
	</div><!--/container-->
</div><!--/container-wrap-->

<?php get_footer(); ?>