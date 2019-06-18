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
 * StatisticalJournalEntryLine.
 */
class StatisticalJournalEntryLine
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
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $scheduleNum;
    /**
     * @var float
     */
    public $debit;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $entity;
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
    public $lineUnit;
    /**
     * @var string
     */
    public $previewDebit;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'account' => 'RecordRef',
        'line' => 'integer',
        'location' => 'RecordRef',
        'scheduleNum' => 'RecordRef',
        'debit' => 'float',
        'memo' => 'string',
        'entity' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'lineUnit' => 'RecordRef',
        'previewDebit' => 'string',
        'customFieldList' => 'CustomFieldList',
    );
}
