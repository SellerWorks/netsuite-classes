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
 * SerializedInventoryItemLocationsList
 */
class SerializedInventoryItemLocationsList {
	/**
	 * @access public
	 * @var SerializedInventoryItemLocations[]
	 */
	public $locations;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"locations" => "SerializedInventoryItemLocations[]",
		"replaceAll" => "boolean",
	);
}
