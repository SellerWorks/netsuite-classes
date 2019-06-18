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
 * PeriodEndJournal.
 */
class PeriodEndJournal extends Record
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
    public $transactionNumber;
    /**
     * @var RecordRef
     */
    public $accountingBook;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var dateTime
     */
    public $trandate;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $sourceSubsidiary;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $mainAccount;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $creditTotal;
    /**
     * @var float
     */
    public $debitTotal;
    /**
     * @var PeriodEndJournalLineList
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
        'transactionNumber' => 'string',
        'accountingBook' => 'RecordRef',
        'customForm' => 'RecordRef',
        'tranId' => 'string',
        'trandate' => 'dateTime',
        'postingPeriod' => 'RecordRef',
        'memo' => 'string',
        'subsidiary' => 'RecordRef',
        'sourceSubsidiary' => 'RecordRef',
        'class' => 'RecordRef',
        'department' => 'RecordRef',
        'location' => 'RecordRef',
        'mainAccount' => 'RecordRef',
        'currency' => 'RecordRef',
        'creditTotal' => 'float',
        'debitTotal' => 'float',
        'lineList' => 'PeriodEndJournalLineList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
