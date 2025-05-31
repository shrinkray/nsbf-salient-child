<?php
/**
 * Base byway overview template part
 *
 * @package NSBF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Get overview content
$byway_synopsis = get_field( 'sb_byway_synopsis' );
?>

<div class="mt-3 mb-6 row">
    <div class="section">
        <div class="boxed-subsection filter drop-shadow-md md:drop-shadow-xl">
            <div id="overview" class="anchored"></div>
            
            <?php if ( ! empty( $byway_synopsis ) ) : ?>
                <h2 class="text-3xl md:text-4xl h2 overview">Overview</h2>
                <?php echo wp_kses_post( $byway_synopsis ); ?>
            <?php else : ?>
                <div class="text-sm truncate text-mangotango">
                    <?php esc_html_e( 'Missing Overview ...', 'nsbf-theme' ); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div> 