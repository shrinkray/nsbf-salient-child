<?php
/**
* Single Post Content
*
* @version 10.5
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

global $nectar_options;

$nectar_post_format            = get_post_format();
$hide_featrued_image           = ( ! empty( $nectar_options['blog_hide_featured_image'] ) ) ? $nectar_options['blog_hide_featured_image'] : '0';
$single_post_header_inherit_fi = ( ! empty( $nectar_options['blog_post_header_inherit_featured_image'] ) ) ? $nectar_options['blog_post_header_inherit_featured_image'] : '0';

//Get ACF infor for Board Members
$board_position = get_field('nsbf_position');
$board_organization = get_field('organization');
$board_location = get_field('location');
$board_phone = get_field('phone');
$board_email = get_field('email');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <div class="inner-wrap">

		<div class="post-content flex-3-4-col margin-center-element" data-hide-featured-media="<?php echo esc_attr( $hide_featrued_image ); ?>">
      
        <?php

        /**** Modify template ****/

        echo '<div class="post-board-title text-center"><h1>'. get_the_title() .'</h1></div>';

        echo '<div class="post-board-container flex-container">';
        
        // Featured Image.
        if ( has_post_thumbnail() ) {
          echo '<div class="flex-3-col">
            <span class="board-info-top post-featured-img board-member-img margin-center-element">' . get_the_post_thumbnail( get_the_ID(), '600' ) . '</span>
            <div class="board-info-bottom">'.
              '<div style="font-weight:bold;">'. $board_position['job_title'] .'</div>'.
              '<div style="font-weight:bold;">'. $board_position['committee_position'] .'</div>'.
              '<div style="color:#d5641c;font-weight:bold;">'. $board_organization .'</div>'.
              '<div>'. $board_location['address'] .'</div>'.
              '<div>'. $board_location['city'] .', '. $board_location['state'] . ' '. $board_location['zip'] .'</div>'.
              '<div>'. $board_phone .'</div>'.
              '<div><a href="mailto:'. $board_email .'">'. $board_email .'</a></div>'.
            '</div>
          </div>';
        }

        /**** End ****/

        echo '<div class="content-inner flex-2-3-col">';
          
          // Post content.
          if( 'link' !== $nectar_post_format ) {
            the_content( '<span class="continue-reading">' . esc_html__( 'Read More', 'salient' ) . '</span>' );
          }
          
          // Tags.
          if ( '1' === $nectar_options['display_tags'] && has_tag() ) {
            echo '<div class="post-tags"><h4>' . esc_html__( 'Tags:', 'salient' ) . '</h4>';
            the_tags( '', '', '' );
            echo '<div class="clear"></div></div> ';
          }

        echo '</div>';

        echo'</div>';
          

        
        ?>
        
      </div><!--/post-content-->
      
    </div><!--/inner-wrap-->
    
</article>