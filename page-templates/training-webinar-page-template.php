<?php
/**
 * Template name: Training Webinar Page Template
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


					echo '<div class="webinar-container">';
						echo '<div class="webinar-inner flex-2-3-col margin-center-element">';


					while ( $custom_post_type->have_posts() ) :
						$custom_post_type->the_post();

						$webinar_date = get_field( 'date' );

						echo acf_esc_html(
							'<div class="webinar-item flex-container flex-v-center">' .
								'<div class="flex-3-4-col">' .
									'<div class="webinar-title">
										<h5>' . get_the_title() .
										' <span style="color:#006b94;">(' . $webinar_date . ')
										</span></h5>
									</div>' .
								'</div>' .
								'<div class="flex-4-col">' .
									'<div class="webinar-link flex-container">' .
										'<div class="webinar-html general-button blue-button">' .
											'<a href="' . get_the_permalink() . '
											" target="_blank">View Webinar</a>' .
										'</div>' .
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