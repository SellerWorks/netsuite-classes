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
 * InventoryTransferInventory
 */
class InventoryTransferInventory {
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $units;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var float
	 */
	public $adjustQtyBy;
	/**
	 * @access public
	 * @var string
	 */
	public $serialNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $fromBinNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $toBinNumbers;
	/**
	 * @access public
	 * @var InventoryDetail
	 */
	public $inventoryDetail;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"line" => "integer",
		"item" => "RecordRef",
		"description" => "string",
		"units" => "RecordRef",
		"quantityOnHand" => "float",
		"adjustQtyBy" => "float",
		"serialNumbers" => "string",
		"fromBinNumbers" => "string",
		"toBinNumbers" => "string",
		"inventoryDetail" => "InventoryDetail",
		"customFieldList" => "CustomFieldList",
	);
}
