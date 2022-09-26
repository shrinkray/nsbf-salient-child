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
            
            // sets grid-rows up to 42 to enable alphabetical list down columns
                    $found = $sb_query->found_posts;
                    $half_found = ceil( $found/2 );
			
				?>

    <h2 class="text-2xl md:text-3xl text-outerspace mt-10 mb-8 flex-1 ">Additional Byways</h2>
				
    <ul class="byway-collection grid grid_rows_<?php echo $half_found; ?> grid-flow-col gap-x-4 mb-4">

<?php
    // Issue with Tailwind CSS 2.2.19. Created own class for grid-row-# from 1 to 42 and with media-queries for
    // single row versions.
                    while ( $sb_query->have_posts() ) :
                    
                        $sb_query->the_post();
	                    $query_id = get_the_title( $the_query->ID );
                        $permalink = get_permalink( $the_query->ID );
	                   
	                    //Optimized way to get a comma separated list of terms.
	                    $term_obj_list = get_the_terms( $the_query->ID, 'sb_designation' );
	                    $terms_string = implode(', ', wp_list_pluck($term_obj_list, 'name'));
                   // Idea for $terms_string from: https://developer.wordpress.org
                   
	                  
	                ?>

	                <?php
// This conditional was added per client. The page will show the byways but not
// link to the detail page content.
	                    if ( $nb_meta_value === 'CA' |  $nb_meta_value === 'VA' ) :
				?>
				 
        <li class="byway-item unlinked">
                            <?php // $terms_string will be all the terms associated to the $query_id
                                echo $query_id; ?>
        </li>
			    
			<?php // displays all states except TX CA and VA
            
            
                        else :
	            // For every other state except for Texas and DC use this method to permalink
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
    
	
			endif; // !empty( have_posts() )
			
    /**
     * Note: #update_form will not display unless we have unlinked byways
     * This is intended to enable visitors to volunteer info to keep the content current
     */
		?>

<div id="update_form" class="mt-0 mb-4 update-data hidden">
    <p><a href="<?php echo site_url( '/update/', 'https' ); ?>" class="bell" title="Help our foundation maintain accurate information about
<?php echo $official_byway_name; ?>."><i class="fa fa-bell"></i>&nbsp;Update</a> byway information
        today!<br>

</div>

<script>
    // Show link to update items if displaying unlinked byways
    const unLinked = document.querySelector(".unlinked");
    const updateForm = document.getElementById("update_form");
    if ( unLinked ) {
        console.log('unlinked');
        updateForm.classList.remove("hidden");
        updateForm.classList.add("block");
    } else {
        console.log('linked');
    }

</script>
