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
 * ItemSource.
 */
class ItemSource
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const _stock = '_stock';
    /**
     * @var string
     */
    const _phantom = '_phantom';
    /**
     * @var string
     */
    const _workOrder = '_workOrder';
    /**
     * @var string
     */
    const _purchaseOrder = '_purchaseOrder';
}
