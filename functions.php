<?php
/**
 * Functions for Salient Child Theme.
 *
 * @package Custom
 */

	add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles', 100 );

/**
 * Enqueue styles.
 *
 * @return void
 */
function salient_child_enqueue_styles() {

		$nectar_theme_version = nectar_get_theme_version();
		wp_enqueue_style(
			'salient-child-style',
			get_stylesheet_directory_uri() . '/style.css',
			'',
			$nectar_theme_version
		);

	if ( is_rtl() ) {
		wp_enqueue_style(
			'salient-rtl',
			get_template_directory_uri() . '/rtl.css',
			array(),
			'1',
			'screen'
		);
	}
}

/****  Begin Functions  */

	add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'byway_large', 800, 600, true ); // Byway Large.
	add_image_size( 'byway_small', 640, 480, true ); // Byway Small.
}
/**
 * Add byway inage sizes.
 *
 * @return void
 */
function add_byway_image_sizes() {
	add_image_size( 'byway_large', 800, 600, true );
	add_image_size( 'byway_small', 400, 300, true );
}
add_action( 'after_setup_theme', 'add_byway_image_sizes' );
/**
 * Responsive Image Helper Function.
 *
 * @param string $image_id the id of the image (from ACF or similar).
 * @param string $image_size the size of the thumbnail image or custom image size.
 * @param string $max_width the max width this image will be shown to build the sizes attribute.
 */
function awesome_acf_responsive_image( $image_id, $image_size, $max_width ) {

	// check the image ID is not blank.
	if ( '' !== $image_id ) {

		// set the default src image size.
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );

		// set the srcset with various image sizes.
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

		// generate the markup for the responsive image.
		echo 'src="' . esc_url( $image_src ) . '" srcset="' .
		esc_html( $image_srcset ) . '" sizes="(max-width: ' .
		esc_attr( $max_width ) . ') 100vw, ' . esc_attr( $max_width ) . '"';

	}
}

/**
 * Checks if a webP version of an image exists.
 *
 * @param mixed $image_url path to the image.
 *
 * @return string
 */
function get_webp_image_url( $image_url ) {
	$webp_url = preg_replace( '/\.( jpg|jpeg|png )$/i', '.webp', $image_url );

	// Check if the WebP version exists on the server.
	$upload_dir = wp_upload_dir();
	$webp_path  = str_replace( $upload_dir['baseurl'], $upload_dir['basedir'], $webp_url );

	if ( file_exists( $webp_path ) ) {
		return $webp_url;
	}

	return false;
}


/**
 * Use theme version instead of filetime() function to set version number for cache busting.
 *
 * @return void
 */
function child_theme_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

		wp_enqueue_style(
			'merged-child-styles',
			get_stylesheet_directory_uri() . '/dist/merged-styles.css',
			array(),
			$theme_version,
			'all'
		);

		wp_enqueue_style(
			'byway-styles',
			get_stylesheet_directory_uri() . '/dist/byways.css',
			array(),
			$theme_version,
			'all'
		);
}
add_action( 'wp_enqueue_scripts', 'child_theme_styles', 999, 1 );

/**
 * Enqueue scripts from child theme
 *
 * @return void
 */
function child_theme_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'custom-scripts',
		get_stylesheet_directory_uri() . '/dist/custom-scripts.js',
		array( 'jquery' ),
		$theme_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'child_theme_scripts' );

/**
 * Custom function for more link.
 *
 * @param string $more The string contents.
 * @return string
 */
function new_excerpt_more( $more ): string {
	global $post;
	remove_filter( 'excerpt_more', 'new_excerpt_more' );
	return $more . ' <a class="read_more" href="' . get_permalink( $post->ID ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/* Add styles to NSBF Training tab in WP backend */

/**
 * Custom styling for item in admin sidebar.
 *
 * @return void
 */
function my_custom_fonts() {
	echo '<style>
	.menu-icon-nsbf_training {
		background:#02AE4B;
	}
	</style>';
}

add_action( 'admin_head', 'my_custom_fonts' );

/* End */

/* Function to display data for board member shortcodes */

/**
 * Board member gallery.
 *
 * @param mixed $data value of case.
 * @param mixed $atts value of attrubute.
 *
 * @return $result
 */
function board_member_post_data( $data, $atts ) {

	if ( isset( $result ) ) {
		$result;
	}

	switch ( $data ) {

		case 'title':
			$result = get_the_title();
			break;

		case 'content':
			$result = get_the_content();
			break;

		case 'profile_link':
			$result = get_the_permalink();
			break;

		case 'board_img':
			if ( get_the_post_thumbnail() ) {
				$result = get_the_post_thumbnail();
			} else {
				$result = '<div class="placeholder-board"><i class="fas fa-user"></i></div>';
			}

			break;

		case 'nsbf_position_job':
			foreach ( get_field( $atts['custom_field'][0] ) as $key => $val ) {
				if ( 'job_title' === $key ) {
					$result = $val;
				}
			}
			break;

		case 'nsbf_position_committee':
			foreach ( get_field( $atts['custom_field'][0] ) as $key => $val ) {
				if ( 'committee_position' === $key ) {
					$result = $val;
				}
			}
			break;

		case 'organization':
			$result = get_field( $atts['custom_field'][1] );
			break;

		case 'location':
			$result = get_field( $atts['custom_field'][2] );
			break;

		case 'phone':
			$result = get_field( $atts['custom_field'][3] );
			break;

		case 'email':
			$result = get_field( $atts['custom_field'][4] );
			break;
	}

	return $result;
}
/**
 * Register sidebars.
 *
 * @return void
 */
function register_newsletter_signup_sidebar() {

	register_sidebar(
		array(
			'name'          => 'Newsletter Signup',
			'id'            => 'newsletter-signup',
			'description'   => 'Add widgets here to appear in the newsletter signup sidebar.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'register_newsletter_signup_sidebar' );

/**
 * Calculate file size.
 * 
 * @return string;
 */
function format_filesize($bytes) {
	if ($bytes >= 1048576) {
		return number_format($bytes / 1048576, 2) . ' MB';
	} elseif ($bytes >= 1024) {
		return number_format($bytes / 1024, 2) . ' KB';
	} else {
		return $bytes . ' bytes';
	}
}

/**
 * Apply custom CSS to ACF admin block.
 *
 * @return void
 */
function my_acf_admin_head() {
    ?>
    <style>

        .acf-repeater.-block > table > tbody > tr > td {
            border-top: #8cb1ff solid 2px;
        }
        .acf-repeater.-block > table > tbody > tr:nth-child(even) > td:nth-child(2) {
            background-color: #f3f6ff;
        }
        .acf-row-number {
            padding: 4px 8px;
            background: white;
            border-radius: 50%;
            color: #0052fc;
        }
		 /* When #flexy-content exists, target #postbox-container-2 */
        body.wp-admin #post-body:has(#flexy-content) #postbox-container-2 {
            opacity: 0.5 !important;
        }
    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');

/**
 * Include template functions
 */
require_once get_stylesheet_directory() . '/inc/template-functions.php';