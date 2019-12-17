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
 * ItemSupplyPlanOrderList
 */
class ItemSupplyPlanOrderList {
	/**
	 * @access public
	 * @var ItemSupplyPlanOrder[]
	 */
	public $itemSupplyPlanOrder;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"itemSupplyPlanOrder" => "ItemSupplyPlanOrder[]",
		"replaceAll" => "boolean",
	);
}
