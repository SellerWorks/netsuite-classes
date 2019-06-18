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
 * InvoiceExpCost.
 */
class InvoiceExpCost
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
    public $jobDisp;
    /**
     * @var string
     */
    public $employeeDisp;
    /**
     * @var string
     */
    public $categoryDisp;
    /**
     * @var string
     */
    public $memo;
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
     * @var float
     */
    public $originalAmount;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var float
     */
    public $taxAmount;
    /**
     * @var string
     */
    public $taxableDisp;
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

    public static $paramtypesmap = array(
        'apply' => 'boolean',
        'doc' => 'integer',
        'line' => 'integer',
        'taxDetailsReference' => 'string',
        'billedDate' => 'dateTime',
        'jobDisp' => 'string',
        'employeeDisp' => 'string',
        'categoryDisp' => 'string',
        'memo' => 'string',
        'department' => 'string',
        'class' => 'string',
        'location' => 'string',
        'originalAmount' => 'float',
        'amount' => 'float',
        'taxAmount' => 'float',
        'taxableDisp' => 'string',
        'revRecSchedule' => 'RecordRef',
        'revRecStartDate' => 'dateTime',
        'revRecEndDate' => 'dateTime',
        'grossAmt' => 'float',
        'tax1Amt' => 'float',
        'taxCode' => 'RecordRef',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
    );
}
