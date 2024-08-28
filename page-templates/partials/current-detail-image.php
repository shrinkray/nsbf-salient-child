<?php
	/**
	 * Byway detail sub template pulled into byway-detail template.
	 * Current method for JPG images.
	 * Replace with sub-detail-image when implementing WebP images.
	 *
	 * @template   Images Section
	 * @date       Aug28,2024
	 * @author     Greg Miller, gregmiller.io
	 * @package    template
	 */

if ( ! defined( 'ABSPATH' ) ) :
	exit;
endif;
$alt_text = get_sub_field( 'image_alt_text' );

		// Evaluate if $alt_text contains a value, if not use message.
		$show_alt_text = ( $alt_text ) ? esc_attr( $alt_text ) :
		'Visit again for updated information';

		$image = get_the_post_thumbnail(
			$post_id,
			'byway_large',
			array( 'alt' => $show_alt_text )
		);

		// checks for post image if none, do not show empty box nor line.
		if ( has_post_thumbnail() ) :
			?>

		<div class="detail-image">
			<?php

			echo wp_kses_post( $image );

			?>
		</div>
			<?php
			else :
				?>

		<div class="detail-image placeholder"></div>
		
				<?php
			endif;
			?>
		
		
		<div class="italic attribution">
			<?php
			if ( ! empty( have_rows( 'nb_iconic_images' ) ) ) :
					$first_credit = true;

					// combo conditional to get just the first record.
				while ( $first_credit && have_rows( 'nb_iconic_images' ) ) :
					the_row();

					$attribution = get_sub_field( 'image_attribution' );
					// set false to stop from getting the next record.
					$first_credit = false;
					?>
		
		
			<span class="source"><?php echo esc_html( $attribution ); ?></span>
					<?php if ( ! empty( $attribution ) ) : ?>
			<span class="photo-credit"> Photo</span>
						<?php echo esc_html( $show_alt_text ); ?>
					<?php endif; ?>
					<?php
				endwhile;
				?>
				<?php
			else :
				// no rows found.
				?>
			<?php endif; ?>
		</div>
		