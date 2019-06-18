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
 * Task.
 */
class Task extends Record
{
    /**
     * @var RecordRef
     */
    public $company;
    /**
     * @var RecordRef
     */
    public $contact;
    /**
     * @var RecordRef
     */
    public $supportCase;
    /**
     * @var RecordRef
     */
    public $transaction;
    /**
     * @var RecordRef
     */
    public $milestone;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $title;
    /**
     * @var RecordRef
     */
    public $assigned;
    /**
     * @var bool
     */
    public $sendEmail;
    /**
     * @var bool
     */
    public $timedEvent;
    /**
     * @var Duration
     */
    public $estimatedTime;
    /**
     * @var Duration
     */
    public $estimatedTimeOverride;
    /**
     * @var Duration
     */
    public $actualTime;
    /**
     * @var Duration
     */
    public $timeRemaining;
    /**
     * @var float
     */
    public $percentTimeComplete;
    /**
     * @var float
     */
    public $percentComplete;
    /**
     * @var RecordRef
     */
    public $parent;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var dateTime
     */
    public $dueDate;
    /**
     * @var dateTime
     */
    public $completedDate;
    /**
     * @var TaskPriority
     */
    public $priority;
    /**
     * @var TaskStatus
     */
    public $status;
    /**
     * @var string
     */
    public $message;
    /**
     * @var bool
     */
    public $accessLevel;
    /**
     * @var TaskReminderType
     */
    public $reminderType;
    /**
     * @var TaskReminderMinutes
     */
    public $reminderMinutes;
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
    public $owner;
    /**
     * @var TaskContactList
     */
    public $contactList;
    /**
     * @var TaskTimeItemList
     */
    public $timeItemList;
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
        'company' => 'RecordRef',
        'contact' => 'RecordRef',
        'supportCase' => 'RecordRef',
        'transaction' => 'RecordRef',
        'milestone' => 'RecordRef',
        'customForm' => 'RecordRef',
        'title' => 'string',
        'assigned' => 'RecordRef',
        'sendEmail' => 'boolean',
        'timedEvent' => 'boolean',
        'estimatedTime' => 'Duration',
        'estimatedTimeOverride' => 'Duration',
        'actualTime' => 'Duration',
        'timeRemaining' => 'Duration',
        'percentTimeComplete' => 'float',
        'percentComplete' => 'float',
        'parent' => 'RecordRef',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'dueDate' => 'dateTime',
        'completedDate' => 'dateTime',
        'priority' => 'TaskPriority',
        'status' => 'TaskStatus',
        'message' => 'string',
        'accessLevel' => 'boolean',
        'reminderType' => 'TaskReminderType',
        'reminderMinutes' => 'TaskReminderMinutes',
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'owner' => 'RecordRef',
        'contactList' => 'TaskContactList',
        'timeItemList' => 'TaskTimeItemList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
