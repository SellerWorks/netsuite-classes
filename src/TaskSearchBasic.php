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
 * TaskSearchBasic.
 */
class TaskSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchDoubleField
     */
    public $actualTime;
    /**
     * @var SearchMultiSelectField
     */
    public $assigned;
    /**
     * @var SearchMultiSelectField
     */
    public $company;
    /**
     * @var SearchDateField
     */
    public $completedDate;
    /**
     * @var SearchMultiSelectField
     */
    public $contact;
    /**
     * @var SearchDateField
     */
    public $createdDate;
    /**
     * @var SearchDateField
     */
    public $endDate;
    /**
     * @var SearchDoubleField
     */
    public $estimatedTime;
    /**
     * @var SearchDoubleField
     */
    public $estimatedTimeOverride;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchBooleanField
     */
    public $isJobSummaryTask;
    /**
     * @var SearchBooleanField
     */
    public $isJobTask;
    /**
     * @var SearchBooleanField
     */
    public $isPrivate;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchLongField
     */
    public $milestone;
    /**
     * @var SearchMultiSelectField
     */
    public $owner;
    /**
     * @var SearchLongField
     */
    public $percentComplete;
    /**
     * @var SearchLongField
     */
    public $percentTimeComplete;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $priority;
    /**
     * @var SearchDateField
     */
    public $startDate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var SearchDoubleField
     */
    public $timeRemaining;
    /**
     * @var SearchStringField
     */
    public $title;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'actualTime' => 'SearchDoubleField',
        'assigned' => 'SearchMultiSelectField',
        'company' => 'SearchMultiSelectField',
        'completedDate' => 'SearchDateField',
        'contact' => 'SearchMultiSelectField',
        'createdDate' => 'SearchDateField',
        'endDate' => 'SearchDateField',
        'estimatedTime' => 'SearchDoubleField',
        'estimatedTimeOverride' => 'SearchDoubleField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isJobSummaryTask' => 'SearchBooleanField',
        'isJobTask' => 'SearchBooleanField',
        'isPrivate' => 'SearchBooleanField',
        'lastModifiedDate' => 'SearchDateField',
        'milestone' => 'SearchLongField',
        'owner' => 'SearchMultiSelectField',
        'percentComplete' => 'SearchLongField',
        'percentTimeComplete' => 'SearchLongField',
        'priority' => 'SearchEnumMultiSelectField',
        'startDate' => 'SearchDateField',
        'status' => 'SearchEnumMultiSelectField',
        'timeRemaining' => 'SearchDoubleField',
        'title' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
