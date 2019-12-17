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
 * InboundShipmentItems
 */
class InboundShipmentItems {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $purchaseOrder;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shipmentItem;
	/**
	 * @access public
	 * @var string
	 */
	public $shipmentItemDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $poVendor;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $receivingLocation;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityReceived;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityExpected;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityRemaining;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $unit;
	/**
	 * @access public
	 * @var float
	 */
	public $poRate;
	/**
	 * @access public
	 * @var float
	 */
	public $expectedRate;
	/**
	 * @access public
	 * @var float
	 */
	public $shipmentItemExchangeRate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $shipmentItemEffectiveDate;
	/**
	 * @access public
	 * @var float
	 */
	public $unitLandedCost;
	/**
	 * @access public
	 * @var float
	 */
	public $totalUnitCost;
	/**
	 * @access public
	 * @var float
	 */
	public $shipmentItemAmount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $poCurrency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $incoterm;

	static $paramtypesmap = array(
		"id" => "integer",
		"purchaseOrder" => "RecordRef",
		"shipmentItem" => "RecordRef",
		"shipmentItemDescription" => "string",
		"poVendor" => "string",
		"receivingLocation" => "RecordRef",
		"quantityReceived" => "float",
		"quantityExpected" => "float",
		"quantityRemaining" => "float",
		"unit" => "RecordRef",
		"poRate" => "float",
		"expectedRate" => "float",
		"shipmentItemExchangeRate" => "float",
		"shipmentItemEffectiveDate" => "dateTime",
		"unitLandedCost" => "float",
		"totalUnitCost" => "float",
		"shipmentItemAmount" => "float",
		"poCurrency" => "RecordRef",
		"incoterm" => "RecordRef",
	);
}
