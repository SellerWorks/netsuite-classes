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
 * TimeBillSearch.
 */
class TimeBillSearch extends SearchRecord
{
    /**
     * @var TimeBillSearchBasic
     */
    public $basic;
    /**
     * @var PhoneCallSearchBasic
     */
    public $callJoin;
    /**
     * @var SupportCaseSearchBasic
     */
    public $caseJoin;
    /**
     * @var ChargeSearchBasic
     */
    public $chargeJoin;
    /**
     * @var ClassificationSearchBasic
     */
    public $classJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var DepartmentSearchBasic
     */
    public $departmentJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $employeeJoin;
    /**
     * @var CalendarEventSearchBasic
     */
    public $eventJoin;
    /**
     * @var ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var JobSearchBasic
     */
    public $jobJoin;
    /**
     * @var LocationSearchBasic
     */
    public $locationJoin;
    /**
     * @var ProjectTaskSearchBasic
     */
    public $projectTaskJoin;
    /**
     * @var ProjectTaskAssignmentSearchBasic
     */
    public $projectTaskAssignmentJoin;
    /**
     * @var ResourceAllocationSearchBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var TaskSearchBasic
     */
    public $taskJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var VendorSearchBasic
     */
    public $vendorJoin;
    /**
     * @var TimeSheetSearchBasic
     */
    public $timeSheetJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'TimeBillSearchBasic',
        'callJoin' => 'PhoneCallSearchBasic',
        'caseJoin' => 'SupportCaseSearchBasic',
        'chargeJoin' => 'ChargeSearchBasic',
        'classJoin' => 'ClassificationSearchBasic',
        'customerJoin' => 'CustomerSearchBasic',
        'departmentJoin' => 'DepartmentSearchBasic',
        'employeeJoin' => 'EmployeeSearchBasic',
        'eventJoin' => 'CalendarEventSearchBasic',
        'itemJoin' => 'ItemSearchBasic',
        'jobJoin' => 'JobSearchBasic',
        'locationJoin' => 'LocationSearchBasic',
        'projectTaskJoin' => 'ProjectTaskSearchBasic',
        'projectTaskAssignmentJoin' => 'ProjectTaskAssignmentSearchBasic',
        'resourceAllocationJoin' => 'ResourceAllocationSearchBasic',
        'taskJoin' => 'TaskSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'vendorJoin' => 'VendorSearchBasic',
        'timeSheetJoin' => 'TimeSheetSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
