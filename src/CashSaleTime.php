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
 * CashSaleTime.
 */
class CashSaleTime
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
     * @var dateTime
     */
    public $billedDate;
    /**
     * @var string
     */
    public $employeeDisp;
    /**
     * @var string
     */
    public $itemDisp;
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
    public $quantity;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var string
     */
    public $unitDisp;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var string
     */
    public $memo;
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
     * @var string
     */
    public $taxDetailsReference;
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
        'billedDate' => 'dateTime',
        'employeeDisp' => 'string',
        'itemDisp' => 'string',
        'jobDisp' => 'string',
        'department' => 'string',
        'class' => 'string',
        'location' => 'string',
        'quantity' => 'string',
        'rate' => 'float',
        'unitDisp' => 'string',
        'amount' => 'float',
        'memo' => 'string',
        'taxAmount' => 'float',
        'revRecSchedule' => 'RecordRef',
        'revRecStartDate' => 'dateTime',
        'revRecEndDate' => 'dateTime',
        'grossAmt' => 'float',
        'taxDetailsReference' => 'string',
        'tax1Amt' => 'float',
        'taxCode' => 'RecordRef',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
    ];
}
