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
 * InventoryAdjustmentInventory
 */
class InventoryAdjustmentInventory {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var InventoryDetail
	 */
	public $inventoryDetail;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
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
	public $currentValue;
	/**
	 * @access public
	 * @var float
	 */
	public $adjustQtyBy;
	/**
	 * @access public
	 * @var string
	 */
	public $binNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $serialNumbers;
	/**
	 * @access public
	 * @var float
	 */
	public $newQuantity;
	/**
	 * @access public
	 * @var float
	 */
	public $unitCost;
	/**
	 * @access public
	 * @var float
	 */
	public $foreignCurrencyUnitCost;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var string
	 */
	public $currency;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expirationDate;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"line" => "integer",
		"inventoryDetail" => "InventoryDetail",
		"description" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"units" => "RecordRef",
		"quantityOnHand" => "float",
		"currentValue" => "float",
		"adjustQtyBy" => "float",
		"binNumbers" => "string",
		"serialNumbers" => "string",
		"newQuantity" => "float",
		"unitCost" => "float",
		"foreignCurrencyUnitCost" => "float",
		"memo" => "string",
		"currency" => "string",
		"expirationDate" => "dateTime",
		"exchangeRate" => "float",
	);
}
