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
 * ItemDemandSource.
 */
class ItemDemandSource
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _enteredAndPlannedOrders = '_enteredAndPlannedOrders';
    /**
     * @var string
     */
    const _forecastAndOrders = '_forecastAndOrders';
    /**
     * @var string
     */
    const _forecastConsumption = '_forecastConsumption';
    /**
     * @var string
     */
    const _forecastFromDemandPlan = '_forecastFromDemandPlan';
}
