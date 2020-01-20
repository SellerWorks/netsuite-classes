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
 * PeriodDemandPlan
 */
class PeriodDemandPlan {
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var DayOfTheWeek
	 */
	public $dayOfTheWeek;

	static $paramtypesmap = array(
		"quantity" => "float",
		"dayOfTheWeek" => "DayOfTheWeek",
	);
}
