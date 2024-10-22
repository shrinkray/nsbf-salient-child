<?php
/**
 * Building unique contextual content onto state pages (Partner content project).
 *
 * @template   single-state
 * @date       April302024
 * @update     Oct212024
 * @author     Greg Miller, hello@gregmiller.io
 * @package    Template
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
// Add this at the very top of the file
   echo "<!-- State SEO content last modified: " . date('Y-m-d H:i:s', filemtime(__FILE__)) . " -->";

   // Your new content here
   
if ( have_rows( 'add_state_page_content' ) ) :
    while ( have_rows( 'add_state_page_content' ) ) : the_row();
        $add_heading = get_sub_field( 'add_a_heading' );
        $heading     = '';
        $which_image = get_sub_field( 'image_placement' ); 
        $content     = get_sub_field( 'row_content' );
        $image       = get_sub_field( 'add_row_image' );
        $size        = 'full';
        $enable_caption = get_sub_field( 'enable_caption' );

		if ( $add_heading !== 'none') {
			$heading = get_sub_field('h' . $add_heading . '_heading');
		}
        ?>

        
    <?php if ( $heading ) : ?>
        <<?php echo esc_attr( "h{$add_heading}" ); ?> class="mb-4 text-2xl font-bold text-outerspace">
            <?php echo esc_html( $heading ); ?>
        </<?php echo esc_attr( "h{$add_heading}" ); ?>>
    <?php endif; ?>

    <div class="<?php echo $which_image !== 'none' ? 'flex flex-col md:flex-row gap-8' : ''; ?>">
        <?php if ( $which_image !== 'none' && $image ) : ?>
    <div class="md:w-1/3 <?php echo $which_image === 'right' ? 'md:order-last' : ''; ?>">
        <?php
        $image_url = wp_get_attachment_image_url( $image, $size );
        $image_srcset = wp_get_attachment_image_srcset( $image, $size );
        $image_sizes = wp_get_attachment_image_sizes( $image, $size );
        $image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true );
        $image_caption = wp_get_attachment_caption( $image );

        if ( $image_url ) {
            // optional: add caption to image
            echo $enable_caption ? '<figure class="mb-4">' : '';

            echo '<img src="' . esc_url($image_url) . '" 
                       srcset="' . esc_attr($image_srcset) . '" 
                       sizes="' . esc_attr($image_sizes) . '" 
                       alt="' . esc_attr($image_alt) . '" 
                       class="w-full h-auto">';

          // only display if caption is checked
          if ( $image_caption ) {
                echo '<figcaption class="mt-2 text-sm text-gray-600">' . esc_html( $image_caption ) . '</figcaption>';
            }
            echo '</figure>';

            
        } else {
            echo "<!-- Debug: Image URL not found -->";
        }
        ?>
    </div>
<?php endif; ?>

        <div class="<?php echo $which_image !== 'none' ? 'md:w-2/3' : 'w-full'; ?>">
            <?php echo wp_kses_post( $content ); ?>
        </div>
    </div>


    <?php endwhile;
else :
    // No rows found
endif;

