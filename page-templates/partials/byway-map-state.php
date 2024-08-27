<?php
	/**
	 * Byway detail template (national byways) required from single-national_byway.
	 *
	 * @template   Overlook Map Section
	 * @date       Aug27,2024
	 * @author     Greg Miller, gregmiller.io
	 * @package    template
	 */

if ( ! defined( 'ABSPATH' ) ) :
	exit;
endif;

// vars.
$overlook_map = get_field( 'state_byway_map' );

if ( $overlook_map ) :
	?>
	<section class="pb-0 mb-12 row">
		
		<div style="width: 100%; height: 500px; position: relative;">
			<iframe src="<?php echo esc_url( $overlook_map ); ?>"
			title="<?php echo esc_html( $official_byway_name ) . ' Map'; ?>"
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

	</section> <!-- .row // Overlook map -->
	<?php
	else :
		?>
<!-- No state map is available -->
		<?php
endif;