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
 * ItemOverallQuantityPricingType.
 */
class ItemOverallQuantityPricingType
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const _byLineQuantity = '_byLineQuantity';
    /**
     * @var string
     */
    const _byOverallItemQuantity = '_byOverallItemQuantity';
    /**
     * @var string
     */
    const _byOverallParentQuantity = '_byOverallParentQuantity';
    /**
     * @var string
     */
    const _byOverallScheduleQuantity = '_byOverallScheduleQuantity';
}
