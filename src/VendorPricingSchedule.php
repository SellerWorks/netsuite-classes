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
 * VendorPricingSchedule.
 */
class VendorPricingSchedule
{
    /**
     * @var string
     */
    public $scheduleName;
    /**
     * @var float
     */
    public $scheduleDiscount;

    public static $paramtypesmap = array(
        'scheduleName' => 'string',
        'scheduleDiscount' => 'float',
    );
}
