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
 * JournalEntry.
 */
class JournalEntry extends Record
{
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $exchangeRate;
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
     * @var RecordRef
     */
    public $nexus;
    /**
     * @var RecordRef
     */
    public $subsidiaryTaxRegNum;
    /**
     * @var dateTime
     */
    public $taxPointDate;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $toSubsidiary;
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
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var JournalEntryLineList
     */
    public $lineList;
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

    public static $paramtypesmap = [
        'postingPeriod' => 'RecordRef',
        'tranDate' => 'dateTime',
        'currency' => 'RecordRef',
        'exchangeRate' => 'float',
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
        'nexus' => 'RecordRef',
        'subsidiaryTaxRegNum' => 'RecordRef',
        'taxPointDate' => 'dateTime',
        'memo' => 'string',
        'toSubsidiary' => 'RecordRef',
        'approved' => 'boolean',
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'customForm' => 'RecordRef',
        'lineList' => 'JournalEntryLineList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
