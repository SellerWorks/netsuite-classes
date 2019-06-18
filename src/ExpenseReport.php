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
 * ExpenseReport.
 */
class ExpenseReport extends Record
{
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var string
     */
    public $status;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var RecordRef
     */
    public $expenseReportCurrency;
    /**
     * @var float
     */
    public $expenseReportExchangeRate;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var dateTime
     */
    public $taxPointDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var RecordRef
     */
    public $acctCorpCardExp;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var dateTime
     */
    public $dueDate;
    /**
     * @var RecordRef
     */
    public $approvalStatus;
    /**
     * @var float
     */
    public $total;
    /**
     * @var RecordRef
     */
    public $nextApprover;
    /**
     * @var float
     */
    public $advance;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var bool
     */
    public $complete;
    /**
     * @var bool
     */
    public $supervisorApproval;
    /**
     * @var bool
     */
    public $accountingApproval;
    /**
     * @var bool
     */
    public $useMultiCurrency;
    /**
     * @var float
     */
    public $tax2Amt;
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
     * @var ExpenseReportExpenseList
     */
    public $expenseList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'status' => 'string',
        'customForm' => 'RecordRef',
        'account' => 'RecordRef',
        'entity' => 'RecordRef',
        'expenseReportCurrency' => 'RecordRef',
        'expenseReportExchangeRate' => 'float',
        'subsidiary' => 'RecordRef',
        'taxPointDate' => 'dateTime',
        'tranId' => 'string',
        'acctCorpCardExp' => 'RecordRef',
        'postingPeriod' => 'RecordRef',
        'tranDate' => 'dateTime',
        'dueDate' => 'dateTime',
        'approvalStatus' => 'RecordRef',
        'total' => 'float',
        'nextApprover' => 'RecordRef',
        'advance' => 'float',
        'tax1Amt' => 'float',
        'amount' => 'float',
        'memo' => 'string',
        'complete' => 'boolean',
        'supervisorApproval' => 'boolean',
        'accountingApproval' => 'boolean',
        'useMultiCurrency' => 'boolean',
        'tax2Amt' => 'float',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'expenseList' => 'ExpenseReportExpenseList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
