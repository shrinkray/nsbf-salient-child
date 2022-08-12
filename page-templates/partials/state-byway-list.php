<?php
	
	/**
	 * @template-part state-byway-list
	 * @date Jul162021
	 * @author Greg Miller, gregmiller.io
	 * @testedwith
	 */

?>



	
		
		<?php
			
			// Loop querying posts for State Byways ($sb_query) for state list
			
			if ( !empty( have_posts() ) ) :
    
                if ( $sb_query->have_posts() ) :
				?>

    <h2 class="text-2xl text-forestgreen mt-10 mb-8">Additional Byways</h2>

    <ul class="byway-collection grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-4">
				
				<?php
                endif;
                
                while ( $sb_query->have_posts() ) :
                    
                    $sb_query->the_post();
	                $query_id = get_the_title( $the_query->ID );
                    $permalink = get_permalink( $the_query->ID );
	                ?>

	                <?php
// This conditional was added per client. The page will show the byways but not link to the detail page content.
	                if ( $nb_meta_value === 'CA' |  $nb_meta_value === 'VA' ) :
				?>
				
        <li class="byway-item">
            <?php echo $query_id; ?>
        </li>
			    
			<?php // For every other state use this method to link files
                    else :
	                   ?>

       <li class="byway-item">
           <a href="<?php echo $permalink; ?>"><?php echo $query_id; ?></a>
       </li>
	
                       <?php
               endif;
	              
			endwhile;
				?>
    </ul>
				
				<?php
		
			else :
				?>

        <li class="byway-item">
            Sorry there are no known Scenic Byways in <?php echo $title; ?>.
        </li>
    
    </ul>
			
			<?php
			endif;
		?>

