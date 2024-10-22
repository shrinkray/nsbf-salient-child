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
$state_dot_name             = get_field( 'sp_state_department_of_transportation_name' );
$state_dot_website          = get_field( 'sp_state_department_of_transportation_website' );
$state_dot_phone            = get_field( 'sp_state_department_of_transportation_phone' );
$state_tourism_board_name   = get_field( 'sp_state_tourism_board_name' );
$state_tourism_board_website = get_field( 'sp_state_tourism_board_website' );
$state_tourism_board_phone  = get_field( 'sp_state_tourism_board_phone' );

$partner_count = ($state_dot_name ? 1 : 0) + ($state_tourism_board_name ? 1 : 0);
?>

<section class="flex justify-center w-full px-2 py-6 border-goldenrod">
    <div class="grid w-full max-w-6xl grid-cols-1 gap-4 md:grid-cols-2">
        <?php if ( $state_dot_name ) : ?>
            <div class="p-2 text-center partner-digits <?php echo $partner_count === 1 ? 'md:col-span-2' : ''; ?>">
                <div class="text-xl font-bold text-center detail-organization">
                    <?php echo esc_html( $state_dot_name ); ?>
                </div>
                
                <div class="detail-properties">
                    <?php if ( $state_dot_website ) : ?>
                        <a class="byway-website-property" href="<?php echo esc_url( $state_dot_website ); ?>" target="_blank"
                            title="Learn more about us at the <?php echo esc_attr( $state_dot_name ); ?> website!">Website</a>
                    <?php endif; ?>
                    
                    <?php if ( $state_dot_phone ) : ?>
                        <a class="byway-phone-property" href="tel:<?php echo esc_attr( $state_dot_phone ); ?>"
                            title="Need help? Call our offices."><?php echo esc_html( $state_dot_phone ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( $state_tourism_board_name ) : ?>
            <div class="p-2 text-center partner-digits <?php echo $partner_count === 1 ? 'md:col-span-2' : ''; ?>">
                <div class="text-xl font-bold text-center detail-organization">
                    <?php echo esc_html( $state_tourism_board_name ); ?>
                </div>
                
                <div class="detail-properties">
                    <?php if ( $state_tourism_board_website ) : ?>
                        <a class="byway-website-property" href="<?php echo esc_url( $state_tourism_board_website ); ?>" target="_blank"
                            title="Learn more about us at the <?php echo esc_attr( $state_tourism_board_name ); ?> website!">Website</a>
                    <?php endif; ?>
                    
                    <?php if ( $state_tourism_board_phone ) : ?>
                        <a class="byway-phone-property" href="tel:<?php echo esc_attr( $state_tourism_board_phone ); ?>"
                            title="Need help? Call our offices."><?php echo esc_html( $state_tourism_board_phone ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
