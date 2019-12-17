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
 * TaskSearchRowBasic.
 */
class TaskSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $accessLevel;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $actualTime;
    /**
     * @var SearchColumnSelectField[]
     */
    public $assigned;
    /**
     * @var SearchColumnSelectField[]
     */
    public $company;
    /**
     * @var SearchColumnDateField[]
     */
    public $completedDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $contact;
    /**
     * @var SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $dueDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedTime;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedTimeOverride;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isJobSummaryTask;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isJobTask;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $markdone;
    /**
     * @var SearchColumnStringField[]
     */
    public $message;
    /**
     * @var SearchColumnSelectField[]
     */
    public $milestone;
    /**
     * @var SearchColumnLongField[]
     */
    public $order;
    /**
     * @var SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $percentComplete;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $percentTimeComplete;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $priority;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $startTime;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $status;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $timeRemaining;
    /**
     * @var SearchColumnStringField[]
     */
    public $title;
    /**
     * @var SearchColumnSelectField[]
     */
    public $transaction;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'accessLevel' => 'SearchColumnStringField[]',
        'actualTime' => 'SearchColumnDoubleField[]',
        'assigned' => 'SearchColumnSelectField[]',
        'company' => 'SearchColumnSelectField[]',
        'completedDate' => 'SearchColumnDateField[]',
        'contact' => 'SearchColumnSelectField[]',
        'createdDate' => 'SearchColumnDateField[]',
        'dueDate' => 'SearchColumnDateField[]',
        'estimatedTime' => 'SearchColumnDoubleField[]',
        'estimatedTimeOverride' => 'SearchColumnDoubleField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isJobSummaryTask' => 'SearchColumnBooleanField[]',
        'isJobTask' => 'SearchColumnBooleanField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'markdone' => 'SearchColumnStringField[]',
        'message' => 'SearchColumnStringField[]',
        'milestone' => 'SearchColumnSelectField[]',
        'order' => 'SearchColumnLongField[]',
        'owner' => 'SearchColumnSelectField[]',
        'percentComplete' => 'SearchColumnDoubleField[]',
        'percentTimeComplete' => 'SearchColumnDoubleField[]',
        'priority' => 'SearchColumnEnumSelectField[]',
        'startDate' => 'SearchColumnDateField[]',
        'startTime' => 'SearchColumnStringField[]',
        'status' => 'SearchColumnEnumSelectField[]',
        'timeRemaining' => 'SearchColumnDoubleField[]',
        'title' => 'SearchColumnStringField[]',
        'transaction' => 'SearchColumnSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
