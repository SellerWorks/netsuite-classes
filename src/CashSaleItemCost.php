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
 * CashSaleItemCost.
 */
class CashSaleItemCost
{
    /**
     * @var bool
     */
    public $apply;
    /**
     * @var int
     */
    public $doc;
    /**
     * @var int
     */
    public $line;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var dateTime
     */
    public $billedDate;
    /**
     * @var string
     */
    public $itemDisp;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var string
     */
    public $jobDisp;
    /**
     * @var string
     */
    public $department;
    /**
     * @var string
     */
    public $class;
    /**
     * @var string
     */
    public $location;
    /**
     * @var string
     */
    public $unitDisp;
    /**
     * @var CustomFieldList
     */
    public $options;
    /**
     * @var string
     */
    public $itemCostCount;
    /**
     * @var string
     */
    public $quantity;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var float
     */
    public $cost;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var float
     */
    public $taxAmount;
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

    public static $paramtypesmap = [
        'apply' => 'boolean',
        'doc' => 'integer',
        'line' => 'integer',
        'taxDetailsReference' => 'string',
        'billedDate' => 'dateTime',
        'itemDisp' => 'string',
        'memo' => 'string',
        'jobDisp' => 'string',
        'department' => 'string',
        'class' => 'string',
        'location' => 'string',
        'unitDisp' => 'string',
        'options' => 'CustomFieldList',
        'itemCostCount' => 'string',
        'quantity' => 'string',
        'serialNumbers' => 'string',
        'cost' => 'float',
        'amount' => 'float',
        'taxAmount' => 'float',
        'revRecSchedule' => 'RecordRef',
        'revRecStartDate' => 'dateTime',
        'revRecEndDate' => 'dateTime',
        'grossAmt' => 'float',
        'tax1Amt' => 'float',
        'taxCode' => 'RecordRef',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
    ];
}
