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
 * InventoryTransferInventoryList
 */
class InventoryTransferInventoryList {
	/**
	 * @access public
	 * @var InventoryTransferInventory[]
	 */
	public $inventory;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"inventory" => "InventoryTransferInventory[]",
		"replaceAll" => "boolean",
	);
}
