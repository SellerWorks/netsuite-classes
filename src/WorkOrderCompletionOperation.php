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
 * WorkOrderCompletionOperation.
 */
class WorkOrderCompletionOperation
{
    /**
     * @var int
     */
    public $operationSequence;
    /**
     * @var string
     */
    public $operationName;
    /**
     * @var string
     */
    public $workCenter;
    /**
     * @var int
     */
    public $machineResources;
    /**
     * @var int
     */
    public $laborResources;
    /**
     * @var float
     */
    public $inputQuantity;
    /**
     * @var float
     */
    public $quantityRemaining;
    /**
     * @var float
     */
    public $predecessorCompletedQuantity;
    /**
     * @var float
     */
    public $completedQuantity;
    /**
     * @var bool
     */
    public $recordSetup;
    /**
     * @var float
     */
    public $machineSetupTime;
    /**
     * @var float
     */
    public $laborSetupTime;
    /**
     * @var float
     */
    public $machineRunTime;
    /**
     * @var float
     */
    public $laborRunTime;

    public static $paramtypesmap = array(
        'operationSequence' => 'integer',
        'operationName' => 'string',
        'workCenter' => 'string',
        'machineResources' => 'integer',
        'laborResources' => 'integer',
        'inputQuantity' => 'float',
        'quantityRemaining' => 'float',
        'predecessorCompletedQuantity' => 'float',
        'completedQuantity' => 'float',
        'recordSetup' => 'boolean',
        'machineSetupTime' => 'float',
        'laborSetupTime' => 'float',
        'machineRunTime' => 'float',
        'laborRunTime' => 'float',
    );
}
