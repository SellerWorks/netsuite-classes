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
 * CreditMemoItem.
 */
class CreditMemoItem
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
    public $orderLine;
    /**
     * @var int
     */
    public $line;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $binNumbers;
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
     * @var bool
     */
    public $isTaxable;
    /**
     * @var CustomFieldList
     */
    public $options;
    /**
     * @var RecordRef
     */
    public $shipAddress;
    /**
     * @var ShippingCarrier
     */
    public $shipCarrier;
    /**
     * @var RecordRef
     */
    public $shipMethod;
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
     * @var float
     */
    public $tax1Amt;
    /**
     * @var float
     */
    public $grossAmt;
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
     * @var ItemCostEstimateType
     */
    public $costEstimateType;
    /**
     * @var float
     */
    public $costEstimate;
    /**
     * @var string
     */
    public $taxDetailsReference;
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
     * @var bool
     */
    public $deferRevRec;
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
    public $catchUpPeriod;
    /**
     * @var RecordRef
     */
    public $chargeType;
    /**
     * @var RecordRef
     */
    public $subscriptionLine;
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
        'orderLine' => 'integer',
        'line' => 'integer',
        'quantity' => 'float',
        'description' => 'string',
        'binNumbers' => 'string',
        'price' => 'RecordRef',
        'rate' => 'string',
        'amount' => 'float',
        'isTaxable' => 'boolean',
        'options' => 'CustomFieldList',
        'shipAddress' => 'RecordRef',
        'shipCarrier' => 'ShippingCarrier',
        'shipMethod' => 'RecordRef',
        'taxCode' => 'RecordRef',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
        'tax1Amt' => 'float',
        'grossAmt' => 'float',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'costEstimateType' => 'ItemCostEstimateType',
        'costEstimate' => 'float',
        'taxDetailsReference' => 'string',
        'revRecSchedule' => 'RecordRef',
        'revRecStartDate' => 'dateTime',
        'revRecTermInMonths' => 'integer',
        'revRecEndDate' => 'dateTime',
        'units' => 'RecordRef',
        'inventoryDetail' => 'InventoryDetail',
        'serialNumbers' => 'string',
        'deferRevRec' => 'boolean',
        'giftCertFrom' => 'string',
        'giftCertRecipientName' => 'string',
        'giftCertRecipientEmail' => 'string',
        'giftCertMessage' => 'string',
        'taxAmount' => 'float',
        'giftCertNumber' => 'string',
        'vsoeSopGroup' => 'VsoeSopGroup',
        'vsoeIsEstimate' => 'boolean',
        'vsoePrice' => 'float',
        'vsoeAmount' => 'float',
        'vsoeAllocation' => 'float',
        'vsoeDeferral' => 'VsoeDeferral',
        'vsoePermitDiscount' => 'VsoePermitDiscount',
        'vsoeDelivered' => 'boolean',
        'catchUpPeriod' => 'RecordRef',
        'chargeType' => 'RecordRef',
        'subscriptionLine' => 'RecordRef',
        'chargesList' => 'RecordRefList',
        'customFieldList' => 'CustomFieldList',
    ];
}
