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
 * InventoryCostRevaluationCostComponent.
 */
class InventoryCostRevaluationCostComponent
{
    /**
     * @var float
     */
    public $cost;
    /**
     * @var RecordRef
     */
    public $componentItem;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var RecordRef
     */
    public $units;
    /**
     * @var RecordRef
     */
    public $costCategory;

    public static $paramtypesmap = array(
        'cost' => 'float',
        'componentItem' => 'RecordRef',
        'quantity' => 'float',
        'units' => 'RecordRef',
        'costCategory' => 'RecordRef',
    );
}
