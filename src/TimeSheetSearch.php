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
 * TimeSheetSearch.
 */
class TimeSheetSearch extends SearchRecord
{
    /**
     * @var TimeSheetSearchBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchBasic
     */
    public $employeeJoin;
    /**
     * @var TimeBillSearchBasic
     */
    public $timeBillJoin;
    /**
     * @var TimeEntrySearchBasic
     */
    public $timeEntryJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'TimeSheetSearchBasic',
        'employeeJoin' => 'EmployeeSearchBasic',
        'timeBillJoin' => 'TimeBillSearchBasic',
        'timeEntryJoin' => 'TimeEntrySearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
