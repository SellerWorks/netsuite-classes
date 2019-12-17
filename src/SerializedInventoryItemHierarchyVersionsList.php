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
 * SerializedInventoryItemHierarchyVersionsList
 */
class SerializedInventoryItemHierarchyVersionsList {
	/**
	 * @access public
	 * @var SerializedInventoryItemHierarchyVersions[]
	 */
	public $serializedInventoryItemHierarchyVersions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"serializedInventoryItemHierarchyVersions" => "SerializedInventoryItemHierarchyVersions[]",
		"replaceAll" => "boolean",
	);
}
