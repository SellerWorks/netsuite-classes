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
 * InventoryItemLocationsList
 */
class InventoryItemLocationsList {
	/**
	 * @access public
	 * @var InventoryItemLocations[]
	 */
	public $locations;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"locations" => "InventoryItemLocations[]",
		"replaceAll" => "boolean",
	);
}
