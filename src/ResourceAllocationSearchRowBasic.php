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
 * ResourceAllocationSearchRowBasic.
 */
class ResourceAllocationSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $allocationType;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $allocationUnit;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $approvalStatus;
    /**
     * @var SearchColumnSelectField[]
     */
    public $project;
    /**
     * @var SearchColumnSelectField[]
     */
    public $customer;
    /**
     * @var SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $nextApprover;
    /**
     * @var SearchColumnStringField[]
     */
    public $notes;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $numberHours;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $percentOfTime;
    /**
     * @var SearchColumnSelectField[]
     */
    public $requestedBy;
    /**
     * @var SearchColumnSelectField[]
     */
    public $resource;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'allocationType' => 'SearchColumnSelectField[]',
        'allocationUnit' => 'SearchColumnEnumSelectField[]',
        'approvalStatus' => 'SearchColumnEnumSelectField[]',
        'project' => 'SearchColumnSelectField[]',
        'customer' => 'SearchColumnSelectField[]',
        'endDate' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'nextApprover' => 'SearchColumnSelectField[]',
        'notes' => 'SearchColumnStringField[]',
        'numberHours' => 'SearchColumnDoubleField[]',
        'percentOfTime' => 'SearchColumnDoubleField[]',
        'requestedBy' => 'SearchColumnSelectField[]',
        'resource' => 'SearchColumnSelectField[]',
        'startDate' => 'SearchColumnDateField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
