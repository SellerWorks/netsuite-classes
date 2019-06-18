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
 * TimeEntrySearchRow.
 */
class TimeEntrySearchRow extends SearchRow
{
    /**
     * @var TimeEntrySearchRowBasic
     */
    public $basic;
    /**
     * @var PhoneCallSearchRowBasic
     */
    public $callJoin;
    /**
     * @var SupportCaseSearchRowBasic
     */
    public $caseJoin;
    /**
     * @var ClassificationSearchRowBasic
     */
    public $classJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var DepartmentSearchRowBasic
     */
    public $departmentJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $employeeJoin;
    /**
     * @var CalendarEventSearchRowBasic
     */
    public $eventJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var JobSearchRowBasic
     */
    public $jobJoin;
    /**
     * @var LocationSearchRowBasic
     */
    public $locationJoin;
    /**
     * @var ProjectTaskSearchRowBasic
     */
    public $projectTaskJoin;
    /**
     * @var ProjectTaskAssignmentSearchRowBasic
     */
    public $projectTaskAssignmentJoin;
    /**
     * @var ResourceAllocationSearchRowBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var TaskSearchRowBasic
     */
    public $taskJoin;
    /**
     * @var TimeSheetSearchRowBasic
     */
    public $timeSheetJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var VendorSearchRowBasic
     */
    public $vendorJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'TimeEntrySearchRowBasic',
        'callJoin' => 'PhoneCallSearchRowBasic',
        'caseJoin' => 'SupportCaseSearchRowBasic',
        'classJoin' => 'ClassificationSearchRowBasic',
        'customerJoin' => 'CustomerSearchRowBasic',
        'departmentJoin' => 'DepartmentSearchRowBasic',
        'employeeJoin' => 'EmployeeSearchRowBasic',
        'eventJoin' => 'CalendarEventSearchRowBasic',
        'itemJoin' => 'ItemSearchRowBasic',
        'jobJoin' => 'JobSearchRowBasic',
        'locationJoin' => 'LocationSearchRowBasic',
        'projectTaskJoin' => 'ProjectTaskSearchRowBasic',
        'projectTaskAssignmentJoin' => 'ProjectTaskAssignmentSearchRowBasic',
        'resourceAllocationJoin' => 'ResourceAllocationSearchRowBasic',
        'taskJoin' => 'TaskSearchRowBasic',
        'timeSheetJoin' => 'TimeSheetSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'vendorJoin' => 'VendorSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
