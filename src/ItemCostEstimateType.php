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
 * ItemCostEstimateType.
 */
class ItemCostEstimateType
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _averageCost = '_averageCost';
    /**
     * @var string
     */
    const _custom = '_custom';
    /**
     * @var string
     */
    const _derivedFromMemberItems = '_derivedFromMemberItems';
    /**
     * @var string
     */
    const _itemDefinedCost = '_itemDefinedCost';
    /**
     * @var string
     */
    const _lastPurchasePrice = '_lastPurchasePrice';
    /**
     * @var string
     */
    const _preferredVendorRate = '_preferredVendorRate';
    /**
     * @var string
     */
    const _purchaseOrderRate = '_purchaseOrderRate';
    /**
     * @var string
     */
    const _purchasePrice = '_purchasePrice';
}
