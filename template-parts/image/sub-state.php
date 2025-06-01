<?php
	/**
	 * Byway detail sub template pulled into byway-detail-sb (state)template.
	 * Differs using sb_iconic_images instead of nb_iconic_images.
	 *
	 * @template   Images Section
	 * @date       Aug27,2024
	 * @author     Greg Miller, gregmiller.io
	 * @package    template
	 */

if ( ! defined( 'ABSPATH' ) ) :
	exit;
endif;
	$alt_text = get_sub_field( 'image_alt_text' );

	// Evaluate if $alt_text contains a value, if not use a default message.
	$alt_text = $alt_text ? esc_attr( $alt_text ) : 'Visit again for updated information';

	// Get the post thumbnail ID.
	$thumbnail_id = get_post_thumbnail_id( $post_id );

	// Retrieve different image sizes using the thumbnail ID.
	$image_large = wp_get_attachment_image_src( $thumbnail_id, 'byway_large' );
	$image_small = wp_get_attachment_image_src( $thumbnail_id, 'byway_small' );

	// Check for WebP versions.
	$image_large_webp = get_webp_image_url( $image_large );
	$image_small_webp = get_webp_image_url( $image_small );

	// Check if the post has a thumbnail.
if ( has_post_thumbnail() ) :
	?>

		<div class="detail-image">
			<picture>
				<!-- WebP sources if available -->
				<?php if ( $image_large_webp ) : ?>
					<source srcset="<?php echo esc_url( $image_large_webp ); ?>
					" media="(min-width: 400px)" type="image/webp">
					<?php
				endif;
				// Removed medium option.
				?>
				
				<?php if ( $image_small_webp ) : ?>
					<source srcset="<?php echo esc_url( $image_small_webp ); ?>
					" media="(max-width: 399px)" type="image/webp">
				<?php endif; ?>

				<!-- Fallback to JPG/PNG sources -->
				<source srcset="<?php echo esc_url( $image_large ); ?>
				" media="(min-width: 800px)">
				<source srcset="<?php echo esc_url( $image_small ); ?>
				" media="(max-width: 399px)">

				<!-- Default img element -->
				<img src="<?php echo esc_url( $image_large ); ?>
				" alt="<?php echo esc_attr( $alt_text ); ?>">
			</picture>
		</div>

		<?php
	else :
		// If no image is found, display a placeholder div.
		?>
		<div class="detail-image placeholder"></div>
		<?php
	endif;
	?>

	<div class="italic attribution">
		<?php
		// Check if there are iconic images and display the first attribution.
		if ( have_rows( 'sb_iconic_images' ) ) :
			$first_credit = true;

			while ( $first_credit && have_rows( 'sb_iconic_images' ) ) :
				the_row();

				$attribution  = get_sub_field( 'image_attribution' );
				$first_credit = false; // Stop after the first record.

				?>
				<span class="source"><?php echo wp_kses_post( $attribution ); ?></span>
				<?php if ( ! empty( $attribution ) ) : ?>
					<span class="photo-credit"> Photo</span>
				<?php endif; ?>
				<?php
			endwhile;
		else :
			?>
			<!-- No image attribution found -->
		<?php endif; ?>
	</div>
