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
 * ManufacturingOperationTaskSearchBasic.
 */
class ManufacturingOperationTaskSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchDoubleField
     */
    public $actualRunTime;
    /**
     * @var SearchDoubleField
     */
    public $actualSetupTime;
    /**
     * @var SearchDoubleField
     */
    public $completedQuantity;
    /**
     * @var SearchDateField
     */
    public $endDate;
    /**
     * @var SearchDoubleField
     */
    public $estimatedWork;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchLongField
     */
    public $id;
    /**
     * @var SearchDoubleField
     */
    public $inputQuantity;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchDoubleField
     */
    public $laborResources;
    /**
     * @var SearchDoubleField
     */
    public $lagAmount;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $lagType;
    /**
     * @var SearchStringField
     */
    public $lagUnits;
    /**
     * @var SearchDoubleField
     */
    public $machineResources;
    /**
     * @var SearchMultiSelectField
     */
    public $manufacturingCostTemplate;
    /**
     * @var SearchMultiSelectField
     */
    public $manufacturingWorkCenter;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchDoubleField
     */
    public $order;
    /**
     * @var SearchMultiSelectField
     */
    public $predecessor;
    /**
     * @var SearchDoubleField
     */
    public $remainingQuantity;
    /**
     * @var SearchDoubleField
     */
    public $runRate;
    /**
     * @var SearchDoubleField
     */
    public $runTime;
    /**
     * @var SearchLongField
     */
    public $sequence;
    /**
     * @var SearchDoubleField
     */
    public $setupTime;
    /**
     * @var SearchDateField
     */
    public $startDate;
    /**
     * @var SearchMultiSelectField
     */
    public $status;
    /**
     * @var SearchMultiSelectField
     */
    public $workOrder;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'actualRunTime' => 'SearchDoubleField',
        'actualSetupTime' => 'SearchDoubleField',
        'completedQuantity' => 'SearchDoubleField',
        'endDate' => 'SearchDateField',
        'estimatedWork' => 'SearchDoubleField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'id' => 'SearchLongField',
        'inputQuantity' => 'SearchDoubleField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'laborResources' => 'SearchDoubleField',
        'lagAmount' => 'SearchDoubleField',
        'lagType' => 'SearchEnumMultiSelectField',
        'lagUnits' => 'SearchStringField',
        'machineResources' => 'SearchDoubleField',
        'manufacturingCostTemplate' => 'SearchMultiSelectField',
        'manufacturingWorkCenter' => 'SearchMultiSelectField',
        'name' => 'SearchStringField',
        'order' => 'SearchDoubleField',
        'predecessor' => 'SearchMultiSelectField',
        'remainingQuantity' => 'SearchDoubleField',
        'runRate' => 'SearchDoubleField',
        'runTime' => 'SearchDoubleField',
        'sequence' => 'SearchLongField',
        'setupTime' => 'SearchDoubleField',
        'startDate' => 'SearchDateField',
        'status' => 'SearchMultiSelectField',
        'workOrder' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
