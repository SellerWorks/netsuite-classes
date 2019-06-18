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
 * InboundShipmentSearchRowBasic.
 */
class InboundShipmentSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnDateField[]
     */
    public $actualDeliveryDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $actualShippingDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $billOfLading;
    /**
     * @var SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var SearchColumnStringField[]
     */
    public $description;
    /**
     * @var SearchColumnDateField[]
     */
    public $expectedDeliveryDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $expectedRate;
    /**
     * @var SearchColumnDateField[]
     */
    public $expectedShippingDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $externalDocumentNumber;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $incoterm;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var SearchColumnDateField[]
     */
    public $itemEffectiveDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $itemExchangeRate;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $landedCostAllocationMethod;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $landedCostAmount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $landedCostCostCategory;
    /**
     * @var SearchColumnSelectField[]
     */
    public $landedCostCurrency;
    /**
     * @var SearchColumnDateField[]
     */
    public $landedCostEffectiveDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $landedCostExchangeRate;
    /**
     * @var SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $poAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $poRate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $purchaseOrder;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityBilled;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityExpected;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityReceived;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityRemaining;
    /**
     * @var SearchColumnSelectField[]
     */
    public $receivingLocation;
    /**
     * @var SearchColumnSelectField[]
     */
    public $shipmentBaseCurrency;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipmentNumber;
    /**
     * @var SearchColumnStringField[]
     */
    public $status;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $totalUnitCost;
    /**
     * @var SearchColumnSelectField[]
     */
    public $unit;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $unitLandedCost;
    /**
     * @var SearchColumnSelectField[]
     */
    public $vendor;
    /**
     * @var SearchColumnStringField[]
     */
    public $vesselNumber;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'actualDeliveryDate' => 'SearchColumnDateField[]',
        'actualShippingDate' => 'SearchColumnDateField[]',
        'billOfLading' => 'SearchColumnStringField[]',
        'createdDate' => 'SearchColumnDateField[]',
        'currency' => 'SearchColumnSelectField[]',
        'description' => 'SearchColumnStringField[]',
        'expectedDeliveryDate' => 'SearchColumnDateField[]',
        'expectedRate' => 'SearchColumnDoubleField[]',
        'expectedShippingDate' => 'SearchColumnDateField[]',
        'externalDocumentNumber' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'incoterm' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'item' => 'SearchColumnSelectField[]',
        'itemEffectiveDate' => 'SearchColumnDateField[]',
        'itemExchangeRate' => 'SearchColumnDoubleField[]',
        'landedCostAllocationMethod' => 'SearchColumnEnumSelectField[]',
        'landedCostAmount' => 'SearchColumnDoubleField[]',
        'landedCostCostCategory' => 'SearchColumnSelectField[]',
        'landedCostCurrency' => 'SearchColumnSelectField[]',
        'landedCostEffectiveDate' => 'SearchColumnDateField[]',
        'landedCostExchangeRate' => 'SearchColumnDoubleField[]',
        'memo' => 'SearchColumnStringField[]',
        'poAmount' => 'SearchColumnDoubleField[]',
        'poRate' => 'SearchColumnDoubleField[]',
        'purchaseOrder' => 'SearchColumnSelectField[]',
        'quantityBilled' => 'SearchColumnDoubleField[]',
        'quantityExpected' => 'SearchColumnDoubleField[]',
        'quantityReceived' => 'SearchColumnDoubleField[]',
        'quantityRemaining' => 'SearchColumnDoubleField[]',
        'receivingLocation' => 'SearchColumnSelectField[]',
        'shipmentBaseCurrency' => 'SearchColumnSelectField[]',
        'shipmentNumber' => 'SearchColumnStringField[]',
        'status' => 'SearchColumnStringField[]',
        'totalUnitCost' => 'SearchColumnDoubleField[]',
        'unit' => 'SearchColumnSelectField[]',
        'unitLandedCost' => 'SearchColumnDoubleField[]',
        'vendor' => 'SearchColumnSelectField[]',
        'vesselNumber' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
