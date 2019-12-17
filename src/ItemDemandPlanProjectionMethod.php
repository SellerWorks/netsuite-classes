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
 * ItemDemandPlanProjectionMethod.
 */
class ItemDemandPlanProjectionMethod
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const _linearRegression = '_linearRegression';
    /**
     * @var string
     */
    const _movingAverage = '_movingAverage';
    /**
     * @var string
     */
    const _salesForecast = '_salesForecast';
    /**
     * @var string
     */
    const _seasonalAverage = '_seasonalAverage';
}
