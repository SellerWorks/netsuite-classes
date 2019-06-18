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
 * StatisticalJournalEntry.
 */
class StatisticalJournalEntry extends Record
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
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var RecordRef
     */
    public $parentExpenseAlloc;
    /**
     * @var bool
     */
    public $approved;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var dateTime
     */
    public $reversalDate;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var bool
     */
    public $reversalDefer;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $unitsType;
    /**
     * @var StatisticalJournalEntryLineList
     */
    public $lineList;
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
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'customForm' => 'RecordRef',
        'tranId' => 'string',
        'parentExpenseAlloc' => 'RecordRef',
        'approved' => 'boolean',
        'tranDate' => 'dateTime',
        'postingPeriod' => 'RecordRef',
        'reversalDate' => 'dateTime',
        'memo' => 'string',
        'reversalDefer' => 'boolean',
        'subsidiary' => 'RecordRef',
        'unitsType' => 'RecordRef',
        'lineList' => 'StatisticalJournalEntryLineList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
