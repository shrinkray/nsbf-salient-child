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
?>
<div class="spacer-y-12">
<?php
if ( have_rows( 'content_layout' ) ) :
	while ( have_rows( 'content_layout' ) ) : the_row(); ?>
    <div class="spacer-y-6">
    <?php
		if ( get_row_layout() == 'add_text_and_image' ) :

            // TEXT & IMAGE FIELDS
			if ( have_rows( 'add_content_image' ) ) :
				while ( have_rows( 'add_content_image' ) ) : the_row();
					$which_image = get_sub_field( 'image_placement' );
					$row_content = get_sub_field( 'row_content' );
					$image = get_sub_field( 'add_row_image' );
					$size = 'full';
					$enable_caption = get_sub_field( 'enable_caption' );
					$disable_image_mobile = get_sub_field('disable_image'); 
					$mobile_class = $disable_image_mobile ? 'hidden md:block' : '';
					$image_removed = $disable_image_mobile ? 'w-full' : '';
			
					?>
					<div class="<?php echo $which_image !== 'none' ? 'flex flex-col md:flex-row gap-8' : ''; ?>">
						<?php if ( $which_image !== 'none' && $image ) : ?>
							<div class="<?php echo $mobile_class; ?> md:w-1/3 <?php echo $which_image === 'right' ? 'md:order-last' : ''; ?>">
								<?php
								$image_url = wp_get_attachment_image_url( $image, $size );
								$image_srcset = wp_get_attachment_image_srcset( $image, $size );
								$image_sizes = wp_get_attachment_image_sizes( $image, $size );
								$image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true );
								$image_caption = wp_get_attachment_caption( $image );

								if ( $image_url ) :
									// optional: add caption to image
									echo $enable_caption ? '<figure class="mb-4">' : '';

									echo '<img src="' . esc_url($image_url) . '" 
											srcset="' . esc_attr($image_srcset) . '" 
											sizes="' . esc_attr($image_sizes) . '" 
											alt="' . esc_attr($image_alt) . '" 
											class="w-full h-auto">';

									// only display if caption is checked
									if ( $image_caption ) :
										echo '<figcaption class="mt-2 text-sm text-gray-600">' . esc_html( $image_caption ) . '</figcaption>';
									endif;

									echo '</figure>';
								else :
									echo "<!-- Debug: Image URL not found -->";
								endif;
								?>
							</div>
						<?php endif; ?>
						<div class="<?php echo $which_image !== 'none' ? ($disable_image_mobile ? 'w-full md:w-2/3' : 'md:w-2/3') : 'w-full'; ?>">
							<?php echo wp_kses_post( $row_content ); ?>
						</div>
					</div>
                </div>
					<?php
				endwhile;
			else :
				// No rows found
			endif;
		elseif ( get_row_layout() == 'add_semantic_heading' ) :
            
            // SEMANTIC HEADING VARS
			$add_heading = get_sub_field( 'add_heading' );
            $heading_tag = 'h' . $add_heading;
            
            $heading_class = '';
			$heading = '';

			if ( $add_heading !== 'none') {
				$heading = get_sub_field($heading_tag . '_heading');
			}
          
            if ( $heading_tag === 'h2' ) :
                $heading_class = 'flex-1 mt-10 mb-8 text-2xl md:text-3xl text-outerspace';
            elseif ( $heading_tag === 'h3' ) :
                $heading_class = 'flex-1 mt-10 mb-8 text-2xl md:text-3xl text-outerspace';
            elseif ( $heading_tag === 'h4' ) :
                $heading_class = 'flex-1 mt-10 mb-8 font-bold text-xl md:text-2xl text-outerspace';
            endif;

			if ( $heading ) : ?>
				<<?php echo esc_attr( "h{$add_heading}" ); ?>
                class="<?php echo esc_attr( $heading_class ); ?>">
					<?php echo esc_html( $heading ); ?>
				</<?php echo esc_attr( "h{$add_heading}" ); ?>>
			<?php 
			endif; 
		elseif ( get_row_layout() == 'add_pdf_file' ) :
            $share_info = get_sub_field( 'share_info' );
            ?>
    <div class="spacer-y-12">
        <div class="flex justify-center w-full px-2 py-6 border-goldenrod">
            <div class="w-full px-4 md:w-1/2">
                <?php
            // ADD PDF
			if ( have_rows( 'add_file' ) ) : ?>

                <ul class="list-disc list-inside">
                <?php
				while ( have_rows( 'add_file' ) ) : the_row();
					$attachment_type = get_sub_field( 'attachment_type' );
					$name = get_sub_field( 'attachment_name' );
					$add_url = get_sub_field( 'add_url' );
                    $url_filesize = get_sub_field( 'url_filesize' );
                    

                    $url_size = $url_filesize ? strtoupper( esc_html( $url_filesize ) ) : '';
                    
					$upload_pdf_file = get_sub_field( 'upload_pdf_file' );

                    if ($upload_pdf_file && is_array($upload_pdf_file)) {
                        $file_url = $upload_pdf_file['url'];
                        $file_name = $upload_pdf_file['filename'];
                        $file_size = $upload_pdf_file['filesize'];
                        $file_mime_type = $upload_pdf_file['mime_type'];
                        $upload_size = $file_size;
                    } else {
                        // Handle the case where $upload_pdf_file is not an array
                        $upload_size = '';
                        echo "<!-- Debug: upload_pdf_file is not an array or is false -->";
                 }

                    $filesize = $upload_size ? format_filesize( $upload_size ) : '';
                    ?>
                    <li class="">
                    <?php // if true, it's a URL 
					if ( $attachment_type ) :
                        
                        ?>
                        <a class="pdf-url"
                        aria-label="Download pdf <?php echo esc_html( $name ); ?>"
                        href="<?php echo esc_url( $add_url ); ?>"
                        target="_blank">
                        <?php echo esc_html( $name ); ?>
                        </a>
                        &nbsp;<span class="px-1 text-xs font-bold text-white bg-red-800 rounded-full">PDF</span>
                        <span class="text-sm"><?php echo $url_size; ?></span>
                        
                    <?php
                else : // it's an upload

                    echo '<a class="" href="' . esc_url( $upload_pdf_file['url'] ) . '" target="_blank"'
                    . 'aria-label="Download pdf ' . ( $name ? esc_html( $name ) : esc_html( $upload_pdf_file['filename'] ) ) . '">'
                    . ( $name ? esc_html( $name ) : esc_html( $upload_pdf_file['filename'] ) )
                    . '</a>'
                    . ' <span class="px-1 text-xs font-bold text-white bg-red-800 rounded-full">PDF</span>'
                    . ' <span class="text-sm">' . ( $filesize ? esc_html( $filesize ) : '' ) . '</span>';

                endif;
					?>
                    </li>
                    <?php
				endwhile; ?>
                </ul>
            </div>
            
                <?php
			else :
				// No rows found
			endif; 

            
            ?>
            <div class="w-full px-4 md:w-1/2" aria-labelledby="pdf-description">
                <h2 id="pdf-description" class="sr-only">PDF Information</h2>
                <?php
                echo $share_info
                ? $share_info
                : 'Unfortunately we have no additional information available at this time.';
            ?>
            </div>
        </div>
    </div>
        <?php
		endif;
	endwhile;
else:
	// No layouts found
endif;
?>
</div> 
<?php