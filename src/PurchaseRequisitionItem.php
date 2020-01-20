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
 * PurchaseRequisitionItem
 */
class PurchaseRequisitionItem {
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
	public $vendorName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $poVendor;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $units;
	/**
	 * @access public
	 * @var string
	 */
	public $serialNumbers;
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
	 * @var float
	 */
	public $estimatedRate;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedAmount;
	/**
	 * @access public
	 * @var string
	 */
	public $rate;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxCode;
	/**
	 * @access public
	 * @var float
	 */
	public $taxRate1;
	/**
	 * @access public
	 * @var float
	 */
	public $taxRate2;
	/**
	 * @access public
	 * @var float
	 */
	public $grossAmt;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $options;
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
	public $customer;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isBillable;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $linkedOrderList;
	/**
	 * @access public
	 * @var string
	 */
	public $linkedOrderStatus;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expectedReceiptDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isClosed;
	/**
	 * @access public
	 * @var boolean
	 */
	public $expandItemGroup;

	static $paramtypesmap = array(
		"line" => "integer",
		"item" => "RecordRef",
		"vendorName" => "string",
		"poVendor" => "RecordRef",
		"quantity" => "float",
		"units" => "RecordRef",
		"serialNumbers" => "string",
		"inventoryDetail" => "InventoryDetail",
		"description" => "string",
		"estimatedRate" => "float",
		"estimatedAmount" => "float",
		"rate" => "string",
		"amount" => "float",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"grossAmt" => "float",
		"options" => "CustomFieldList",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"customer" => "RecordRef",
		"isBillable" => "boolean",
		"linkedOrderList" => "RecordRefList",
		"linkedOrderStatus" => "string",
		"expectedReceiptDate" => "dateTime",
		"isClosed" => "boolean",
		"expandItemGroup" => "boolean",
	);
}
