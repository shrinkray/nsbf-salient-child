<?php
/**
 * State-specific byway detail template part
 *
 * @package NSBF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Get state-specific fields
$designation = get_field( 'sb_current_state_designation' );
$designation_year = get_field( 'sb_designation_year' );
$length_of_byway_miles = get_field( 'sb_length_of_byway_miles' );
$sb_state = get_field( 'sb_state' );
$organization = get_field( 'sb_dedicated_byway_organization' );

// State-specific modifications can be added here
?>

<section class="grid grid-cols-1 mb-6 grid-auto-cols-max row md:grid-cols-2 lg:grid-cols-2">
    <div class="order-last section details md:order-none lg:order-none">
        <div id="details" class="anchored"></div>
        <h2 class="text-3xl md:text-4xl h2 wayfinder">State Byway Details</h2>
        
        <ul class="detail-list mt-7 mb-7">
            <li>
                <span class="label-minor-heading">State Designation</span>
                <?php echo esc_html( $designation ); ?>
                <?php echo $designation_year ? '(' . esc_html( $designation_year ) . ')' : ''; ?>
            </li>
            <li>
                <span class="label-minor-heading">Location</span>
                <?php echo esc_html( $sb_state ); ?>
            </li>
            <li>
                <span class="label-minor-heading">Length</span>
                <?php echo esc_html( $length_of_byway_miles ); ?>&nbsp;miles
            </li>
        </ul>

        <?php
        // Get organization details
        $dedicated_byway_organization = get_field( 'sb_dedicated_byway_organization' );
        $dedicated_byway_organization_website = get_field( 'sb_dedicated_byway_organization_website' );
        $dedicated_byway_organization_phone = get_field( 'sb_dedicated_byway_organization_phone' );

        if ( $dedicated_byway_organization ) :
        ?>
            <div class="detail-subsection">
                <div class="label-minor-heading">State Byway Visitor Information</div>
                <div class="detail-organization">
                    <?php echo esc_html( $dedicated_byway_organization ); ?>
                </div>
                <div class="detail-properties">
                    <?php if ( $dedicated_byway_organization_website ) : ?>
                        <a class="byway-website-property" 
                           href="<?php echo esc_url( $dedicated_byway_organization_website ); ?>"
                           target="_blank" 
                           title="Learn more at the <?php echo esc_attr( $dedicated_byway_organization ); ?> website!">
                            Website
                        </a>
                    <?php endif; ?>

                    <?php if ( $dedicated_byway_organization_phone ) : ?>
                        <a class="byway-phone-property" 
                           href="tel:<?php echo esc_url( $dedicated_byway_organization_phone ); ?>"
                           title="Need help? Call our offices.">
                            <?php echo esc_attr( $dedicated_byway_organization_phone ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="detail-subsection mt-7">
            <?php
            // Include state visitor info
            nsbf_get_template_part(
                'template-parts/byway/content/visitor',
                'page-templates/partials/state-byway-visitor.php'
            );
            ?>
        </div>
    </div>

    <div class="order-first mb-8 section image md:order-none lg:order-none">
        <?php
        $my_post_id = get_the_ID();
        $image_html = '';

        if ( $my_post_id ) :
            $image = get_the_post_thumbnail(
                $my_post_id,
                'byway_large',
                array(
                    'class'   => 'feature',
                    'loading' => 'lazy',
                )
            );

            if ( empty( $image ) ) :
                // Fallback: Try to get the first image from the post content
                $post_content = get_post_field( 'post_content', $my_post_id );
                $first_img = '';
                if ( preg_match( '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post_content, $matches ) ) :
                    $first_img = $matches[1];
                endif;

                if ( ! empty( $first_img ) ) :
                    $image_html = '<img src="' . esc_url( $first_img ) . '" alt="First image from post content" class="fallback-image">';
                else :
                    // If no image in content, display a placeholder
                    $image_html = '<img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/scenic-byway.jpg' ) . '" alt="Placeholder image" class="placeholder-image">';
                endif;
            else :
                $image_html = $image;
            endif;

            if ( ! empty( $image_html ) ) :
                echo '<div class="image-container">';
                echo wp_kses_post( $image_html );
                echo '</div>';
            endif;
        endif;

        // Find the State image in the array
        if ( ! empty( have_rows( 'sb_iconic_images' ) ) ) :
            $first_credit = true;

            while ( $first_credit && have_rows( 'sb_iconic_images' ) ) :
                the_row();

                $alt_text = get_sub_field( 'image_alt_text' );
                $show_alt_text = ( $alt_text ) ? esc_attr( $alt_text ) : 'Visit again for updated information';
                $attribution = get_sub_field( 'image_attribution' );
                $first_credit = false;

                if ( ! empty( $image_html ) ) :
                ?>
                    <div class="italic text-right attribution">
                        <span class="source">
                            <?php echo ! empty( $attribution ) ? esc_attr( $attribution ) : 'unattributed'; ?>
                        </span>
                        <span class="photo-credit"> Photo</span>
                    </div>
                <?php
                endif;
            endwhile;
        endif;
        ?>
    </div>
</section> 