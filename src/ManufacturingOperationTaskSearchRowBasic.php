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
 * ManufacturingOperationTaskSearchRowBasic.
 */
class ManufacturingOperationTaskSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnDoubleField[]
     */
    public $actualRunTime;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $actualSetupTime;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $completedQuantity;
    /**
     * @var SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedWork;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnLongField[]
     */
    public $id;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $inputQuantity;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnLongField[]
     */
    public $laborResources;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $lagAmount;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $lagType;
    /**
     * @var SearchColumnStringField[]
     */
    public $lagUnits;
    /**
     * @var SearchColumnLongField[]
     */
    public $machineResources;
    /**
     * @var SearchColumnSelectField[]
     */
    public $manufacturingCostTemplate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $manufacturingWorkCenter;
    /**
     * @var SearchColumnStringField[]
     */
    public $message;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $order;
    /**
     * @var SearchColumnSelectField[]
     */
    public $predecessor;
    /**
     * @var SearchColumnStringField[]
     */
    public $predecessorType;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $remainingQuantity;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $runRate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $runTime;
    /**
     * @var SearchColumnLongField[]
     */
    public $sequence;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $setupTime;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $status;
    /**
     * @var SearchColumnStringField[]
     */
    public $workOrder;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'actualRunTime' => 'SearchColumnDoubleField[]',
        'actualSetupTime' => 'SearchColumnDoubleField[]',
        'completedQuantity' => 'SearchColumnDoubleField[]',
        'endDate' => 'SearchColumnDateField[]',
        'estimatedWork' => 'SearchColumnDoubleField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'id' => 'SearchColumnLongField[]',
        'inputQuantity' => 'SearchColumnDoubleField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'laborResources' => 'SearchColumnLongField[]',
        'lagAmount' => 'SearchColumnDoubleField[]',
        'lagType' => 'SearchColumnEnumSelectField[]',
        'lagUnits' => 'SearchColumnStringField[]',
        'machineResources' => 'SearchColumnLongField[]',
        'manufacturingCostTemplate' => 'SearchColumnSelectField[]',
        'manufacturingWorkCenter' => 'SearchColumnSelectField[]',
        'message' => 'SearchColumnStringField[]',
        'name' => 'SearchColumnStringField[]',
        'order' => 'SearchColumnDoubleField[]',
        'predecessor' => 'SearchColumnSelectField[]',
        'predecessorType' => 'SearchColumnStringField[]',
        'remainingQuantity' => 'SearchColumnDoubleField[]',
        'runRate' => 'SearchColumnDoubleField[]',
        'runTime' => 'SearchColumnDoubleField[]',
        'sequence' => 'SearchColumnLongField[]',
        'setupTime' => 'SearchColumnDoubleField[]',
        'startDate' => 'SearchColumnDateField[]',
        'status' => 'SearchColumnSelectField[]',
        'workOrder' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
