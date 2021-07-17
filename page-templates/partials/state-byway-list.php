<?php
	
	/**
	 * @template-part state-byway-list 
	 * @date Jul162021
	 * @author Greg Miller, gregmiller.io
	 * @testedwith
	 */

?>


<div class="state-byways-list">
	<h3 class="text-2xl text-forestgreen mt-10 mb-8">State Byways</h3>
	
	<ul class="byway-collection grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-4">
		
		<?php
			
			// Loop querying posts for State Byways ($sb_query) for state list
			
			if ( !empty( have_posts() ) ) :
                while ( $sb_query->have_posts() ) :
                    $sb_query->the_post();
				
                    $permalink = get_permalink( $the_query->ID );
                    $query_id = get_the_title( $the_query->ID );
				?>
				
        <li class="byway-item">
            <a href="<?php echo $permalink; ?>"><?php echo $query_id; ?></a>
        </li>
			
			<?php
			endwhile;
			
			else :
				?>

        <li class="byway-item">
            Sorry there are no known Scenic Byways in <?php echo $title; ?>.
        </li>
			
			<?php
			endif;
		?>
	
	</ul> <!-- .byway-collection (State) -->
</div>