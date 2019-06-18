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
 * OpportunityItem.
 */
class OpportunityItem
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
     * @var float
     */
    public $altSalesAmt;
    /**
     * @var int
     */
    public $revRecTermInMonths;
    /**
     * @var CustomFieldList
     */
    public $options;
    /**
     * @var bool
     */
    public $fromJob;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var bool
     */
    public $isEstimate;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $class;
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
    public $taxAmount;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var float
     */
    public $grossAmt;
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
     * @var dateTime
     */
    public $expectedShipDate;
    /**
     * @var RecordRef
     */
    public $subscription;
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
        'quantity' => 'float',
        'units' => 'RecordRef',
        'description' => 'string',
        'price' => 'RecordRef',
        'rate' => 'string',
        'amount' => 'float',
        'altSalesAmt' => 'float',
        'revRecTermInMonths' => 'integer',
        'options' => 'CustomFieldList',
        'fromJob' => 'boolean',
        'department' => 'RecordRef',
        'isEstimate' => 'boolean',
        'location' => 'RecordRef',
        'class' => 'RecordRef',
        'costEstimateType' => 'ItemCostEstimateType',
        'costEstimate' => 'float',
        'taxAmount' => 'float',
        'taxDetailsReference' => 'string',
        'grossAmt' => 'float',
        'tax1Amt' => 'float',
        'taxCode' => 'RecordRef',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
        'expectedShipDate' => 'dateTime',
        'subscription' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
    ];
}
