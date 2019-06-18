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
 * ManufacturingRoutingRoutingStep.
 */
class ManufacturingRoutingRoutingStep
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
     * @var RecordRef
     */
    public $manufacturingWorkCenter;
    /**
     * @var int
     */
    public $machineResources;
    /**
     * @var int
     */
    public $laborResources;
    /**
     * @var RecordRef
     */
    public $manufacturingCostTemplate;
    /**
     * @var float
     */
    public $setupTime;
    /**
     * @var float
     */
    public $runRate;
    /**
     * @var ManufacturingLagType
     */
    public $lagType;
    /**
     * @var int
     */
    public $lagAmount;
    /**
     * @var string
     */
    public $lagUnits;

    public static $paramtypesmap = array(
        'operationSequence' => 'integer',
        'operationName' => 'string',
        'manufacturingWorkCenter' => 'RecordRef',
        'machineResources' => 'integer',
        'laborResources' => 'integer',
        'manufacturingCostTemplate' => 'RecordRef',
        'setupTime' => 'float',
        'runRate' => 'float',
        'lagType' => 'ManufacturingLagType',
        'lagAmount' => 'integer',
        'lagUnits' => 'string',
    );
}
