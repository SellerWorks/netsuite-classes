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
 * RevRecScheduleRecurrenceType.
 */
class RevRecScheduleRecurrenceType
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _custom = '_custom';
    /**
     * @var string
     */
    const _straightLineByEvenPeriods = '_straightLineByEvenPeriods';
    /**
     * @var string
     */
    const _straightLineProrateFirstAndLastPeriod = '_straightLineProrateFirstAndLastPeriod';
    /**
     * @var string
     */
    const _straightLineProrateFirstAndLastPeriodPeriodRate = '_straightLineProrateFirstAndLastPeriodPeriodRate';
    /**
     * @var string
     */
    const _straightLineUsingExactDays = '_straightLineUsingExactDays';
}
