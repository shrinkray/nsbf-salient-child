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
$nsbf_id         = '?ref=nsbf';
$map_title = 'The great byway of ' . $the_title . ' map from Overlook';



if ( $overlook_map ) :
	?>
	<section class="pb-0 mb-20 row">
		<!-- My state map -->
		<div class="w-full" style="width: 100%; height: 500px; position: relative;">
			<iframe src="<?php echo esc_url( $overlook_map ); ?>"
			title="<?php echo $map_title; ?>"
			aria-label="Interactive map showing byway route and location."
			width="100%"
			height="100%"
			frameborder="0"
			allowfullscreen
			tabindex="0"
			loading=""
			style="border: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
			<!-- Fallback content -->
				
				Your browser does not support iframes
				
			</iframe>
		</div>
		<div class="mt-4 text-right">
			<a class="" href="<?php echo esc_url( $overlook_map ) .
			'/about/' .
			esc_url( $nsbf_id ); ?>" target='_blank' >
			Embed this map on your site.
			</a>
		</div>

	</section> <!-- .row // Overlook map --> 
	<?php
	else :
		?>
	<section class="pb-0 mb-10 row">
		<!-- No state map is available -->
	</section>
		<?php
endif;