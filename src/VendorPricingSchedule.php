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
 * VendorPricingSchedule
 */
class VendorPricingSchedule {
	/**
	 * @access public
	 * @var string
	 */
	public $scheduleName;
	/**
	 * @access public
	 * @var float
	 */
	public $scheduleDiscount;

	static $paramtypesmap = array(
		"scheduleName" => "string",
		"scheduleDiscount" => "float",
	);
}
