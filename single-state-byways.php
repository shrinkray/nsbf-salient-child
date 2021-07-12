<?php

/**
 * Template Name: Single State Byway Template
 * @date Jul-12-2021
 *
 */

get_header(); 

$title = get_the_title();
$state = get_field('nb_state');
$the_link = get_permalink();

?>

<h1 style="margin: .5em 0; text-align: center;">Scenic Byways of <?php echo $title;?></h1>

<?php
	
	/**
	 * Switch structure enables setting variable then in the args below we call it.
	 */

switch ( $title ) {
    case "Alabama" :
        $nb_meta_value = "AL";
        break;
    case "Alaska" :
        $nb_meta_value = "AK";
        break;
    case "Arizona" :
        $nb_meta_value = "AZ";
        break;
    case "Arkansas" :
        $nb_meta_value = "AR";
        break;
    case "California" :
        $nb_meta_value = "CA";
        break;
    case "Colorado" :
        $nb_meta_value = "CO";
        break;
    case "Connecticut" :
        $nb_meta_value = "CT";
        break;
    case "Delaware" :
        $nb_meta_value = "DE";
        break;
    case "Florida" :
        $nb_meta_value = "FL";
        break;
    case "Georgia" :
        $nb_meta_value = "GA";
        break;
    case "Hawaii" :
        $nb_meta_value = "HI";
        break;
    case "Idaho" :
        $nb_meta_value = "ID";
        break;
    case "Illinois" :
        $nb_meta_value = "IL";
        break;
    case "Indiana" :
        $nb_meta_value = "IN";
        break;
    case "Iowa" :
        $nb_meta_value = "IA";
        break;
    case "Kansas" :
        $nb_meta_value = "KS";
        break;
    case "Kentucky" :
        $nb_meta_value = "KY";
        break;
    case "Louisana" :
        $nb_meta_value = "LA";
        break;
    case "Maine" :
        $nb_meta_value = "ME";
        break;
    case "Maryland" :
        $nb_meta_value = "MD";
        break;
    case "Massachusetts" :
        $nb_meta_value = "MA";
        break;
    case "Michigan" :
        $nb_meta_value = "MI";
        break;
    case "Minnesota" :
        $nb_meta_value = "MN";
        break;
    case "Mississippi" :
        $nb_meta_value = "MS";
        break;
    case "Missouri" :
        $nb_meta_value = "MO";
        break;
    case "Montana" :
        $nb_meta_value = "MT";
        break;
   case "Nebraska" :
       $nb_meta_value = "NB";
       break;
   case "Nevada" :
       $nb_meta_value = "NV";
       break;
   case "New Hampshire" :
       $nb_meta_value = "NH";
       break;
   case "New Jersey" :
       $nb_meta_value = "NJ";
       break;
   case "New Mexico" :
       $nb_meta_value = "NM";
       break;
   case "New York" :
       $nb_meta_value = "NY";
       break;
   case "North Carolina" :
       $nb_meta_value = "NC";
       break;
   case "Ohio" :
       $nb_meta_value = "OH";
       break;
   case "Oklahoma" :
       $nb_meta_value = "OK";
       break;
   case "Oregon" :
       $nb_meta_value = "OR";
       break;
   case "Pennsylvania" :
       $nb_meta_value = "PA";
       break;
   case "Rhode Island" :
       $nb_meta_value = "RI";
       break;
   case "South Carolina" :
       $nb_meta_value = "SC";
       break;
   case "South Dakota" :
       $nb_meta_value = "SD";
       break;
   case "Tennessee" :
       $nb_meta_value = "TN";
       break;
   case "Texas" :
       $nb_meta_value = "TX";
       break;
   case "Utah" :
       $nb_meta_value = "UT";
       break;
   case "Vermont" :
       $nb_meta_value = "VT";
       break;
   case "Virginia" :
       $nb_meta_value = "VA";
       break;
   case "Washington" :
       $nb_meta_value = "WA";
       break;
   case "West Virginia" :
       $nb_meta_value = "WV";
       break;
   case "Wisconsin" :
       $nb_meta_value = "WI";
       break;
   case "Wyoming" :
       $nb_meta_value = "WY";
       break;
       
}
	$args = array(
		'numberposts'       => -1,
		'post_type'         => 'national_byway',
        'post_status'       => 'publish',
		'orderby'           => 'title',
		'order'             => 'ASC',
		'meta_key'          => 'nb_state',
		'meta_value'        => $nb_meta_value,
		'tax_query'         => array(
			array(
				'taxonomy' => 'category',
				'field'    => 'category',
				'terms'    => array('nsb', 'aar'),
			))
	);

?>

<h2 style="margin-left:2em;">America's Byways Collection</h2>

<?php
// America's Byways Collection Query
$nb_query = new WP_Query( $args );

// The Loop
if ( have_posts() ) : while ( $nb_query->have_posts() ) : $nb_query->the_post();

		echo '<h4><a href="' . get_permalink($the_query->ID) . '">' . get_the_title($the_query->ID) . '</a></h4>';

    endwhile; endif;

wp_reset_postdata();

?>


<h2 style="margin-left:2em;">State Byways</h2>

<?php

// State Byways Query
$sb_query = new WP_Query( $args );

// The Loop
if ( have_posts() ) : while ( $sb_query->have_posts() ) : $sb_query->the_post();

		echo '<h4><a href="' . get_permalink($the_query->ID) . '">' . get_the_title($the_query->ID) . '</a></h4>';

    endwhile; endif;

wp_reset_postdata();


?>


<?php get_footer(); ?>