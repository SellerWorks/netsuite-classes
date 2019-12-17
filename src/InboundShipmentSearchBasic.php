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
 * InboundShipmentSearchBasic
 */
class InboundShipmentSearchBasic extends SearchRecordBasic
{
    /**
     * @access public
     * @var SearchDateField
     */
    public $actualDeliveryDate;
    /**
     * @access public
     * @var SearchDateField
     */
    public $actualShippingDate;
    /**
     * @access public
     * @var SearchStringField
     */
    public $billOfLading;
    /**
     * @access public
     * @var SearchDateField
     */
    public $createdDate;
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $currency;
    /**
     * @access public
     * @var SearchStringField
     */
    public $description;
    /**
     * @access public
     * @var SearchDateField
     */
    public $expectedDeliveryDate;
    /**
     * @access public
     * @var SearchDoubleField
     */
    public $expectedRate;
    /**
     * @access public
     * @var SearchDateField
     */
    public $expectedShippingDate;
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $externalDocumentNumber;
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @access public
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $incoterm;
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @access public
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @access public
     * @var SearchDateField
     */
    public $itemEffectiveDate;
    /**
     * @access public
     * @var SearchDoubleField
     */
    public $itemExchangeRate;
    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    public $landedCostAllocationMethod;
    /**
     * @access public
     * @var SearchDoubleField
     */
    public $landedCostAmount;
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $landedCostCostCategory;
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $landedCostCurrency;
    /**
     * @access public
     * @var SearchDateField
     */
    public $landedCostEffectiveDate;
    /**
     * @access public
     * @var SearchDoubleField
     */
    public $landedCostExchangeRate;
    /**
     * @access public
     * @var SearchStringField
     */
    public $memo;
    /**
     * @access public
     * @var SearchDoubleField
     */
    public $poAmount;
    /**
     * @access public
     * @var SearchDoubleField
     */
    public $poRate;
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $purchaseOrder;
    /**
     * @access public
     * @var SearchDoubleField
     */
    public $quantityBilled;
    /**
     * @access public
     * @var SearchDoubleField
     */
    public $quantityExpected;
    /**
     * @access public
     * @var SearchDoubleField
     */
    public $quantityReceived;
    /**
     * @access public
     * @var SearchDoubleField
     */
    public $quantityRemaining;
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $receivingLocation;
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $shipmentBaseCurrency;
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $shipmentNumber;
    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @access public
     * @var SearchDoubleField
     */
    public $totalUnitCost;
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $unit;
    /**
     * @access public
     * @var SearchDoubleField
     */
    public $unitLandedCost;
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $vendor;
    /**
     * @access public
     * @var SearchStringField
     */
    public $vesselNumber;
    /**
     * @access public
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        "actualDeliveryDate" => "SearchDateField",
        "actualShippingDate" => "SearchDateField",
        "billOfLading" => "SearchStringField",
        "createdDate" => "SearchDateField",
        "currency" => "SearchMultiSelectField",
        "description" => "SearchStringField",
        "expectedDeliveryDate" => "SearchDateField",
        "expectedRate" => "SearchDoubleField",
        "expectedShippingDate" => "SearchDateField",
        "externalDocumentNumber" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "incoterm" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "itemEffectiveDate" => "SearchDateField",
        "itemExchangeRate" => "SearchDoubleField",
        "landedCostAllocationMethod" => "SearchEnumMultiSelectField",
        "landedCostAmount" => "SearchDoubleField",
        "landedCostCostCategory" => "SearchMultiSelectField",
        "landedCostCurrency" => "SearchMultiSelectField",
        "landedCostEffectiveDate" => "SearchDateField",
        "landedCostExchangeRate" => "SearchDoubleField",
        "memo" => "SearchStringField",
        "poAmount" => "SearchDoubleField",
        "poRate" => "SearchDoubleField",
        "purchaseOrder" => "SearchMultiSelectField",
        "quantityBilled" => "SearchDoubleField",
        "quantityExpected" => "SearchDoubleField",
        "quantityReceived" => "SearchDoubleField",
        "quantityRemaining" => "SearchDoubleField",
        "receivingLocation" => "SearchMultiSelectField",
        "shipmentBaseCurrency" => "SearchMultiSelectField",
        "shipmentNumber" => "SearchMultiSelectField",
        "status" => "SearchEnumMultiSelectField",
        "totalUnitCost" => "SearchDoubleField",
        "unit" => "SearchMultiSelectField",
        "unitLandedCost" => "SearchDoubleField",
        "vendor" => "SearchMultiSelectField",
        "vesselNumber" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
