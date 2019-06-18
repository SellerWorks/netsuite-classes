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
 * ResourceAllocation.
 */
class ResourceAllocation extends Record
{
    /**
     * @var RecordRef
     */
    public $requestedby;
    /**
     * @var ResourceAllocationApprovalStatus
     */
    public $approvalStatus;
    /**
     * @var RecordRef
     */
    public $nextApprover;
    /**
     * @var RecordRef
     */
    public $allocationResource;
    /**
     * @var RecordRef
     */
    public $project;
    /**
     * @var string
     */
    public $notes;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var float
     */
    public $allocationAmount;
    /**
     * @var ResourceAllocationAllocationUnit
     */
    public $allocationUnit;
    /**
     * @var float
     */
    public $numberHours;
    /**
     * @var float
     */
    public $percentOfTime;
    /**
     * @var RecordRef
     */
    public $allocationType;
    /**
     * @var RecordRef
     */
    public $customForm;
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
        'requestedby' => 'RecordRef',
        'approvalStatus' => 'ResourceAllocationApprovalStatus',
        'nextApprover' => 'RecordRef',
        'allocationResource' => 'RecordRef',
        'project' => 'RecordRef',
        'notes' => 'string',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'allocationAmount' => 'float',
        'allocationUnit' => 'ResourceAllocationAllocationUnit',
        'numberHours' => 'float',
        'percentOfTime' => 'float',
        'allocationType' => 'RecordRef',
        'customForm' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
