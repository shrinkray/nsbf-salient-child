<?php
/**
 * The template for displaying single posts.
 *
 * @package Salient WordPress Theme
 * @version 10.5
 */

  // phpcs:disable WordPress.Files.FileName

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$nectar_options    = get_nectar_theme_options();
$fullscreen_header = ( ! empty( $nectar_options['blog_header_type'] )
&& 'fullscreen' === $nectar_options['blog_header_type'] && is_singular( 'post' ) ) ? true : false;
$blog_header_type  = ( ! empty( $nectar_options['blog_header_type'] ) )
? $nectar_options['blog_header_type'] : 'default';
$theme_skin        = ( ! empty( $nectar_options['theme-skin'] ) )
? $nectar_options['theme-skin'] : 'original';
$header_format     = ( ! empty( $nectar_options['header_format'] ) )
? $nectar_options['header_format'] : 'default';
if ( 'centered-menu-bottom-bar' === $header_format ) {
	$theme_skin = 'material';
}

$hide_sidebar                      = ( ! empty( $nectar_options['blog_hide_sidebar'] ) ) ?
										$nectar_options['blog_hide_sidebar'] : '0';
$blog_type                         = $nectar_options['blog_type'];
$blog_social_style                 = ( get_option( 'salient_social_button_style' ) ) ?
										get_option( 'salient_social_button_style' ) : 'fixed';
$enable_ss                         = ( ! empty( $nectar_options['blog_enable_ss'] ) ) ?
										$nectar_options['blog_enable_ss'] : 'false';
$remove_single_post_date           = ( ! empty( $nectar_options['blog_remove_single_date'] ) ) ?
										$nectar_options['blog_remove_single_date'] : '0';
$remove_single_post_author         = ( ! empty( $nectar_options['blog_remove_single_author'] ) ) ?
										$nectar_options['blog_remove_single_author'] : '0';
$remove_single_post_comment_number = ( ! empty(
	$nectar_options['blog_remove_single_comment_number']
) ) ? $nectar_options['blog_remove_single_comment_number'] : '0';
$remove_single_post_nectar_love    = ( ! empty( $nectar_options['blog_remove_single_nectar_love'] )
										) ? $nectar_options['blog_remove_single_nectar_love'] : '0';
$container_wrap_class              = ( true === $fullscreen_header ) ?
										'container-wrap fullscreen-blog-header' : 'container-wrap';

// Post header.
if ( have_posts() ) :
	while ( have_posts() ) :

		the_post();
		nectar_page_header( $post->ID );

endwhile;
endif;


// Post header fullscreen style when no image is supplied.
if ( true === $fullscreen_header ) {
	get_template_part( 'includes/partials/single-post/post-header-no-img-fullscreen' );
} ?>


<div class="
<?php
echo esc_attr( $container_wrap_class );
if ( 'std-blog-fullwidth' === $blog_type || '1' === $hide_sidebar ) {
	echo ' no-sidebar'; }
?>
" data-midnight="dark" data-remove-post-date="
<?php echo esc_attr( $remove_single_post_date ); ?>" data-remove-post-author="
<?php echo esc_attr( $remove_single_post_author ); ?>" data-remove-post-comment-number="
<?php echo esc_attr( $remove_single_post_comment_number ); ?>">
	<div class="container main-content">
		
		<?php
		// Post header regular style when no image is supplied.
		get_template_part( 'includes/partials/single-post/post-header-no-img-regular' );
		?>
			
		<div class="row">
			
			<?php

			nectar_hook_before_content();

			$blog_standard_type = ( ! empty( $nectar_options['blog_standard_type'] ) ) ?
			$nectar_options['blog_standard_type'] : 'classic';
			$blog_type          = $nectar_options['blog_type'];

			if ( null === $blog_type ) {
				$blog_type = 'std-blog-sidebar';
			}

			if ( 'minimal' === ( $blog_standard_type && 'std-blog-sidebar' === $blog_type ) ||
			'std-blog-fullwidth' === $blog_type ) {
				$std_minimal_class = 'standard-minimal';
			} else {
				$std_minimal_class = '';
			}

			if ( 'std-blog-fullwidth' === $blog_type || '1' === $hide_sidebar ) {
				// No sidebar.
				echo esc_html(
					'<div class="post-area col ' . $std_minimal_class . ' span_12 col_last">'
				); // WPCS: XSS ok.
			} else {
				// Sidebar.
				echo esc_html(
					'<div class="post-area col ' . $std_minimal_class . '">'
				); // WPCS: XSS ok.
			}

			// Main content loop.
			if ( have_posts() ) :
				while ( have_posts() ) :

					the_post();

					/**** Modify template */

					get_template_part( 'includes/partials/single-post/post-content-nsbf-board' );

					/**** End */

				endwhile;
			endif;

			wp_link_pages();

			nectar_hook_after_content();

			// Bottom social location for default minimal post header style.
			if ( 'default_minimal' === $blog_header_type &&
			'fixed' !== $blog_social_style &&
			'post' === get_post_type() ) {

				get_template_part( 'includes/partials/single-post/default-minimal-bottom-social' );

			}

			if ( true === $fullscreen_header && get_post_type() === 'post' ) {
				// Bottom meta bar when using fullscreen post header.
				get_template_part( 'includes/partials/single-post/post-meta-bar-ascend-skin' );
			}

			if ( 'ascend' !== $theme_skin ) {

				// Original/Material Theme Skin Author Bio.
				if ( ! empty( $nectar_options['author_bio'] ) &&
					'1' === $nectar_options['author_bio'] &&
					'post' === get_post_type() ) {
					get_template_part( 'includes/partials/single-post/author-bio' );
				}
			}

			?>

		</div>
				
		</div><!--/row-->

		<div class="row">

			<?php

				// Pagination/Related Posts.
				nectar_next_post_display();
				nectar_related_post_display();

				// Ascend Theme Skin Author Bio.
			if ( ! empty( $nectar_options['author_bio'] ) &&
					'1' === $nectar_options['author_bio'] &&
					'ascend' === $theme_skin &&
					'post' === get_post_type() ) {
				get_template_part( 'includes/partials/single-post/author-bio-ascend-skin' );
			}

			?>

			<div class="comments-section" data-author-bio="
			<?php
			if ( ! empty( $nectar_options['author_bio'] ) &&
				'1' === $nectar_options['author_bio'] ) {
				echo 'true';
			} else {
				echo 'false'; }
			?>
			">
				<?php comments_template(); ?>
			</div>   

		</div>

	</div><!--/container-->

</div><!--/container-wrap-->

<?php if ( 'fixed' === $blog_social_style ) {
		// Social sharing buttons.
	if ( function_exists( 'nectar_social_sharing_output' ) ) {
		nectar_social_sharing_output( 'fixed' );
	}
}

get_footer(); ?>