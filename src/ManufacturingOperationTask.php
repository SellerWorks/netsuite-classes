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
 * ManufacturingOperationTask.
 */
class ManufacturingOperationTask extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $manufacturingWorkCenter;
    /**
     * @var RecordRef
     */
    public $manufacturingCostTemplate;
    /**
     * @var string
     */
    public $title;
    /**
     * @var int
     */
    public $operationSequence;
    /**
     * @var RecordRef
     */
    public $workOrder;
    /**
     * @var RecordRef
     */
    public $order;
    /**
     * @var ManufacturingOperationTaskStatus
     */
    public $status;
    /**
     * @var string
     */
    public $message;
    /**
     * @var float
     */
    public $estimatedWork;
    /**
     * @var float
     */
    public $actualWork;
    /**
     * @var float
     */
    public $remainingWork;
    /**
     * @var float
     */
    public $inputQuantity;
    /**
     * @var float
     */
    public $completedQuantity;
    /**
     * @var float
     */
    public $setupTime;
    /**
     * @var float
     */
    public $runRate;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var bool
     */
    public $autoCalculateLag;
    /**
     * @var float
     */
    public $machineResources;
    /**
     * @var float
     */
    public $laborResources;
    /**
     * @var ManufacturingCostDetailList
     */
    public $costDetailList;
    /**
     * @var ManufacturingOperationTaskPredecessorList
     */
    public $predecessorList;
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
        'customForm' => 'RecordRef',
        'manufacturingWorkCenter' => 'RecordRef',
        'manufacturingCostTemplate' => 'RecordRef',
        'title' => 'string',
        'operationSequence' => 'integer',
        'workOrder' => 'RecordRef',
        'order' => 'RecordRef',
        'status' => 'ManufacturingOperationTaskStatus',
        'message' => 'string',
        'estimatedWork' => 'float',
        'actualWork' => 'float',
        'remainingWork' => 'float',
        'inputQuantity' => 'float',
        'completedQuantity' => 'float',
        'setupTime' => 'float',
        'runRate' => 'float',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'autoCalculateLag' => 'boolean',
        'machineResources' => 'float',
        'laborResources' => 'float',
        'costDetailList' => 'ManufacturingCostDetailList',
        'predecessorList' => 'ManufacturingOperationTaskPredecessorList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
