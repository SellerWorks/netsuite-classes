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
 * EstimateItem.
 */
class EstimateItem
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
     * @var bool
     */
    public $expandItemGroup;
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
    public $quantity;
    /**
     * @var RecordRef
     */
    public $units;
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
     * @var bool
     */
    public $isTaxable;
    /**
     * @var float
     */
    public $altSalesAmt;
    /**
     * @var float
     */
    public $taxAmount;
    /**
     * @var bool
     */
    public $fromJob;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var bool
     */
    public $isEstimate;
    /**
     * @var RecordRef
     */
    public $subscription;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var RecordRef
     */
    public $taxCode;
    /**
     * @var ItemCostEstimateType
     */
    public $costEstimateType;
    /**
     * @var float
     */
    public $costEstimate;
    /**
     * @var bool
     */
    public $excludeFromRateRequest;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var float
     */
    public $taxRate1;
    /**
     * @var float
     */
    public $taxRate2;
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
     * @var dateTime
     */
    public $expectedShipDate;
    /**
     * @var RecordRef
     */
    public $chargeType;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'job' => 'RecordRef',
        'item' => 'RecordRef',
        'line' => 'integer',
        'expandItemGroup' => 'boolean',
        'quantityAvailable' => 'float',
        'quantityOnHand' => 'float',
        'quantity' => 'float',
        'units' => 'RecordRef',
        'description' => 'string',
        'serialNumbers' => 'string',
        'price' => 'RecordRef',
        'rate' => 'string',
        'amount' => 'float',
        'options' => 'CustomFieldList',
        'revRecTermInMonths' => 'integer',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'isTaxable' => 'boolean',
        'altSalesAmt' => 'float',
        'taxAmount' => 'float',
        'fromJob' => 'boolean',
        'grossAmt' => 'float',
        'isEstimate' => 'boolean',
        'subscription' => 'RecordRef',
        'tax1Amt' => 'float',
        'taxCode' => 'RecordRef',
        'costEstimateType' => 'ItemCostEstimateType',
        'costEstimate' => 'float',
        'excludeFromRateRequest' => 'boolean',
        'taxDetailsReference' => 'string',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
        'shipGroup' => 'integer',
        'itemIsFulfilled' => 'boolean',
        'shipAddress' => 'RecordRef',
        'shipMethod' => 'RecordRef',
        'expectedShipDate' => 'dateTime',
        'chargeType' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
    );
}
