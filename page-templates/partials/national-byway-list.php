<?php
	
	/**
	 * @template-part national-byway-list
	 * @date Jul-16-2021
	 * @author Greg Miller, gregmiller.io
	 * @testedwith
	 */

?>

<div class="color-bar bg-gradient-to-r from-yellow-300 to-yellow-600"></div>
<h3 class="text-2xl text-steelblue  mt-10 mb-8">America's Byways Collection</h3>
<ul class="byway-collection grid grid-cols-1">
	
	<?php
		// Loop querying posts for National Byways ($nb_query) to present the Byway Info
		
		if ( !empty( $nb_query->have_posts() ) ) :
			while ( $nb_query->have_posts() ) :
				$nb_query->the_post();
				$permalink = get_permalink( $the_query->ID );
				$query_id  = get_the_title( $the_query->ID );
				
				?>
				<li class="byway-item">
					<a href="<?php echo $permalink; ?>"><?php echo $query_id; ?></a>
				</li>
			
			<?php
			endwhile;
			else : // Instead of creating a list, show this gentle message.
			?>
			<li class="byway-item">
				Sorry, there are no known All-American Roads or National Scenic Byways in <?php echo $title; ?>.
			</li>
		
		<?php
		endif;
	?>

</ul> <!-- .byway-collection (National) -->
<?php
	wp_reset_postdata();