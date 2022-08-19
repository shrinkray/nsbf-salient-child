<?php
	
	// holds alternative to get images

?>

<div class="section image order-first mb-8 md:order-none lg:order-none">
	<div class="detail-image">
		<?php if ( have_rows( 'sb_iconic_images' ) ) : ?>
			<?php while ( have_rows( 'sb_iconic_images' ) ) : the_row(); ?>
				<?php
				$image_title = get_sub_field( 'image_title' );
				$image_alt = get_sub_field( 'image_alt_text' );
				$image_attr = get_sub_field( 'image_attribution' );
				$image = get_sub_field( 'image_url' );
				
				echo $image['url'] ;
				echo $image_title ;
				echo $image_alt ;
				echo $image_attr ;
				?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // No rows found ?>
		<?php endif; ?>
	</div>
	<div class="attribution text-right italic">
		
		<?php if ( ! empty( have_rows( 'sb_iconic_images' ) ) ) :
			$first_credit = true;
			
			// combo conditional to get just the first record
			while ( $first_credit && have_rows( 'sb_iconic_images' ) ) : the_row();
				?>
				
				<?php
				$attribution = get_sub_field( 'image_attribution' );
				echo $attribution;
				// set false to stop from getting the next record
				$first_credit = false;
				?>
				
				
				<span class="source">attr: <?php echo $attribution; ?></span>
				<?php if( ! empty( $attribution ) ) : ?>
					<span class="photo-credit"></span>
				<?php endif; //
				?>
			<?php
			endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	</div>
</div> <!-- .section -->
