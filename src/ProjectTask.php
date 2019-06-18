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
 * ProjectTask.
 */
class ProjectTask extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $eventId;
    /**
     * @var float
     */
    public $percentTimeComplete;
    /**
     * @var string
     */
    public $title;
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
    public $order;
    /**
     * @var RecordRef
     */
    public $owner;
    /**
     * @var RecordRef
     */
    public $parent;
    /**
     * @var RecordRef
     */
    public $priority;
    /**
     * @var float
     */
    public $estimatedWork;
    /**
     * @var float
     */
    public $estimatedWorkBaseline;
    /**
     * @var ProjectTaskConstraintType
     */
    public $constraintType;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $startDateBaseline;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var dateTime
     */
    public $finishByDate;
    /**
     * @var dateTime
     */
    public $endDateBaseline;
    /**
     * @var float
     */
    public $actualWork;
    /**
     * @var float
     */
    public $remainingWork;
    /**
     * @var string
     */
    public $message;
    /**
     * @var bool
     */
    public $isMilestone;
    /**
     * @var string
     */
    public $isOnCriticalPath;
    /**
     * @var float
     */
    public $slackMinutes;
    /**
     * @var dateTime
     */
    public $lateEnd;
    /**
     * @var dateTime
     */
    public $lateStart;
    /**
     * @var ProjectTaskStatus
     */
    public $status;
    /**
     * @var bool
     */
    public $nonBillableTask;
    /**
     * @var ProjectTaskAssigneeList
     */
    public $assigneeList;
    /**
     * @var ProjectTaskPredecessorList
     */
    public $predecessorList;
    /**
     * @var ProjectTaskTimeItemList
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
        'customForm' => 'RecordRef',
        'eventId' => 'RecordRef',
        'percentTimeComplete' => 'float',
        'title' => 'string',
        'company' => 'RecordRef',
        'contact' => 'RecordRef',
        'order' => 'RecordRef',
        'owner' => 'RecordRef',
        'parent' => 'RecordRef',
        'priority' => 'RecordRef',
        'estimatedWork' => 'float',
        'estimatedWorkBaseline' => 'float',
        'constraintType' => 'ProjectTaskConstraintType',
        'startDate' => 'dateTime',
        'startDateBaseline' => 'dateTime',
        'endDate' => 'dateTime',
        'finishByDate' => 'dateTime',
        'endDateBaseline' => 'dateTime',
        'actualWork' => 'float',
        'remainingWork' => 'float',
        'message' => 'string',
        'isMilestone' => 'boolean',
        'isOnCriticalPath' => 'string',
        'slackMinutes' => 'float',
        'lateEnd' => 'dateTime',
        'lateStart' => 'dateTime',
        'status' => 'ProjectTaskStatus',
        'nonBillableTask' => 'boolean',
        'assigneeList' => 'ProjectTaskAssigneeList',
        'predecessorList' => 'ProjectTaskPredecessorList',
        'timeItemList' => 'ProjectTaskTimeItemList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
