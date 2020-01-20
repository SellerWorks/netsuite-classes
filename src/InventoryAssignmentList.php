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
 * InventoryAssignmentList
 */
class InventoryAssignmentList {
	/**
	 * @access public
	 * @var InventoryAssignment[]
	 */
	public $inventoryAssignment;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"inventoryAssignment" => "InventoryAssignment[]",
		"replaceAll" => "boolean",
	);
}
