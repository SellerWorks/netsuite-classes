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
 * CashRefundItem.
 */
class CashRefundItem
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
     * @var int
     */
    public $orderLine;
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
    public $binNumbers;
    /**
     * @var string
     */
    public $serialNumbers;
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
     * @var RecordRef
     */
    public $taxCode;
    /**
     * @var string
     */
    public $taxRate1;
    /**
     * @var string
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
    public $catchUpPeriod;
    /**
     * @var bool
     */
    public $deferRevRec;
    /**
     * @var string
     */
    public $giftCertFrom;
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
        'orderLine' => 'integer',
        'quantity' => 'float',
        'units' => 'RecordRef',
        'inventoryDetail' => 'InventoryDetail',
        'binNumbers' => 'string',
        'serialNumbers' => 'string',
        'description' => 'string',
        'price' => 'RecordRef',
        'rate' => 'string',
        'amount' => 'float',
        'taxCode' => 'RecordRef',
        'taxRate1' => 'string',
        'taxRate2' => 'string',
        'tax1Amt' => 'float',
        'grossAmt' => 'float',
        'isTaxable' => 'boolean',
        'options' => 'CustomFieldList',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'revRecSchedule' => 'RecordRef',
        'revRecStartDate' => 'dateTime',
        'revRecEndDate' => 'dateTime',
        'catchUpPeriod' => 'RecordRef',
        'deferRevRec' => 'boolean',
        'giftCertFrom' => 'string',
        'costEstimateType' => 'ItemCostEstimateType',
        'costEstimate' => 'float',
        'taxDetailsReference' => 'string',
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
        'chargeType' => 'RecordRef',
        'chargesList' => 'RecordRefList',
        'customFieldList' => 'CustomFieldList',
    ];
}
