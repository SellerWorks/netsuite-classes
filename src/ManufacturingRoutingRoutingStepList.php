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
 * ManufacturingRoutingRoutingStepList.
 */
class ManufacturingRoutingRoutingStepList
{
    /**
     * @var ManufacturingRoutingRoutingStep[]
     */
    public $manufacturingRoutingRoutingStep;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = [
        'manufacturingRoutingRoutingStep' => 'ManufacturingRoutingRoutingStep[]',
        'replaceAll' => 'boolean',
    ];
}
