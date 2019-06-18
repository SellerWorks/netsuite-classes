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
 * AdvInterCompanyJournalEntryLine.
 */
class AdvInterCompanyJournalEntryLine
{
    /**
     * @var RecordRef
     */
    public $lineSubsidiary;
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
     * @var RecordRef
     */
    public $dueToFromSubsidiary;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var RecordRef
     */
    public $schedule;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var dateTime
     */
    public $endDate;
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
     * @var string
     */
    public $residual;
    /**
     * @var RecordRef
     */
    public $amortizationSched;
    /**
     * @var RecordRef
     */
    public $scheduleNum;
    /**
     * @var dateTime
     */
    public $amortizStartDate;
    /**
     * @var dateTime
     */
    public $amortizationEndDate;
    /**
     * @var string
     */
    public $amortizationResidual;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var RecordRef
     */
    public $tax1Acct;
    /**
     * @var float
     */
    public $lineFxRate;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'lineSubsidiary' => 'RecordRef',
        'account' => 'RecordRef',
        'line' => 'integer',
        'debit' => 'float',
        'credit' => 'float',
        'taxCode' => 'RecordRef',
        'memo' => 'string',
        'taxRate1' => 'float',
        'entity' => 'RecordRef',
        'dueToFromSubsidiary' => 'RecordRef',
        'grossAmt' => 'float',
        'schedule' => 'RecordRef',
        'department' => 'RecordRef',
        'startDate' => 'dateTime',
        'class' => 'RecordRef',
        'endDate' => 'dateTime',
        'location' => 'RecordRef',
        'revenueRecognitionRule' => 'RecordRef',
        'eliminate' => 'boolean',
        'residual' => 'string',
        'amortizationSched' => 'RecordRef',
        'scheduleNum' => 'RecordRef',
        'amortizStartDate' => 'dateTime',
        'amortizationEndDate' => 'dateTime',
        'amortizationResidual' => 'string',
        'tax1Amt' => 'float',
        'tax1Acct' => 'RecordRef',
        'lineFxRate' => 'float',
        'customFieldList' => 'CustomFieldList',
    );
}
