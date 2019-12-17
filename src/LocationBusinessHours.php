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
 * LocationBusinessHours.
 */
class LocationBusinessHours
{
    /**
     * @var dateTime
     */
    public $startTime;
    /**
     * @var dateTime
     */
    public $endTime;
    /**
     * @var bool
     */
    public $isSunday;
    /**
     * @var bool
     */
    public $isMonday;
    /**
     * @var bool
     */
    public $isTuesday;
    /**
     * @var bool
     */
    public $isWednesday;
    /**
     * @var bool
     */
    public $isThursday;
    /**
     * @var bool
     */
    public $isFriday;
    /**
     * @var bool
     */
    public $isSaturday;
    /**
     * @var dateTime
     */
    public $sameDayPickupCutOffTime;

    public static $paramtypesmap = [
        'startTime' => 'dateTime',
        'endTime' => 'dateTime',
        'isSunday' => 'boolean',
        'isMonday' => 'boolean',
        'isTuesday' => 'boolean',
        'isWednesday' => 'boolean',
        'isThursday' => 'boolean',
        'isFriday' => 'boolean',
        'isSaturday' => 'boolean',
        'sameDayPickupCutOffTime' => 'dateTime',
    ];
}
