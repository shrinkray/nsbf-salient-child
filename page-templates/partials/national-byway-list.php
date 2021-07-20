<?php
	
	/**
	 * @template-part national-byway-list
	 * @date Jul-16-2021
	 * @author Greg Miller, gregmiller.io
	 * @testedwith
	 */

?>

<div class="color-bar bg-gradient-to-r from-yellow-600 to-yellow-300 mt-10"></div>
<h2 class="text-3xl text-outerspace  mt-12 mb-8">America's Byways Collection</h2>
<ul class="byway-collection grid grid-cols-1">
	
	<?php
		// Loop querying posts for National Byways ($nb_query) to present the Byway Info
		
		if ( !empty( $nb_query->have_posts() ) ) :
			while ( $nb_query->have_posts() ) :
				$nb_query->the_post();
				$permalink = get_permalink( $the_query->ID );
				$query_id  = get_the_title( $the_query->ID );
				
				// Gets the taxonomy slug from the $nb_query array
				$tax  = get_the_terms( $the_query->ID, 'nb_designation' )[0]->slug;
				
				// If the tax equates to All American Roadway, we echo out our notification in the list item below
				if ( $tax === 'aar' ) :
					$asterisk = '*';
				endif;	?>
	
				<li class="byway-item">
					<a href="<?php echo $permalink; ?>"><?php echo $query_id; ?></a><?php echo $asterisk; ?>
				</li>
    
			<?php
			endwhile;
        else : // Instead of creating a list, show this gentle message.
			?>
			<li class="byway-item">
				Currently there are no All-American Roads or National Scenic Byways in <?php echo $title; ?>.
			</li>
		
		<?php
		endif;
	?>

</ul> <!-- .byway-collection (National) -->
    <div class="color-bar bg-gradient-to-r
from-yellow-300 to-yellow-600 mt-14"></div>
<?php
	wp_reset_postdata();