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
 * SerializedInventoryItemNumbersList
 */
class SerializedInventoryItemNumbersList {
	/**
	 * @access public
	 * @var SerializedInventoryItemNumbers[]
	 */
	public $numbers;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"numbers" => "SerializedInventoryItemNumbers[]",
		"replaceAll" => "boolean",
	);
}
