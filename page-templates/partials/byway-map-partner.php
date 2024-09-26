<?php
	/**
	 * Byway detail template (state partner maps) required from single-state.
	 *
	 * @template   Overlook Map Section
	 * @date       Sept262024
	 * @author     Greg Miller, gregmiller.io
	 * @package    template
	 */

if ( ! defined( 'ABSPATH' ) ) :
	exit;
endif;

// vars.
$overlook_partner_map = get_field( 'overlook_state_partner_map' );

if ( $overlook_partner_map ) :
	?>
	<section class="pb-0 mb-12 row">
		
		<div style="width: 100%; height: 500px; position: relative;">
			<iframe src="<?php echo esc_url( $overlook_partner_map ); ?>"
			title="<?php echo 'Byways of the great state of ' . esc_attr( $the_title ); ?>"
			aria-label="Interactive map showing byway route and location."
			width="100%"
			height="100%"
			frameborder="0"
			allowfullscreen
			tabindex="0"
			loading="eager"
			style="border: none; position: absolute; top: 0; left: 0;">
			<!-- Fallback content -->
				
				Your browser does not support iframes
				
			</iframe>
		</div>

	</section> 
	<?php
	else :
		?>
	<section class="pb-0 mb-10 row">
		<!-- No national map is available -->
	</section>
		<?php
endif;
