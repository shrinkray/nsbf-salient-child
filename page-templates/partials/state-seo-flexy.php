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

if ( have_rows( 'content_layout' ) ):
	while ( have_rows( 'content_layout' ) ) : the_row();
		if ( get_row_layout() == 'order_page_content' ) :
			the_sub_field( 'add_heading' );
			the_sub_field( 'h2_heading' );
			the_sub_field( 'h3_heading' );
			the_sub_field( 'h4_heading' );
			if ( have_rows( 'add_content_image' ) ) :
				while ( have_rows( 'add_content_image' ) ) : the_row();
					the_sub_field( 'image_placement' );
					the_sub_field( 'row_content' );
					$add_row_image = get_sub_field( 'add_row_image' );
					$size = 'full';
					if ( $add_row_image ) :
						echo wp_get_attachment_image( $add_row_image, $size );
					endif;
					if ( get_sub_field( 'enable_caption' ) == 1 ) :
						// echo 'true';
					else :
						// echo 'false';
					endif;
					if ( get_sub_field( 'disable_image' ) == 1 ) :
						// echo 'true';
					else :
						// echo 'false';
					endif;
				endwhile;
			else :
				// No rows found
			endif;
			if ( have_rows( 'add_file' ) ) :
				while ( have_rows( 'add_file' ) ) : the_row();
					if ( get_sub_field( 'attachment_type' ) == 1 ) :
						// echo 'true';
					else :
						// echo 'false';
					endif;
					the_sub_field( 'attachment_name' );
					the_sub_field( 'add_url' );
					$upload_pdf_file = get_sub_field( 'upload_pdf_file' );
					if ( $upload_pdf_file ) :
						?>
						<a href="<?php echo esc_url( $upload_pdf_file['url'] ); ?>"><?php echo esc_html( $upload_pdf_file['filename'] ); ?></a>
						<?php
					endif;
					the_sub_field( 'url_filesize' );
				endwhile;
			else :
				// No rows found
			endif;
		endif;
	endwhile;
else:
	// No layouts found
endif;
