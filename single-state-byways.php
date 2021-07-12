<?php

/**
 * Template Name: Single State Byway Template
 */

get_header(); 

$title = get_the_title();
$state = get_field('nb_state');
$the_link = get_permalink();

?>

<h1 style="margin: .5em 0em;"><center>Scenic Byways of <?php echo $title;?></center></h1>

<?php

/*
// args

if ( is_page( 'Kentucky' ) ) {

$args = array(
	'numberposts' => -1,
	'post_type' => 'national_byway',
	'post_status' => 'publish',
	'orderby' => 'title', 
    'order' => 'ASC',
    'meta_key' => 'nb_state',
	'meta_value' => 'KY',
	'tax_query' => array( 
        array(
            'taxonomy' => 'category',
            'field'    => 'category',
            'terms'    => array('nsb', 'aar'),
        ))
    );

} elseif ( is_page( 'Ohio' ) ) {

$args = array(
	'numberposts' => -1,
	'post_type' => 'national_byway',
	'post_status' => 'publish',
	'orderby' => 'title', 
    'order' => 'ASC',
    'meta_key' => 'nb_state',
	'meta_value' => 'OH',
	'tax_query' => array( 
        array(
            'taxonomy' => 'category',
            'field'    => 'category',
            'terms'    => array('nsb', 'aar'),
        ))
    );

} elseif ( is_page( 'Alaska, Alabama, Arkansas' ) ) {

$args = array(
	'numberposts' => -1,
	'post_type' => 'national_byway',
	'post_status' => 'publish',
	'orderby' => 'title', 
    'order' => 'ASC',
    'meta_key' => 'nb_state',
	'meta_value' => 'AK, AL, AR',
	'tax_query' => array( 
        array(
            'taxonomy' => 'category',
            'field'    => 'category',
            'terms'    => array('nsb', 'aar'),
        ))
    );

}
*/
?>

<h2 style="margin-left:2em;">America's Byways Collection</h2>

<?php
// America's Byways Collection Query
/*$nb_query = new WP_Query( $args );

// The Loop
if ( have_posts() ) : while ( $nb_query->have_posts() ) : $nb_query->the_post();

		echo '<h4><a href="' . get_permalink($the_query->ID) . '">' . get_the_title($the_query->ID) . '</a></h4>';

    endwhile; endif;

wp_reset_postdata();
*/
?>

<h4 style="margin-left:4em;">Switch Case PHP Template Goes Here!</h4>';

<h2 style="margin-left:2em;">State Byways</h2>

<?php
/*
// State Byways Query
$sb_query = new WP_Query( $args );

// The Loop
if ( have_posts() ) : while ( $sb_query->have_posts() ) : $sb_query->the_post();

		echo '<h4><a href="' . get_permalink($the_query->ID) . '">' . get_the_title($the_query->ID) . '</a></h4>';

    endwhile; endif;

wp_reset_postdata();
*/

?>

<h4 style="margin-left:4em;">Switch Case PHP Template Goes Here!</h4>';

<?php get_footer(); ?>