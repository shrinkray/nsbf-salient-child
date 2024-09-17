<?php
/**
 * Doc block.
 *
 * @template-part state-byway-list
 * @date Jul162021
 * @author Greg Miller, gregmiller.io
 * @package template
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

	
		
	<?php

		// Loop querying posts for State Byways ($sb_query) for state list.

	if ( ! empty( have_posts() ) ) :

		// sets grid-rows up to 42 to enable alphabetical list down columns.
			$found      = acf_esc_html( $sb_query->found_posts );
			$half_found = ceil( $found / 2 );

		?>

			<h2 class="flex-1 mt-10 mb-8 text-2xl md:text-3xl text-outerspace ">
				Additional Byways</h2>
						
			<ul class="byway-collection grid grid_rows_<?php echo $half_found; ?> 
			&nbsp;grid-flow-col gap-x-4 mb-4">

			<?php
			// Create own class for grid-row-# from 1 to 42 and with media-queries.
			while ( $sb_query->have_posts() ) :

				$sb_query->the_post();
				$query_id  = esc_html( get_the_title( $sb_query->ID ) );
				$permalink = esc_url( get_permalink( $sb_query->ID ) );


				// Optimized way to get a comma separated list of terms.
				// $term_obj_list = get_the_terms( get_the_ID(), 'sb_designation' );
				// $terms_string = implode(', ', wp_list_pluck($term_obj_list, 'name'));
				// Idea for $terms_string from: https://developer.wordpress.org.

				// This conditional was added per client. The page will show the byways but not.
				if ( 'VA' === $nb_meta_value ) :
					?>
						
						<li class="byway-item unlinked">
						<?php
						echo $query_id;
						?>
						</li>
						
						<?php
						// displays all states except TX CA and VA.

					else :

						?>

						<li class="byway-item">
							<a href="<?php echo $permalink; ?>">
								<?php echo $query_id; ?>
							</a>
						</li>
						<?php
					endif;

				endwhile;

				// Set this value here instead of on state byway list.
			if ( 'Texas' === $the_title ) :
				?>
				<div class="unlinked">
					<p>Currently there are no additional byways in
						<?php
				// escaped on single-state.php
				echo $the_title;
				?>.</p>
				</div>
				
				<?php
				// see state-byway-list.php for script triggering visibility of link (line 97).
			endif;

			?>
			</ul>
				
				<?php


		endif; // posts.


/**
 * Note: #update_form will not display unless we have unlinked byways
 * This is intended to enable visitors to volunteer info to keep the content current
 */

// Define $official_byway_name or set a default value
$official_byway_name = isset($official_byway_name) ? $official_byway_name : 'this byway';
?>

<div id="update_form" class="hidden mt-0 mb-4 update-data">
    <p><a href="<?php echo esc_url( site_url( '/update/', 'https' ) ) . ' '; ?>" 
    class="bell" title="Help our foundation maintain accurate information about
    <?php echo esc_html( $official_byway_name ); ?>."><i class="fa fa-bell"></i>&nbsp;Update
    </a> byway information
        today!<br>
</div>

			<script>
				// Show link to update items if displaying unlinked byways.
				const unLinked = document.querySelector( ".unlinked" );
				const updateForm = document.getElementById( "update_form" );
				if ( unLinked ) {
					console.log( 'unlinked' );
					updateForm.classList.remove( "hidden" );
					updateForm.classList.add( "block" );
				} else {
					console.log( 'linked' );
				}

			</script>
