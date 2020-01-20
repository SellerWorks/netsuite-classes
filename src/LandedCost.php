<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * LandedCost
 */
class LandedCost extends Record {
	/**
	 * @access public
	 * @var LandedCostDataList
	 */
	public $landedCostDataList;

	static $paramtypesmap = array(
		"landedCostDataList" => "LandedCostDataList",
	);
}
