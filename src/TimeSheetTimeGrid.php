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
 * TimeSheetTimeGrid.
 */
class TimeSheetTimeGrid
{
    /**
     * @var TimeEntry
     */
    public $sunday;
    /**
     * @var TimeEntry
     */
    public $monday;
    /**
     * @var TimeEntry
     */
    public $tuesday;
    /**
     * @var TimeEntry
     */
    public $wednesday;
    /**
     * @var TimeEntry
     */
    public $thursday;
    /**
     * @var TimeEntry
     */
    public $friday;
    /**
     * @var TimeEntry
     */
    public $saturday;

    public static $paramtypesmap = [
        'sunday' => 'TimeEntry',
        'monday' => 'TimeEntry',
        'tuesday' => 'TimeEntry',
        'wednesday' => 'TimeEntry',
        'thursday' => 'TimeEntry',
        'friday' => 'TimeEntry',
        'saturday' => 'TimeEntry',
    ];
}
