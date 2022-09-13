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

    <h2 class="text-2xl md:text-3xl text-outerspace mt-10 mb-8">Additional Byways</h2>

    <ul class="byway-collection grid grid-cols-1 md:grid-cols-2  gap-x-4 mb-8">
				
				<?php
                endif;
                
                while ( $sb_query->have_posts() ) :
                    
                    $sb_query->the_post();
	                $query_id = get_the_title( $the_query->ID );
                    $permalink = get_permalink( $the_query->ID );
	                ?>

	                <?php
// This conditional was added per client. The page will show the byways but not
// link to the detail page content.
	                if ( $nb_meta_value === 'CA' |  $nb_meta_value === 'VA' ) :
				?>
				
        <li class="byway-item unlinked">
            <?php echo $query_id; ?>
        </li>
			    
			<?php // displays all states except TX CA and VA
                    elseif (  $nb_meta_value === 'TX' ) :
                    ?>
        
        <h2 class="text-2xl md:text-3xl text-outerspace mt-10 mb-8">Additional Byways</h2>
        <div class="unlinked">
            <p>Currently there are no additional byways in Texas</p>
        </div>
	                <?php
                    // For every other state use this method to link files
                    else :
                        // show for Texas?
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

        <li class="byway-item unlinked">
            Sorry there are no known Scenic Byways in <?php echo $title; ?>.
        </li>
    
    </ul>
    
    

			<?php
			endif;
		?>

<div id="update_form" class="mt-6 update-data hidden">
    <p><a href="<?php echo site_url( '/update/', 'https' ); ?>" class="bell" title="Help our foundation maintain accurate information about
<?php echo $official_byway_name; ?>."><i class="fa fa-bell"></i>&nbsp;Update</a> byway information
        today!<br>
<!--        <span class="">We are seeking your help to improve our records on the byways. Do you have information to-->
<!--        share?</span> </p>-->
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

