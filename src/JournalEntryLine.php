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
 * JournalEntryLine.
 */
class JournalEntryLine
{
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var int
     */
    public $line;
    /**
     * @var float
     */
    public $debit;
    /**
     * @var float
     */
    public $credit;
    /**
     * @var RecordRef
     */
    public $taxAccount;
    /**
     * @var RecordRef
     */
    public $lineTaxCode;
    /**
     * @var float
     */
    public $lineTaxRate;
    /**
     * @var float
     */
    public $debitTax;
    /**
     * @var float
     */
    public $creditTax;
    /**
     * @var float
     */
    public $taxBasis;
    /**
     * @var float
     */
    public $totalAmount;
    /**
     * @var RecordRef
     */
    public $taxCode;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var float
     */
    public $taxRate1;
    /**
     * @var RecordRef
     */
    public $entity;
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
     * @var RecordRef
     */
    public $revenueRecognitionRule;
    /**
     * @var bool
     */
    public $eliminate;
    /**
     * @var RecordRef
     */
    public $schedule;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var string
     */
    public $residual;
    /**
     * @var RecordRef
     */
    public $scheduleNum;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var RecordRef
     */
    public $tax1Acct;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'account' => 'RecordRef',
        'line' => 'integer',
        'debit' => 'float',
        'credit' => 'float',
        'taxAccount' => 'RecordRef',
        'lineTaxCode' => 'RecordRef',
        'lineTaxRate' => 'float',
        'debitTax' => 'float',
        'creditTax' => 'float',
        'taxBasis' => 'float',
        'totalAmount' => 'float',
        'taxCode' => 'RecordRef',
        'memo' => 'string',
        'taxRate1' => 'float',
        'entity' => 'RecordRef',
        'grossAmt' => 'float',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'revenueRecognitionRule' => 'RecordRef',
        'eliminate' => 'boolean',
        'schedule' => 'RecordRef',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'residual' => 'string',
        'scheduleNum' => 'RecordRef',
        'tax1Amt' => 'float',
        'tax1Acct' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
    );
}
