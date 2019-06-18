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
 * TimeSheetSearchRow.
 */
class TimeSheetSearchRow extends SearchRow
{
    /**
     * @var TimeSheetSearchRowBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $employeeJoin;
    /**
     * @var TimeBillSearchRowBasic
     */
    public $timeBillJoin;
    /**
     * @var TimeEntrySearchRowBasic
     */
    public $timeEntryJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'TimeSheetSearchRowBasic',
        'employeeJoin' => 'EmployeeSearchRowBasic',
        'timeBillJoin' => 'TimeBillSearchRowBasic',
        'timeEntryJoin' => 'TimeEntrySearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
