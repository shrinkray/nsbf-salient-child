<?php
	
	/**
	 * Template Name: Single State Page
	 * @date Jul-12-2021
	 *
	 */
	
	get_header();
	
	$title = get_the_title();
	$state = get_field('nb_state');
	$the_link = get_permalink();
	
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
		case "District of Columbia" :
			$nb_meta_value = "DC";
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
		case "Louisiana" :
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
			$nb_meta_value = "NE";
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
        case "North Dakota" :
			$nb_meta_value = "ND";
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
	
	// National Byway Args
	$nb_args = array(
		'numberposts'       => -1,
		'post_type'         => 'national_byway',
		'post_status'       => 'publish',
		'orderby'           => 'title',
		'order'             => 'ASC',
		'meta_key'          => 'nb_state',
		'meta_value'        => $nb_meta_value,
		'tax_query'         => array(
			array(
				'taxonomy' => 'nb_designation',
				'terms'    => array('nsb', 'aar'),
			))
	);
	
	
	// State Byway Args
	$sb_args = array(
		'numberposts'       => -1,
		'post_type'         => 'state_byway',
		'post_status'       => 'publish',
		'orderby'           => 'title',
		'order'             => 'ASC',
		'meta_key'          => 'sb_state',
		'meta_value'        => $nb_meta_value,
		'tax_query'         => array(
			array(
				'taxonomy' => 'sb_designation',
				'terms'    => array('fsb', 'sb'),
			))
	);


// America's Byways Collection Query
	$nb_query = new WP_Query( $nb_args );
	
// Don't run this query until we need it
// State Byways Query
//	$sb_query = new WP_Query( $sb_args );
	
		?>
  
<div class="container-wrap">
    <div class="container main-content">

        <h1 class="text-5xl text-center mb-9 lg:mb-14">Scenic Byways of <?php echo $title;?></h1>
	    <?php
		
		    // Loop querying posts for National Byways ($nb_query) to capture partner data
		    if ( !empty( have_posts() ) ) :
			    while ( $nb_query->have_posts() ) :
				    $nb_query->the_post();
				
				    $permalink = get_permalink( $the_query->ID );
				    $query_id  = get_the_title( $the_query->ID );
				    
				// Prints website and phone number to the page
				    include_once('page-templates/partials/state-tourism.php');
				    
			    endwhile;
		
		    endif;
	    ?>
	
	
	    <?php
		    /**
		     * This is for the national byway list
		     */
		    include_once( 'page-templates/partials/national-byway-list.php' );
	

		    /**
		     * This is for the state byway list
		     */
		  //  include_once( 'page-templates/partials/state-byway-list.php' );
	
	    ?>
        
        
	<div class="state-information mt-10">
        <h4 class="text-xl mb-4">Information</h4>
        <p>National Scenic Byways and All-American Roads are designated by the Federal Department of Transportation and
            become part of the <em>America’s Byways</em>® collection. To become an official National Scenic Byways, qualifying
            roads must have one of the following six “intrinsic qualities”: <strong>1. Scenic, 2. Historic, 3. Archeological, 4. Recreational, 5. Cultural, or 6. Natural</strong>. To become an All-American Road, two or
            more of these unique intrinsic qualities must be present (along with a more comprehensive “corridor management plan”). State-level byways are most frequently designated by the State Department of Transportation (DOT), but can also be designated by federal agencies (at the state level) such as the US Forest Service, NPS, BLM, USACE, US Fish & Wildlife, as well as by tribal organizations.</p>
        <p><sup>*</sup>Byways in the <em>America’s Byways</em> collection with an asterisk are All-American Roads.</p>
    </div>
        <?php
            wp_reset_postdata();

?>
    </div>
</div>

<?php get_footer(); ?>