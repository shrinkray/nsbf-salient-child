<?php
/**
 * Base state map template part
 *
 * @package NSBF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Get map data
$overlook_map = get_field( 'state_byway_map' );
$nsbf_id = '?ref=nsbf';
$official_byway_name = get_field( 'sb_official_byway_name' );
?>

<?php if ( $overlook_map ) : ?>
    <section class="pb-0 mb-20 row">
        <div style="width: 100%; height: 500px; position: relative;">
            <iframe 
                src="<?php echo esc_url( $overlook_map ); ?>"
                title="<?php echo esc_attr( $official_byway_name ) . ' Map'; ?>"
                aria-label="<?php esc_attr_e( 'Interactive map showing byway route and location.', 'nsbf-theme' ); ?>"
                width="100%"
                height="100%"
                frameborder="0"
                allowfullscreen
                tabindex="0"
                loading="eager"
                style="border: none; position: absolute; top: 0; left: 0;">
                <?php esc_html_e( 'Your browser does not support iframes', 'nsbf-theme' ); ?>
            </iframe>
        </div>
        
        <div class="mt-4 text-right">
            <a href="<?php echo esc_url( $overlook_map . '/about/' . $nsbf_id ); ?>" 
               target="_blank"
               rel="noopener noreferrer">
                <?php esc_html_e( 'Embed this map on your site.', 'nsbf-theme' ); ?>
            </a>
        </div>
    </section>
<?php else : ?>
    <section class="pb-0 mb-10 row">
        <div class="text-sm truncate text-mangotango">
            <?php esc_html_e( 'No map available for this byway', 'nsbf-theme' ); ?>
        </div>
    </section>
<?php endif; ?> 