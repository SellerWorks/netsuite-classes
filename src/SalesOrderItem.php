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
 * SalesOrderItem.
 */
class SalesOrderItem
{
    /**
     * @var RecordRef
     */
    public $job;
    /**
     * @var RecordRef
     */
    public $subscription;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var float
     */
    public $quantityAvailable;
    /**
     * @var bool
     */
    public $expandItemGroup;
    /**
     * @var int
     */
    public $lineUniqueKey;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var RecordRef
     */
    public $units;
    /**
     * @var InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $description;
    /**
     * @var RecordRef
     */
    public $price;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var bool
     */
    public $isTaxable;
    /**
     * @var SalesOrderItemCommitInventory
     */
    public $commitInventory;
    /**
     * @var float
     */
    public $orderPriority;
    /**
     * @var string
     */
    public $licenseCode;
    /**
     * @var CustomFieldList
     */
    public $options;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var SalesOrderItemCreatePo
     */
    public $createPo;
    /**
     * @var RecordRef
     */
    public $createdPo;
    /**
     * @var float
     */
    public $altSalesAmt;
    /**
     * @var bool
     */
    public $createWo;
    /**
     * @var RecordRef
     */
    public $poVendor;
    /**
     * @var string
     */
    public $poCurrency;
    /**
     * @var float
     */
    public $poRate;
    /**
     * @var RecordRef
     */
    public $revRecSchedule;
    /**
     * @var dateTime
     */
    public $revRecStartDate;
    /**
     * @var int
     */
    public $revRecTermInMonths;
    /**
     * @var dateTime
     */
    public $revRecEndDate;
    /**
     * @var bool
     */
    public $deferRevRec;
    /**
     * @var bool
     */
    public $isClosed;
    /**
     * @var SalesOrderItemFulfillmentChoice
     */
    public $itemFulfillmentChoice;
    /**
     * @var RecordRef
     */
    public $catchUpPeriod;
    /**
     * @var RecordRef
     */
    public $billingSchedule;
    /**
     * @var bool
     */
    public $fromJob;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var float
     */
    public $taxAmount;
    /**
     * @var bool
     */
    public $excludeFromRateRequest;
    /**
     * @var bool
     */
    public $isEstimate;
    /**
     * @var RecordRef
     */
    public $inventoryLocation;
    /**
     * @var RecordRef
     */
    public $inventorySubsidiary;
    /**
     * @var int
     */
    public $line;
    /**
     * @var float
     */
    public $percentComplete;
    /**
     * @var ItemCostEstimateType
     */
    public $costEstimateType;
    /**
     * @var float
     */
    public $costEstimate;
    /**
     * @var float
     */
    public $quantityBackOrdered;
    /**
     * @var float
     */
    public $quantityBilled;
    /**
     * @var float
     */
    public $quantityCommitted;
    /**
     * @var float
     */
    public $quantityFulfilled;
    /**
     * @var float
     */
    public $quantityPacked;
    /**
     * @var float
     */
    public $quantityPicked;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var RecordRef
     */
    public $taxCode;
    /**
     * @var float
     */
    public $taxRate1;
    /**
     * @var float
     */
    public $taxRate2;
    /**
     * @var string
     */
    public $giftCertFrom;
    /**
     * @var string
     */
    public $giftCertRecipientName;
    /**
     * @var string
     */
    public $giftCertRecipientEmail;
    /**
     * @var string
     */
    public $giftCertMessage;
    /**
     * @var string
     */
    public $giftCertNumber;
    /**
     * @var int
     */
    public $shipGroup;
    /**
     * @var bool
     */
    public $itemIsFulfilled;
    /**
     * @var RecordRef
     */
    public $shipAddress;
    /**
     * @var RecordRef
     */
    public $shipMethod;
    /**
     * @var VsoeSopGroup
     */
    public $vsoeSopGroup;
    /**
     * @var bool
     */
    public $vsoeIsEstimate;
    /**
     * @var float
     */
    public $vsoePrice;
    /**
     * @var float
     */
    public $vsoeAmount;
    /**
     * @var float
     */
    public $vsoeAllocation;
    /**
     * @var VsoeDeferral
     */
    public $vsoeDeferral;
    /**
     * @var VsoePermitDiscount
     */
    public $vsoePermitDiscount;
    /**
     * @var bool
     */
    public $vsoeDelivered;
    /**
     * @var dateTime
     */
    public $expectedShipDate;
    /**
     * @var bool
     */
    public $noAutoAssignLocation;
    /**
     * @var bool
     */
    public $locationAutoAssigned;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var RecordRef
     */
    public $chargeType;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'job' => 'RecordRef',
        'subscription' => 'RecordRef',
        'item' => 'RecordRef',
        'quantityAvailable' => 'float',
        'expandItemGroup' => 'boolean',
        'lineUniqueKey' => 'integer',
        'quantityOnHand' => 'float',
        'quantity' => 'float',
        'units' => 'RecordRef',
        'inventoryDetail' => 'InventoryDetail',
        'description' => 'string',
        'price' => 'RecordRef',
        'rate' => 'string',
        'serialNumbers' => 'string',
        'amount' => 'float',
        'isTaxable' => 'boolean',
        'commitInventory' => 'SalesOrderItemCommitInventory',
        'orderPriority' => 'float',
        'licenseCode' => 'string',
        'options' => 'CustomFieldList',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'createPo' => 'SalesOrderItemCreatePo',
        'createdPo' => 'RecordRef',
        'altSalesAmt' => 'float',
        'createWo' => 'boolean',
        'poVendor' => 'RecordRef',
        'poCurrency' => 'string',
        'poRate' => 'float',
        'revRecSchedule' => 'RecordRef',
        'revRecStartDate' => 'dateTime',
        'revRecTermInMonths' => 'integer',
        'revRecEndDate' => 'dateTime',
        'deferRevRec' => 'boolean',
        'isClosed' => 'boolean',
        'itemFulfillmentChoice' => 'SalesOrderItemFulfillmentChoice',
        'catchUpPeriod' => 'RecordRef',
        'billingSchedule' => 'RecordRef',
        'fromJob' => 'boolean',
        'grossAmt' => 'float',
        'taxAmount' => 'float',
        'excludeFromRateRequest' => 'boolean',
        'isEstimate' => 'boolean',
        'inventoryLocation' => 'RecordRef',
        'inventorySubsidiary' => 'RecordRef',
        'line' => 'integer',
        'percentComplete' => 'float',
        'costEstimateType' => 'ItemCostEstimateType',
        'costEstimate' => 'float',
        'quantityBackOrdered' => 'float',
        'quantityBilled' => 'float',
        'quantityCommitted' => 'float',
        'quantityFulfilled' => 'float',
        'quantityPacked' => 'float',
        'quantityPicked' => 'float',
        'tax1Amt' => 'float',
        'taxCode' => 'RecordRef',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
        'giftCertFrom' => 'string',
        'giftCertRecipientName' => 'string',
        'giftCertRecipientEmail' => 'string',
        'giftCertMessage' => 'string',
        'giftCertNumber' => 'string',
        'shipGroup' => 'integer',
        'itemIsFulfilled' => 'boolean',
        'shipAddress' => 'RecordRef',
        'shipMethod' => 'RecordRef',
        'vsoeSopGroup' => 'VsoeSopGroup',
        'vsoeIsEstimate' => 'boolean',
        'vsoePrice' => 'float',
        'vsoeAmount' => 'float',
        'vsoeAllocation' => 'float',
        'vsoeDeferral' => 'VsoeDeferral',
        'vsoePermitDiscount' => 'VsoePermitDiscount',
        'vsoeDelivered' => 'boolean',
        'expectedShipDate' => 'dateTime',
        'noAutoAssignLocation' => 'boolean',
        'locationAutoAssigned' => 'boolean',
        'taxDetailsReference' => 'string',
        'chargeType' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
    ];
}
