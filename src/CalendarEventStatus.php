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
 * CalendarEventStatus.
 */
class CalendarEventStatus
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _canceled = '_canceled';
    /**
     * @var string
     */
    const _completed = '_completed';
    /**
     * @var string
     */
    const _confirmed = '_confirmed';
    /**
     * @var string
     */
    const _tentative = '_tentative';
}
