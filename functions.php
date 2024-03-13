<?php /** @noinspection ALL */
	
	add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles', 100);

function salient_child_enqueue_styles() {
		
		$nectar_theme_version = nectar_get_theme_version();
		wp_enqueue_style( 'salient-child-style', get_stylesheet_directory_uri() . '/style.css', '', $nectar_theme_version );
		
    if ( is_rtl() ) {
   		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
		}
}

/****  Begin Functions  ****/
	
	add_theme_support( 'post-thumbnails' );
	
	if ( function_exists( 'add_image_size' ) ) {
		add_image_size('byway_large', 800, 600 ); // Byway Large
		add_image_size('byway_small', 640, 480 ); // Byway Small
	}
	
	/**
	 * Responsive Image Helper Function
	 *
	 * @param string $image_id the id of the image (from ACF or similar)
	 * @param string $image_size the size of the thumbnail image or custom image size
	 * @param string $max_width the max width this image will be shown to build the sizes attribute
	 */
	
	function awesome_acf_responsive_image($image_id,$image_size,$max_width){
		
		// check the image ID is not blank
		if($image_id != '') {
			
			// set the default src image size
			$image_src = wp_get_attachment_image_url( $image_id, $image_size );
			
			// set the srcset with various image sizes
			$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );
			
			// generate the markup for the responsive image
			echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';
			
		}
	}
function print_var($val){
	echo '<pre>';
		print_r($val);
	echo '</pre>';
}

// Use theme version instead of filetime() function to set version number for cache busting

function child_theme_styles() {

	$theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style( 'child-styles', 
		get_stylesheet_directory_uri() . '/dist/child-styles.min.css',
      [], $theme_version, 'all' );
    
		wp_enqueue_style( 'child-responsive-styles', 
		get_stylesheet_directory_uri() . '/dist/child-responsive-styles.min.css',
			[], $theme_version, 'all' );
		
		wp_enqueue_style( 'byway-styles', 
		get_stylesheet_directory_uri() . '/dist/byways.css',
			[], $theme_version, 'all' );
}
add_action( 'wp_enqueue_scripts', 'child_theme_styles', 999, 1 );

//Enqueue Scripts from child theme

function child_theme_scripts() {
    wp_enqueue_script( 'custom-scripts', 
		get_stylesheet_directory_uri() . '/dist/custom-scripts.js', array('jquery'),
	    $theme_version,
	    true );
}
add_action( 'wp_enqueue_scripts', 'child_theme_scripts' );

// Changing excerpt more
	/**
	 * @param $more
	 *
	 * @return string
	 * @noinspection PhpUnusedParameterInspection
	 */
	function new_excerpt_more($more): string {
	global $post;
	remove_filter('excerpt_more', 'new_excerpt_more');
	return ' <a class="read_more" href="'. get_permalink($post->ID) . '">' . 'Read More' . '</a>';
  }
add_filter('excerpt_more','new_excerpt_more');

/* Add styles to NSBF Training tab in WP backend */

function my_custom_fonts() {
	echo '<style>
    .menu-icon-nsbf_training {
		background:#02AE4B;
    }
	</style>';
}

add_action('admin_head', 'my_custom_fonts');

/* End */

/* Function to display data for board member shortcodes */
	
	/** @noinspection PhpSwitchCaseWithoutDefaultBranchInspection
	 */
	function board_member_post_data($data, $atts){
	
	if ( isset( $result ) ) {
		$result;
	}

	switch($data){

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

			if( get_the_post_thumbnail() ){
				$result = get_the_post_thumbnail();
			} else{
				$result = '<div class="placeholder-board"><i class="fas fa-user"></i></div>';
			}

			break;

		case 'nsbf_position_job':

				foreach(get_field($atts['custom_field'][0]) as $key => $val){
					if( $key === 'job_title' ){
						$result = $val;
					}
				}
			break;

		case 'nsbf_position_committee':
			
				foreach(get_field($atts['custom_field'][0]) as $key => $val){
					if( $key === 'committee_position' ){
						$result = $val;
					}
				}
			break;

		case 'organization':
			$result = get_field($atts['custom_field'][1]);
			break;

		case 'location':
			$result = get_field($atts['custom_field'][2]);
			break;

		case 'phone':
			$result = get_field($atts['custom_field'][3]);
			break;

		case 'email':
			$result = get_field($atts['custom_field'][4]);
			break;
	}

	return $result;
}

/* End */

/* Only users logged in can see the training  */

// function redirect_non_admin_user(){

// 	if($post->post_type == 'nsbf_training'){
// 		echo 'true';
// 	}

//     if ( !is_user_logged_in() && $post->post_type == 'nsbf_training') {
//         if ( !current_user_can('administrator') || !current_user_can('editor')){
//             wp_redirect( site_url() );  exit;
//         }
//     }
// }

// add_action( 'admin_init', 'redirect_non_admin_user' );

/* End */
