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
 * InboundShipmentSearchRowBasic
 */
class InboundShipmentSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $actualDeliveryDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $actualShippingDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billOfLading;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $expectedDeliveryDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $expectedRate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $expectedShippingDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalDocumentNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $incoterm;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $itemEffectiveDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $itemExchangeRate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $landedCostAllocationMethod;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $landedCostAmount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $landedCostCostCategory;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $landedCostCurrency;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $landedCostEffectiveDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $landedCostExchangeRate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $poAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $poRate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $purchaseOrder;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityBilled;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityExpected;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityReceived;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityRemaining;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $receivingLocation;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $shipmentBaseCurrency;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipmentNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $totalUnitCost;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $unit;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unitLandedCost;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $vendor;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $vesselNumber;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"actualDeliveryDate" => "SearchColumnDateField[]",
		"actualShippingDate" => "SearchColumnDateField[]",
		"billOfLading" => "SearchColumnStringField[]",
		"createdDate" => "SearchColumnDateField[]",
		"currency" => "SearchColumnSelectField[]",
		"description" => "SearchColumnStringField[]",
		"expectedDeliveryDate" => "SearchColumnDateField[]",
		"expectedRate" => "SearchColumnDoubleField[]",
		"expectedShippingDate" => "SearchColumnDateField[]",
		"externalDocumentNumber" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"incoterm" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"itemEffectiveDate" => "SearchColumnDateField[]",
		"itemExchangeRate" => "SearchColumnDoubleField[]",
		"landedCostAllocationMethod" => "SearchColumnEnumSelectField[]",
		"landedCostAmount" => "SearchColumnDoubleField[]",
		"landedCostCostCategory" => "SearchColumnSelectField[]",
		"landedCostCurrency" => "SearchColumnSelectField[]",
		"landedCostEffectiveDate" => "SearchColumnDateField[]",
		"landedCostExchangeRate" => "SearchColumnDoubleField[]",
		"memo" => "SearchColumnStringField[]",
		"poAmount" => "SearchColumnDoubleField[]",
		"poRate" => "SearchColumnDoubleField[]",
		"purchaseOrder" => "SearchColumnSelectField[]",
		"quantityBilled" => "SearchColumnDoubleField[]",
		"quantityExpected" => "SearchColumnDoubleField[]",
		"quantityReceived" => "SearchColumnDoubleField[]",
		"quantityRemaining" => "SearchColumnDoubleField[]",
		"receivingLocation" => "SearchColumnSelectField[]",
		"shipmentBaseCurrency" => "SearchColumnSelectField[]",
		"shipmentNumber" => "SearchColumnStringField[]",
		"status" => "SearchColumnStringField[]",
		"totalUnitCost" => "SearchColumnDoubleField[]",
		"unit" => "SearchColumnSelectField[]",
		"unitLandedCost" => "SearchColumnDoubleField[]",
		"vendor" => "SearchColumnSelectField[]",
		"vesselNumber" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}
