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
 * PeriodDemandPlan.
 */
class PeriodDemandPlan
{
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var DayOfTheWeek
     */
    public $dayOfTheWeek;

    public static $paramtypesmap = [
        'quantity' => 'float',
        'dayOfTheWeek' => 'DayOfTheWeek',
    ];
}
