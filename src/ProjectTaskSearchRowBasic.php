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
 * ProjectTaskSearchRowBasic.
 */
class ProjectTaskSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnDoubleField[]
     */
    public $actualWork;
    /**
     * @var SearchColumnSelectField[]
     */
    public $company;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $constraintType;
    /**
     * @var SearchColumnSelectField[]
     */
    public $contact;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $cost;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $costBase;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $costBaseBaseline;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $costBaseline;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $costBaseVariance;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $costVariance;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $costVariancePercent;
    /**
     * @var SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $endDateBaseline;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $endDateVariance;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedWork;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedWorkBaseline;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedWorkVariance;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedWorkVariancePercent;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnDateField[]
     */
    public $finishByDate;
    /**
     * @var SearchColumnLongField[]
     */
    public $id;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isMilestone;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isSummaryTask;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $message;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $nonBillableTask;
    /**
     * @var SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var SearchColumnSelectField[]
     */
    public $parent;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $percentWorkComplete;
    /**
     * @var SearchColumnSelectField[]
     */
    public $predecessor;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $predecessorLagDays;
    /**
     * @var SearchColumnStringField[]
     */
    public $predecessors;
    /**
     * @var SearchColumnStringField[]
     */
    public $predecessorType;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $priority;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $remainingWork;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDateBaseline;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $startDateVariance;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $status;
    /**
     * @var SearchColumnSelectField[]
     */
    public $successor;
    /**
     * @var SearchColumnStringField[]
     */
    public $successorType;
    /**
     * @var SearchColumnStringField[]
     */
    public $title;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'actualWork' => 'SearchColumnDoubleField[]',
        'company' => 'SearchColumnSelectField[]',
        'constraintType' => 'SearchColumnEnumSelectField[]',
        'contact' => 'SearchColumnSelectField[]',
        'cost' => 'SearchColumnDoubleField[]',
        'costBase' => 'SearchColumnDoubleField[]',
        'costBaseBaseline' => 'SearchColumnDoubleField[]',
        'costBaseline' => 'SearchColumnDoubleField[]',
        'costBaseVariance' => 'SearchColumnDoubleField[]',
        'costVariance' => 'SearchColumnDoubleField[]',
        'costVariancePercent' => 'SearchColumnDoubleField[]',
        'createdDate' => 'SearchColumnDateField[]',
        'endDate' => 'SearchColumnDateField[]',
        'endDateBaseline' => 'SearchColumnDateField[]',
        'endDateVariance' => 'SearchColumnDoubleField[]',
        'estimatedWork' => 'SearchColumnDoubleField[]',
        'estimatedWorkBaseline' => 'SearchColumnDoubleField[]',
        'estimatedWorkVariance' => 'SearchColumnDoubleField[]',
        'estimatedWorkVariancePercent' => 'SearchColumnDoubleField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'finishByDate' => 'SearchColumnDateField[]',
        'id' => 'SearchColumnLongField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isMilestone' => 'SearchColumnBooleanField[]',
        'isSummaryTask' => 'SearchColumnBooleanField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'message' => 'SearchColumnStringField[]',
        'nonBillableTask' => 'SearchColumnBooleanField[]',
        'owner' => 'SearchColumnSelectField[]',
        'parent' => 'SearchColumnSelectField[]',
        'percentWorkComplete' => 'SearchColumnDoubleField[]',
        'predecessor' => 'SearchColumnSelectField[]',
        'predecessorLagDays' => 'SearchColumnDoubleField[]',
        'predecessors' => 'SearchColumnStringField[]',
        'predecessorType' => 'SearchColumnStringField[]',
        'priority' => 'SearchColumnEnumSelectField[]',
        'remainingWork' => 'SearchColumnDoubleField[]',
        'startDate' => 'SearchColumnDateField[]',
        'startDateBaseline' => 'SearchColumnDateField[]',
        'startDateVariance' => 'SearchColumnDoubleField[]',
        'status' => 'SearchColumnEnumSelectField[]',
        'successor' => 'SearchColumnSelectField[]',
        'successorType' => 'SearchColumnStringField[]',
        'title' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
