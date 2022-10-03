<?php
/**
 * Template Name: State Byway Detail
 *
 * @package Salient WordPress Theme
 * @version 10.5
 * @filename single-state_byway.php
 * @description This represents the details of one state byway.
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
 

 <main class="container-wrap">
	<div class="container main-content">

<?php
    // Unused Template Detail Byway Variables
    $state = get_field( 'sb_state' );
   
    $official_byway_name = get_field('sb_official_byway_name');
   // $designating_agency = get_field('nb_designating_agency');
            ?>
        
		
        <div class="row mb-0 md:mb-4 lg:mb-14">
           
            <h1 class="text-3xl md:text-5xl entry-title mb-10"><?php the_title(); ?></h1>
            
        </div> <!-- .row // H1 & Anchor Nav -->
		
		
		<?php
		// this loads some duplicate content
        include_once('page-templates/partials/byway-detail-sb.php');
		// this loads but missing content
		include_once('page-templates/partials/byway-overview-sb.php');
          //  this loads, but missing content
		include_once('page-templates/partials/byway-local-partners-sb.php');
  
		?>
        <div class="update-data">
            <p><a href="<?php echo site_url( '/update/', 'https' ); ?>" class="bell" title="Help our foundation maintain accurate information about
<?php echo $official_byway_name; ?>."><i class="fa fa-bell"></i>&nbsp;Update</a> this byway information
                today!</p>
        </div>
    </div><!--/container main-content-->

 </main> <!-- .container-wrap -->


<?php

get_footer();
