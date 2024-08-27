<?php
	/**
	 * Byway detail sub template pulled into byway-detail template.
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

		// Evaluate if $alt_text contains a value, if not use message.
		echo ( $alt_text ) ? esc_attr( $alt_text ) :
		'Visit again for updated information';

		$image = get_the_post_thumbnail(
			$post_id,
			'byway_large',
			array( 'alt' => $alt_text )
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

					$attribution  = get_sub_field( 'image_attribution' );
					$first_credit = false; // set  false to stop from getting the next record.

					?>
					 

				<span class="source"><?php echo wp_kses_post( $attribution ); ?></span>
					<?php if ( ! empty( $attribution ) ) : ?>
				<span class="photo-credit"> Photo</span>
						<?php
					endif;
					?>
					<?php
				endwhile;
				?>
			<?php else : ?>
				<?php // no rows found. ?>
			<?php endif; ?>
		</div>