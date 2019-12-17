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
 * ProjectTaskSearchBasic.
 */
class ProjectTaskSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchDoubleField
     */
    public $actualWork;
    /**
     * @var SearchMultiSelectField
     */
    public $assignee;
    /**
     * @var SearchMultiSelectField
     */
    public $company;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $constraintType;
    /**
     * @var SearchMultiSelectField
     */
    public $contact;
    /**
     * @var SearchDoubleField
     */
    public $cost;
    /**
     * @var SearchDoubleField
     */
    public $costBase;
    /**
     * @var SearchDoubleField
     */
    public $costBaseBaseline;
    /**
     * @var SearchDoubleField
     */
    public $costBaseline;
    /**
     * @var SearchDoubleField
     */
    public $costBaseVariance;
    /**
     * @var SearchDoubleField
     */
    public $costVariance;
    /**
     * @var SearchDoubleField
     */
    public $costVariancePercent;
    /**
     * @var SearchDateField
     */
    public $createdDate;
    /**
     * @var SearchDateField
     */
    public $endDate;
    /**
     * @var SearchDateField
     */
    public $endDateBaseline;
    /**
     * @var SearchDoubleField
     */
    public $endDateVariance;
    /**
     * @var SearchDoubleField
     */
    public $estimatedWork;
    /**
     * @var SearchDoubleField
     */
    public $estimatedWorkBaseline;
    /**
     * @var SearchDoubleField
     */
    public $estimatedWorkVariance;
    /**
     * @var SearchDoubleField
     */
    public $estimatedWorkVariancePercent;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchDateField
     */
    public $finishByDate;
    /**
     * @var SearchLongField
     */
    public $id;
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
    public $isMilestone;
    /**
     * @var SearchBooleanField
     */
    public $isSummaryTask;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchBooleanField
     */
    public $nonBillableTask;
    /**
     * @var SearchMultiSelectField
     */
    public $owner;
    /**
     * @var SearchMultiSelectField
     */
    public $parent;
    /**
     * @var SearchDoubleField
     */
    public $percentWorkComplete;
    /**
     * @var SearchMultiSelectField
     */
    public $predecessor;
    /**
     * @var SearchStringField
     */
    public $predecessors;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $priority;
    /**
     * @var SearchDoubleField
     */
    public $remainingWork;
    /**
     * @var SearchDateField
     */
    public $startDate;
    /**
     * @var SearchDateField
     */
    public $startDateBaseline;
    /**
     * @var SearchDoubleField
     */
    public $startDateVariance;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var SearchMultiSelectField
     */
    public $successor;
    /**
     * @var SearchStringField
     */
    public $title;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'actualWork' => 'SearchDoubleField',
        'assignee' => 'SearchMultiSelectField',
        'company' => 'SearchMultiSelectField',
        'constraintType' => 'SearchEnumMultiSelectField',
        'contact' => 'SearchMultiSelectField',
        'cost' => 'SearchDoubleField',
        'costBase' => 'SearchDoubleField',
        'costBaseBaseline' => 'SearchDoubleField',
        'costBaseline' => 'SearchDoubleField',
        'costBaseVariance' => 'SearchDoubleField',
        'costVariance' => 'SearchDoubleField',
        'costVariancePercent' => 'SearchDoubleField',
        'createdDate' => 'SearchDateField',
        'endDate' => 'SearchDateField',
        'endDateBaseline' => 'SearchDateField',
        'endDateVariance' => 'SearchDoubleField',
        'estimatedWork' => 'SearchDoubleField',
        'estimatedWorkBaseline' => 'SearchDoubleField',
        'estimatedWorkVariance' => 'SearchDoubleField',
        'estimatedWorkVariancePercent' => 'SearchDoubleField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'finishByDate' => 'SearchDateField',
        'id' => 'SearchLongField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isMilestone' => 'SearchBooleanField',
        'isSummaryTask' => 'SearchBooleanField',
        'lastModifiedDate' => 'SearchDateField',
        'nonBillableTask' => 'SearchBooleanField',
        'owner' => 'SearchMultiSelectField',
        'parent' => 'SearchMultiSelectField',
        'percentWorkComplete' => 'SearchDoubleField',
        'predecessor' => 'SearchMultiSelectField',
        'predecessors' => 'SearchStringField',
        'priority' => 'SearchEnumMultiSelectField',
        'remainingWork' => 'SearchDoubleField',
        'startDate' => 'SearchDateField',
        'startDateBaseline' => 'SearchDateField',
        'startDateVariance' => 'SearchDoubleField',
        'status' => 'SearchEnumMultiSelectField',
        'successor' => 'SearchMultiSelectField',
        'title' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
