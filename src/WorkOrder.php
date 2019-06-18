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
 * WorkOrder.
 */
class WorkOrder extends Record
{
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
    public $customForm;
    /**
     * @var RecordRef
     */
    public $manufacturingRouting;
    /**
     * @var bool
     */
    public $autoCalculateLag;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var RecordRef
     */
    public $job;
    /**
     * @var RecordRef
     */
    public $assemblyItem;
    /**
     * @var bool
     */
    public $expandAssembly;
    /**
     * @var bool
     */
    public $isWip;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var RecordRef
     */
    public $billOfMaterials;
    /**
     * @var RecordRef
     */
    public $units;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var WorkOrderOrderStatus
     */
    public $orderStatus;
    /**
     * @var bool
     */
    public $firmed;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var WorkOrderItemList
     */
    public $itemList;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var WorkOrderSchedulingMethod
     */
    public $schedulingMethod;
    /**
     * @var SalesTeamList
     */
    public $salesTeamList;
    /**
     * @var PartnersList
     */
    public $partnersList;
    /**
     * @var RecordRef
     */
    public $createdFrom;
    /**
     * @var string
     */
    public $sourceTransactionId;
    /**
     * @var int
     */
    public $sourceTransactionLine;
    /**
     * @var bool
     */
    public $specialOrder;
    /**
     * @var float
     */
    public $buildable;
    /**
     * @var CustomFieldList
     */
    public $options;
    /**
     * @var float
     */
    public $built;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var RecordRef
     */
    public $revision;
    /**
     * @var RecordRef
     */
    public $billOfMaterialsRevision;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
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
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'customForm' => 'RecordRef',
        'manufacturingRouting' => 'RecordRef',
        'autoCalculateLag' => 'boolean',
        'status' => 'string',
        'tranId' => 'string',
        'entity' => 'RecordRef',
        'job' => 'RecordRef',
        'assemblyItem' => 'RecordRef',
        'expandAssembly' => 'boolean',
        'isWip' => 'boolean',
        'quantity' => 'float',
        'billOfMaterials' => 'RecordRef',
        'units' => 'RecordRef',
        'tranDate' => 'dateTime',
        'orderStatus' => 'WorkOrderOrderStatus',
        'firmed' => 'boolean',
        'memo' => 'string',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'itemList' => 'WorkOrderItemList',
        'location' => 'RecordRef',
        'schedulingMethod' => 'WorkOrderSchedulingMethod',
        'salesTeamList' => 'SalesTeamList',
        'partnersList' => 'PartnersList',
        'createdFrom' => 'RecordRef',
        'sourceTransactionId' => 'string',
        'sourceTransactionLine' => 'integer',
        'specialOrder' => 'boolean',
        'buildable' => 'float',
        'options' => 'CustomFieldList',
        'built' => 'float',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'revision' => 'RecordRef',
        'billOfMaterialsRevision' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
