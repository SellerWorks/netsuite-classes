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
 * ReturnAuthorizationItem.
 */
class ReturnAuthorizationItem
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
     * @var float
     */
    public $quantityReceived;
    /**
     * @var float
     */
    public $quantityBilled;
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
     * @var string
     */
    public $serialNumbers;
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
     * @var CustomFieldList
     */
    public $options;
    /**
     * @var int
     */
    public $revRecTermInMonths;
    /**
     * @var bool
     */
    public $deferRevRec;
    /**
     * @var bool
     */
    public $isClosed;
    /**
     * @var bool
     */
    public $isDropShipment;
    /**
     * @var RecordRef
     */
    public $inventoryLocation;
    /**
     * @var RecordRef
     */
    public $inventorySubsidiary;
    /**
     * @var RecordRef
     */
    public $catchUpPeriod;
    /**
     * @var RecordRef
     */
    public $department;
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
     * @var bool
     */
    public $isTaxable;
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
    public $altSalesAmt;
    /**
     * @var float
     */
    public $taxAmount;
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
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'job' => 'RecordRef',
        'item' => 'RecordRef',
        'orderLine' => 'integer',
        'line' => 'integer',
        'quantity' => 'float',
        'quantityReceived' => 'float',
        'quantityBilled' => 'float',
        'units' => 'RecordRef',
        'inventoryDetail' => 'InventoryDetail',
        'description' => 'string',
        'serialNumbers' => 'string',
        'price' => 'RecordRef',
        'rate' => 'string',
        'amount' => 'float',
        'options' => 'CustomFieldList',
        'revRecTermInMonths' => 'integer',
        'deferRevRec' => 'boolean',
        'isClosed' => 'boolean',
        'isDropShipment' => 'boolean',
        'inventoryLocation' => 'RecordRef',
        'inventorySubsidiary' => 'RecordRef',
        'catchUpPeriod' => 'RecordRef',
        'department' => 'RecordRef',
        'costEstimateType' => 'ItemCostEstimateType',
        'costEstimate' => 'float',
        'taxDetailsReference' => 'string',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'revRecSchedule' => 'RecordRef',
        'revRecStartDate' => 'dateTime',
        'revRecEndDate' => 'dateTime',
        'taxCode' => 'RecordRef',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
        'tax1Amt' => 'float',
        'grossAmt' => 'float',
        'isTaxable' => 'boolean',
        'giftCertFrom' => 'string',
        'giftCertRecipientName' => 'string',
        'giftCertRecipientEmail' => 'string',
        'giftCertMessage' => 'string',
        'giftCertNumber' => 'string',
        'vsoeSopGroup' => 'VsoeSopGroup',
        'vsoeIsEstimate' => 'boolean',
        'vsoePrice' => 'float',
        'vsoeAmount' => 'float',
        'altSalesAmt' => 'float',
        'taxAmount' => 'float',
        'vsoeAllocation' => 'float',
        'vsoeDeferral' => 'VsoeDeferral',
        'vsoePermitDiscount' => 'VsoePermitDiscount',
        'vsoeDelivered' => 'boolean',
        'customFieldList' => 'CustomFieldList',
    );
}
