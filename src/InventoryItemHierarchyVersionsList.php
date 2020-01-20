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
 * InventoryItemHierarchyVersionsList
 */
class InventoryItemHierarchyVersionsList {
	/**
	 * @access public
	 * @var InventoryItemHierarchyVersions[]
	 */
	public $inventoryItemHierarchyVersions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"inventoryItemHierarchyVersions" => "InventoryItemHierarchyVersions[]",
		"replaceAll" => "boolean",
	);
}
