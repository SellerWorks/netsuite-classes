<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\Netsuite\Model;

/**
 * VendorPricingScheduleList
 */
class VendorPricingScheduleList {
	/**
	 * @access public
	 * @var VendorPricingSchedule[]
	 */
	public $pricingSchedule;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"pricingSchedule" => "VendorPricingSchedule[]",
		"replaceAll" => "boolean",
	);
}
