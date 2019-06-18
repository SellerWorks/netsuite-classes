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
 * ProjectTaskAssignee.
 */
class ProjectTaskAssignee
{
    /**
     * @var RecordRef
     */
    public $resource;
    /**
     * @var float
     */
    public $units;
    /**
     * @var RecordRef
     */
    public $serviceItem;
    /**
     * @var float
     */
    public $estimatedWork;
    /**
     * @var float
     */
    public $unitCost;
    /**
     * @var float
     */
    public $unitPrice;
    /**
     * @var float
     */
    public $cost;
    /**
     * @var float
     */
    public $price;

    public static $paramtypesmap = [
        'resource' => 'RecordRef',
        'units' => 'float',
        'serviceItem' => 'RecordRef',
        'estimatedWork' => 'float',
        'unitCost' => 'float',
        'unitPrice' => 'float',
        'cost' => 'float',
        'price' => 'float',
    ];
}
