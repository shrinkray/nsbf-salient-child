<?php
	/**
	 * Byway template for return to state list, i.e. a back button.
	 * Uses $state value to assign a $current_state value as a url-word.
	 *
	 * @template   Button
	 * @date       Aug28,2024
	 * @author     Greg Miller, gregmiller.io
	 * @package    template
	 */

if ( ! defined( 'ABSPATH' ) ) :
	exit;
endif;

switch ( $state ) {
	case 'AL':
		$current_state = 'alabama';
		break;
	case 'AK':
		$current_state = 'alaska';
		break;
	case 'AZ':
		$current_state = 'arizona';
		break;
	case 'AK':
		$current_state = 'alaska';
		break;
	case 'CA':
		$current_state = 'california';
		break;
	case 'CO':
		$current_state = 'colorado';
		break;
	case 'CT':
		$current_state = 'connecticut';
		break;
	case 'DE':
		$current_state = 'delaware';
		break;
	case 'DC':
		$current_state = 'district-of-columbia';
		break;
	case 'FL':
		$current_state = 'florida';
		break;
	case 'GA':
		$current_state = 'georgia';
		break;
	case 'HI':
		$current_state = 'hawaii';
		break;
	case 'ID':
		$current_state = 'idaho';
		break;
	case 'IL':
		$current_state = 'illinois';
		break;
	case 'IN':
		$current_state = 'indiana';
		break;
	case 'IA':
		$current_state = 'iowa';
		break;
	case 'KS':
		$current_state = 'kansas';
		break;
	case 'KY':
		$current_state = 'kentucky';
		break;
	case 'LA':
		$current_state = 'louisiana';
		break;
	case 'ME':
		$current_state = 'maine';
		break;
	case 'MD':
		$current_state = 'maryland';
		break;
	case 'MA':
		$current_state = 'massachusetts';
		break;
	case 'MI':
		$current_state = 'michigan';
		break;
	case 'MN':
		$current_state = 'minnesota';
		break;
	case 'MS':
		$current_state = 'mississippi';
		break;
	case 'MO':
		$current_state = 'missouri';
		break;
	case 'MT':
		$current_state = 'montana';
		break;
	case 'NE':
		$current_state = 'nebraska';
		break;
	case 'NV':
		$current_state = 'nevada';
		break;
	case 'NH':
		$current_state = 'new-hampshire';
		break;
	case 'NJ':
		$current_state = 'new-jersey';
		break;
	case 'NM':
		$current_state = 'new-mexico';
		break;
	case 'NY':
		$current_state = 'new-york';
		break;
	case 'NC':
		$current_state = 'north-carolina';
		break;
	case 'ND':
		$current_state = 'north-dakota';
		break;
	case 'OH':
		$current_state = 'ohio';
		break;
	case 'OK':
		$current_state = 'oklahoma';
		break;
	case 'OR':
		$current_state = 'oregon';
		break;
	case 'PA':
		$current_state = 'pennsylvania';
		break;
	case 'RI':
		$current_state = 'rhode-island';
		break;
	case 'SC':
		$current_state = 'south-carolina';
		break;
	case 'SD':
		$current_state = 'south-dakota';
		break;
	case 'TN':
		$current_state = 'tennessee';
		break;
	case 'TX':
		$current_state = 'texas';
		break;
	case 'UT':
		$current_state = 'utah';
		break;
	case 'VT':
		$current_state = 'vermont';
		break;
	case 'VA':
		$current_state = 'virginia';
		break;
	case 'WA':
		$current_state = 'washington';
		break;
	case 'WV':
		$current_state = 'west-virginia';
		break;
	case 'WI':
		$current_state = 'wisconsin';
		break;
	case 'WY':
		$current_state = 'wyoming';
		break;

}
?>
<ul>
	<li><a href="<?php echo esc_html( site_url() . '/' . $current_state ); ?>" >Back</a></li>
</ul>

<?php
/**
 * To use.
 * Place as require_once in single-national_byway or in single-state_byway
 * require_once 'page-templates/partials/byway-back-button.php';.
 */
