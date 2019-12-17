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
 * ItemSupplyPlanOrderType.
 */
class ItemSupplyPlanOrderType
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const _purchaseOrder = '_purchaseOrder';
    /**
     * @var string
     */
    const _transferOrder = '_transferOrder';
    /**
     * @var string
     */
    const _workOrder = '_workOrder';
}
