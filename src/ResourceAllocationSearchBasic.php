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
 * ResourceAllocationSearchBasic.
 */
class ResourceAllocationSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $allocationType;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $allocationUnit;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $approvalStatus;
    /**
     * @var SearchMultiSelectField
     */
    public $customer;
    /**
     * @var SearchDateField
     */
    public $endDate;
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
     * @var SearchMultiSelectField
     */
    public $nextApprover;
    /**
     * @var SearchStringField
     */
    public $notes;
    /**
     * @var SearchDoubleField
     */
    public $numberHours;
    /**
     * @var SearchDoubleField
     */
    public $percentOfTime;
    /**
     * @var SearchMultiSelectField
     */
    public $project;
    /**
     * @var SearchMultiSelectField
     */
    public $requestedBy;
    /**
     * @var SearchMultiSelectField
     */
    public $resource;
    /**
     * @var SearchDateField
     */
    public $startDate;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'allocationType' => 'SearchMultiSelectField',
        'allocationUnit' => 'SearchEnumMultiSelectField',
        'approvalStatus' => 'SearchEnumMultiSelectField',
        'customer' => 'SearchMultiSelectField',
        'endDate' => 'SearchDateField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'nextApprover' => 'SearchMultiSelectField',
        'notes' => 'SearchStringField',
        'numberHours' => 'SearchDoubleField',
        'percentOfTime' => 'SearchDoubleField',
        'project' => 'SearchMultiSelectField',
        'requestedBy' => 'SearchMultiSelectField',
        'resource' => 'SearchMultiSelectField',
        'startDate' => 'SearchDateField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
