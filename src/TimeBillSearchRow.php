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
 * TimeBillSearchRow.
 */
class TimeBillSearchRow extends SearchRow
{
    /**
     * @var TimeBillSearchRowBasic
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
     * @var ChargeSearchRowBasic
     */
    public $chargeJoin;
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
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var VendorSearchRowBasic
     */
    public $vendorJoin;
    /**
     * @var TimeSheetSearchRowBasic
     */
    public $timeSheetJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'TimeBillSearchRowBasic',
        'callJoin' => 'PhoneCallSearchRowBasic',
        'caseJoin' => 'SupportCaseSearchRowBasic',
        'chargeJoin' => 'ChargeSearchRowBasic',
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
        'userJoin' => 'EmployeeSearchRowBasic',
        'vendorJoin' => 'VendorSearchRowBasic',
        'timeSheetJoin' => 'TimeSheetSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
