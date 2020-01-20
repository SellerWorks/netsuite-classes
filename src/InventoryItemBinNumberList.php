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
 * InventoryItemBinNumberList
 */
class InventoryItemBinNumberList {
	/**
	 * @access public
	 * @var InventoryItemBinNumber[]
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"binNumber" => "InventoryItemBinNumber[]",
		"replaceAll" => "boolean",
	);
}
