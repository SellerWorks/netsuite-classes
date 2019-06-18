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
 * InboundShipmentSearchBasic.
 */
class InboundShipmentSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchDateField
     */
    public $actualDeliveryDate;
    /**
     * @var SearchDateField
     */
    public $actualShippingDate;
    /**
     * @var SearchStringField
     */
    public $billOfLading;
    /**
     * @var SearchDateField
     */
    public $createdDate;
    /**
     * @var SearchMultiSelectField
     */
    public $currency;
    /**
     * @var SearchStringField
     */
    public $description;
    /**
     * @var SearchDateField
     */
    public $expectedDeliveryDate;
    /**
     * @var SearchDoubleField
     */
    public $expectedRate;
    /**
     * @var SearchDateField
     */
    public $expectedShippingDate;
    /**
     * @var SearchMultiSelectField
     */
    public $externalDocumentNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchMultiSelectField
     */
    public $incoterm;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchDateField
     */
    public $itemEffectiveDate;
    /**
     * @var SearchDoubleField
     */
    public $itemExchangeRate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $landedCostAllocationMethod;
    /**
     * @var SearchDoubleField
     */
    public $landedCostAmount;
    /**
     * @var SearchMultiSelectField
     */
    public $landedCostCostCategory;
    /**
     * @var SearchMultiSelectField
     */
    public $landedCostCurrency;
    /**
     * @var SearchDateField
     */
    public $landedCostEffectiveDate;
    /**
     * @var SearchDoubleField
     */
    public $landedCostExchangeRate;
    /**
     * @var SearchStringField
     */
    public $memo;
    /**
     * @var SearchDoubleField
     */
    public $poAmount;
    /**
     * @var SearchDoubleField
     */
    public $poRate;
    /**
     * @var SearchMultiSelectField
     */
    public $purchaseOrder;
    /**
     * @var SearchDoubleField
     */
    public $quantityBilled;
    /**
     * @var SearchDoubleField
     */
    public $quantityExpected;
    /**
     * @var SearchDoubleField
     */
    public $quantityReceived;
    /**
     * @var SearchDoubleField
     */
    public $quantityRemaining;
    /**
     * @var SearchMultiSelectField
     */
    public $receivingLocation;
    /**
     * @var SearchMultiSelectField
     */
    public $shipmentBaseCurrency;
    /**
     * @var SearchMultiSelectField
     */
    public $shipmentNumber;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var SearchDoubleField
     */
    public $totalUnitCost;
    /**
     * @var SearchMultiSelectField
     */
    public $unit;
    /**
     * @var SearchDoubleField
     */
    public $unitLandedCost;
    /**
     * @var SearchMultiSelectField
     */
    public $vendor;
    /**
     * @var SearchStringField
     */
    public $vesselNumber;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'actualDeliveryDate' => 'SearchDateField',
        'actualShippingDate' => 'SearchDateField',
        'billOfLading' => 'SearchStringField',
        'createdDate' => 'SearchDateField',
        'currency' => 'SearchMultiSelectField',
        'description' => 'SearchStringField',
        'expectedDeliveryDate' => 'SearchDateField',
        'expectedRate' => 'SearchDoubleField',
        'expectedShippingDate' => 'SearchDateField',
        'externalDocumentNumber' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'incoterm' => 'SearchMultiSelectField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'item' => 'SearchMultiSelectField',
        'itemEffectiveDate' => 'SearchDateField',
        'itemExchangeRate' => 'SearchDoubleField',
        'landedCostAllocationMethod' => 'SearchEnumMultiSelectField',
        'landedCostAmount' => 'SearchDoubleField',
        'landedCostCostCategory' => 'SearchMultiSelectField',
        'landedCostCurrency' => 'SearchMultiSelectField',
        'landedCostEffectiveDate' => 'SearchDateField',
        'landedCostExchangeRate' => 'SearchDoubleField',
        'memo' => 'SearchStringField',
        'poAmount' => 'SearchDoubleField',
        'poRate' => 'SearchDoubleField',
        'purchaseOrder' => 'SearchMultiSelectField',
        'quantityBilled' => 'SearchDoubleField',
        'quantityExpected' => 'SearchDoubleField',
        'quantityReceived' => 'SearchDoubleField',
        'quantityRemaining' => 'SearchDoubleField',
        'receivingLocation' => 'SearchMultiSelectField',
        'shipmentBaseCurrency' => 'SearchMultiSelectField',
        'shipmentNumber' => 'SearchMultiSelectField',
        'status' => 'SearchEnumMultiSelectField',
        'totalUnitCost' => 'SearchDoubleField',
        'unit' => 'SearchMultiSelectField',
        'unitLandedCost' => 'SearchDoubleField',
        'vendor' => 'SearchMultiSelectField',
        'vesselNumber' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
