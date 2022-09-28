<?php
	
	/**
	 * @template-part national-byway-list
	 * @date Jul-16-2021
	 * @author Greg Miller, gregmiller.io
	 *
     * @date 9-16-22
     * Add check if $title is Texas; Return message about Additional Byways
	 */
// Exit if accessed directly
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
?>


<h2 class="text-2xl md:text-3xl text-outerspace  mt-12 mb-8">America's Byways Collection</h2>
<!--    <ul class="byway-collection grid grid-cols-1">-->
    <ul class="byway-collection grid grid-cols-1  gap-x-4">

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
				if ( $tax === "aar" )  :
					$asterisk = '*';
				else :
                    $asterisk = '';
				endif;	?>
	
				<li class="byway-item">
					<a href="<?php echo $permalink; ?>" class="item-link"><?php echo $query_id; ?></a><?php echo
                    $asterisk; ?>
				</li>
    
			<?php
			endwhile;
        else : // Instead of creating a list, show this gentle message.
			?>
			<li class="byway-item">
				Currently there are no All-American Roads or National Scenic Byways in <?php echo $title; ?>.
			</li>
   
		<?php // Set this value here instead of on state byway list
            if ( $title === 'Texas' ) :
                ?>
                <h2 class="text-2xl md:text-3xl text-outerspace mt-10 mb-8">Additional Byways</h2>
                <div class="unlinked">
                    <p>Currently there are no additional byways in <?php echo $title; ?></p>
                </div>
                
            <?php
            // see state-byway-list.php for script triggering visibility of the 'update' link (line 97)
            endif;
		endif;
	?>

</ul> <!-- .byway-collection (National) -->

<?php
	wp_reset_postdata();
