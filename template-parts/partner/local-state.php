<?php
	/**
	 * State byway local partners.
	 * based on template-parts/partner/local.php.
	 *
	 * @template
	 * @date Jul142021
	 * @author Greg Miller, gregmiller.io
	 * @package template
	 */

	// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
	
	<div class="row short"> <!-- Local Byway Partners -->
		
		<div class="section">
			<div class="detail-subsection"> <!-- Byway Partners -->
				
				<?php

					// Check this Array to see if rows exists.
				if ( have_rows( 'sb_local_partner_organization' ) ) :

					?>
					<div class="label-minor-heading">Local Byway Partners</div>
						<ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
							
						<?php
							// Loop through rows.
						while ( have_rows( 'sb_local_partner_organization' ) ) :
							the_row();
							// set vars.
							$local_partner_organization   =
							get_field( 'sb_local_partner_organization' );
							$partner_organization         = get_sub_field( 'sb_po_name' );
							$partner_organization_phone   = get_sub_field( 'sb_po_phone' );
							$partner_organization_website = get_sub_field( 'sb_po_website' );
							?>
									
							<li class="item">
								<div class="detail-organization">
									<?php echo esc_html( $partner_organization ); ?></div>
								
								<?php
								// If either of these exist, create the detail otherwise, skip.
								if ( $partner_organization_website ||
								$partner_organization_phone ) :
									?>
								<div class="detail-properties">
									<?php
									if ( $partner_organization_website ) :
										?>
									<a class="byway-website-property"
												href="
												<?php
												echo esc_url( $partner_organization_website );
												?>
												" target="_blank" title="Learn more at our
												website!">Website</a>
										<?php
										endif; // opts out if no PO website URL.

									if ( $partner_organization_phone ) :
										?>
									<a class="byway-phone-property"
												href="tel:
												<?php
												echo esc_url( $partner_organization_phone );
												?>
												"
												title="Need help? Call our offices.">
												<?php
												echo esc_attr( $partner_organization_phone );
												?>
												</a>
										<?php endif; // opts out if no PO phone. ?>
								
								</div> <!-- .detail-properties -->
									<?php
								endif;
								?>
							</li>
								
								<?php
								endwhile; // end of sb_local_partner_organization.
						?>
						
						</ul>
					</div>
					<?php else : ?>
					<div class="text-sm text-mangotango truncate ...">
						<?php // No local contacts loaded. ?>
					</div>
						<?php
					endif;
					?>
		</div> <!-- .section   // Byway Partners -->
	</div> <!-- .row -->
