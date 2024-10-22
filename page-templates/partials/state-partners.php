<?php
/**
 * State partner template.
 *
 * @package template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// vars
$partner_orgs = array_filter([
	[
		'name' => get_field( 'sp_state_department_of_transportation_name' ),
		'website' => get_field( 'sp_state_department_of_transportation_website' ),
			'phone' => get_field( 'sp_state_department_of_transportation_phone' ),
	],
	[
		'name' => get_field( 'sp_state_tourism_board_name' ),
		'website' => get_field( 'sp_state_tourism_board_website' ),
		'phone' => get_field( 'sp_state_tourism_board_phone' ),
	],
	// Add more partners here if needed
], function($partner) { return !empty($partner['name']); });

$partner_count = count($partner_orgs);

// Determine grid columns based on partner count
$grid_cols = $partner_count === 3 ? 'md:grid-cols-3' : 'md:grid-cols-2';
?>

<section class="flex justify-center w-full px-2 py-6 border-goldenrod">
    <div class="grid grid-cols-1 <?php echo $grid_cols; ?> gap-4 w-full max-w-6xl">
        <?php foreach ($partner_orgs as $index => $partner) : ?>
            <div class="p-2 text-center partner-digits <?php echo $partner_count === 1 ? 'md:col-span-2' : ''; ?>">
                <div class="text-xl font-bold text-center detail-organization">
                    <?php echo esc_html( $partner['name'] ); ?>
                </div>
                
                <div class="detail-properties">
                    <?php if ( $partner['website'] ) : ?>
                        <a class="byway-website-property" href="<?php echo esc_url( $partner['website'] ); ?>" target="_blank"
                            title="Learn more about us at the <?php echo esc_attr( $partner['name'] ); ?> website!">Website</a>
                    <?php endif; ?>
                    
                    <?php if ( $partner['phone'] ) : ?>
                        <a class="byway-phone-property" href="tel:<?php echo esc_attr( $partner['phone'] ); ?>"
                            title="Need help? Call our offices."><?php echo esc_html( $partner['phone'] ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
