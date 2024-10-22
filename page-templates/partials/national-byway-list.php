<?php
	/**
	 * Add check if $title is Texas; Return message about Additional Byways.
	 *
	 * @author Greg Miller, gregmiller.io
	 * @date 9-16-22
	 * @package Template
	 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="spacer-y-18">
<h2 class="mt-12 mb-8 text-2xl md:text-3xl text-outerspace">America's Byways Collection</h2>

	<ul class="grid grid-cols-1 byway-collection gap-x-4">

	<?php
		// Loop querying posts for National Byways ($nb_query) to present the Byway Info.
	if ( ! empty( $nb_query->have_posts() ) ) :

		while ( $nb_query->have_posts() ) :
			$nb_query->the_post();
			$permalink = get_permalink( $nb_query->ID );
			$query_id  = get_the_title( $nb_query->ID );

			// below is replaced by the $terms_string variable, recommended by coPilot.
			// $tax  = get_the_terms( $nb_query->ID, 'nb_designation' )[0]->slug;.

			// Gets the taxonomy slug from the $nb_query array and assigns it to $tax.
			$terms = get_the_terms( get_the_ID(), 'nb_designation' );
			$taxes = ( ! empty( $terms ) ) ? $terms[0]->slug : '';

			// If the tax equates to All American Roadway, add *.
			if ( 'arr' === $taxes ) :
				$asterisk = '*';
			else :
				$asterisk = '';
			endif;
			?>
	
				<li class="byway-item">
					<a href="<?php echo esc_url( $permalink ); ?>" class="item-link">
						<?php echo esc_html( $query_id ); ?></a>
						<?php // echo esc_html( $asterisk ); ?> 
				</li>
	
			<?php
			endwhile;
		else : // Instead of creating a list, show this gentle message.
			?>
			<li class="byway-item">
				Currently there are no All-American Roads or National Scenic Byways in
				<?php
				// escaped on single-state.php
				echo $the_title;
				?>.
			</li>
   
			<?php
			
		endif;
		?>

</ul> <!-- .byway-collection (National) -->
</section>
<?php

