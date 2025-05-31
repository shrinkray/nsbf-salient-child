<?php
/**
 * Base local partners template part
 *
 * @package NSBF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<div class="row short">
    <div class="section">
        <div class="detail-subsection">
            <?php if ( have_rows( 'sb_local_partner_organization' ) ) : ?>
                <div class="label-minor-heading">Local Byway Partners</div>
                <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    <?php
                    while ( have_rows( 'sb_local_partner_organization' ) ) :
                        the_row();
                        
                        // Get partner details
                        $partner_organization = get_sub_field( 'sb_po_name' );
                        $partner_organization_phone = get_sub_field( 'sb_po_phone' );
                        $partner_organization_website = get_sub_field( 'sb_po_website' );
                        ?>
                        
                        <li class="item">
                            <div class="detail-organization">
                                <?php echo esc_html( $partner_organization ); ?>
                            </div>
                            
                            <?php if ( $partner_organization_website || $partner_organization_phone ) : ?>
                                <div class="detail-properties">
                                    <?php if ( $partner_organization_website ) : ?>
                                        <a class="byway-website-property"
                                           href="<?php echo esc_url( $partner_organization_website ); ?>"
                                           target="_blank"
                                           title="<?php esc_attr_e( 'Learn more at our website!', 'nsbf-theme' ); ?>">
                                            <?php esc_html_e( 'Website', 'nsbf-theme' ); ?>
                                        </a>
                                    <?php endif; ?>

                                    <?php if ( $partner_organization_phone ) : ?>
                                        <a class="byway-phone-property"
                                           href="tel:<?php echo esc_url( $partner_organization_phone ); ?>"
                                           title="<?php esc_attr_e( 'Need help? Call our offices.', 'nsbf-theme' ); ?>">
                                            <?php echo esc_html( $partner_organization_phone ); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <div class="text-sm truncate text-mangotango">
                    <?php esc_html_e( 'No local partners available', 'nsbf-theme' ); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div> 