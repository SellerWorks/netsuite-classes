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
 * AdvInterCompanyJournalEntry.
 */
class AdvInterCompanyJournalEntry extends Record
{
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var dateTime
     */
    public $reversalDate;
    /**
     * @var bool
     */
    public $reversalDefer;
    /**
     * @var RecordRef
     */
    public $parentExpenseAlloc;
    /**
     * @var bool
     */
    public $isBookSpecific;
    /**
     * @var RecordRef
     */
    public $accountingBook;
    /**
     * @var string
     */
    public $reversalEntry;
    /**
     * @var RecordRef
     */
    public $createdFrom;
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
    public $subsidiary;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var bool
     */
    public $approved;
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var bool
     */
    public $performAutoBalance;
    /**
     * @var AdvInterCompanyJournalEntryLineList
     */
    public $lineList;
    /**
     * @var AdvInterCompanyJournalEntryAccountingBookDetailList
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

    public static $paramtypesmap = [
        'postingPeriod' => 'RecordRef',
        'customForm' => 'RecordRef',
        'tranDate' => 'dateTime',
        'currency' => 'RecordRef',
        'tranId' => 'string',
        'reversalDate' => 'dateTime',
        'reversalDefer' => 'boolean',
        'parentExpenseAlloc' => 'RecordRef',
        'isBookSpecific' => 'boolean',
        'accountingBook' => 'RecordRef',
        'reversalEntry' => 'string',
        'createdFrom' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'memo' => 'string',
        'approved' => 'boolean',
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'performAutoBalance' => 'boolean',
        'lineList' => 'AdvInterCompanyJournalEntryLineList',
        'accountingBookDetailList' => 'AdvInterCompanyJournalEntryAccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
