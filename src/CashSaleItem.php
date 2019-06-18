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
 * CashSaleItem.
 */
class CashSaleItem
{
    /**
     * @var RecordRef
     */
    public $job;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var int
     */
    public $line;
    /**
     * @var float
     */
    public $quantityAvailable;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $quantityFulfilled;
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
    public $serialNumbers;
    /**
     * @var string
     */
    public $binNumbers;
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
     * @var float
     */
    public $amount;
    /**
     * @var int
     */
    public $orderLine;
    /**
     * @var string
     */
    public $licenseCode;
    /**
     * @var bool
     */
    public $isTaxable;
    /**
     * @var CustomFieldList
     */
    public $options;
    /**
     * @var bool
     */
    public $deferRevRec;
    /**
     * @var float
     */
    public $currentPercent;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var float
     */
    public $percentComplete;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $revRecSchedule;
    /**
     * @var dateTime
     */
    public $revRecStartDate;
    /**
     * @var dateTime
     */
    public $revRecEndDate;
    /**
     * @var RecordRef
     */
    public $subscriptionLine;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var ItemCostEstimateType
     */
    public $costEstimateType;
    /**
     * @var bool
     */
    public $excludeFromRateRequest;
    /**
     * @var RecordRef
     */
    public $catchUpPeriod;
    /**
     * @var float
     */
    public $costEstimate;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var float
     */
    public $amountOrdered;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var float
     */
    public $quantityOrdered;
    /**
     * @var float
     */
    public $quantityRemaining;
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
     * @var float
     */
    public $taxAmount;
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
     * @var RecordRef
     */
    public $chargeType;
    /**
     * @var RecordRefList
     */
    public $chargesList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'job' => 'RecordRef',
        'item' => 'RecordRef',
        'line' => 'integer',
        'quantityAvailable' => 'float',
        'quantityOnHand' => 'float',
        'quantityFulfilled' => 'float',
        'quantity' => 'float',
        'units' => 'RecordRef',
        'inventoryDetail' => 'InventoryDetail',
        'serialNumbers' => 'string',
        'binNumbers' => 'string',
        'description' => 'string',
        'price' => 'RecordRef',
        'rate' => 'string',
        'amount' => 'float',
        'orderLine' => 'integer',
        'licenseCode' => 'string',
        'isTaxable' => 'boolean',
        'options' => 'CustomFieldList',
        'deferRevRec' => 'boolean',
        'currentPercent' => 'float',
        'department' => 'RecordRef',
        'percentComplete' => 'float',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'revRecSchedule' => 'RecordRef',
        'revRecStartDate' => 'dateTime',
        'revRecEndDate' => 'dateTime',
        'subscriptionLine' => 'RecordRef',
        'grossAmt' => 'float',
        'costEstimateType' => 'ItemCostEstimateType',
        'excludeFromRateRequest' => 'boolean',
        'catchUpPeriod' => 'RecordRef',
        'costEstimate' => 'float',
        'taxDetailsReference' => 'string',
        'amountOrdered' => 'float',
        'tax1Amt' => 'float',
        'quantityOrdered' => 'float',
        'quantityRemaining' => 'float',
        'taxCode' => 'RecordRef',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
        'giftCertFrom' => 'string',
        'giftCertRecipientName' => 'string',
        'giftCertRecipientEmail' => 'string',
        'giftCertMessage' => 'string',
        'taxAmount' => 'float',
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
        'chargeType' => 'RecordRef',
        'chargesList' => 'RecordRefList',
        'customFieldList' => 'CustomFieldList',
    ];
}
