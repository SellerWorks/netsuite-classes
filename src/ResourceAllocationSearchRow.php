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
 * ResourceAllocationSearchRow.
 */
class ResourceAllocationSearchRow extends SearchRow
{
    /**
     * @var ResourceAllocationSearchRowBasic
     */
    public $basic;
    /**
     * @var CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $employeeJoin;
    /**
     * @var JobSearchRowBasic
     */
    public $jobJoin;
    /**
     * @var ProjectTaskSearchRowBasic
     */
    public $projectTaskJoin;
    /**
     * @var EntitySearchRowBasic
     */
    public $requestedByJoin;
    /**
     * @var EntitySearchRowBasic
     */
    public $resourceJoin;
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
        'basic' => 'ResourceAllocationSearchRowBasic',
        'customerJoin' => 'CustomerSearchRowBasic',
        'employeeJoin' => 'EmployeeSearchRowBasic',
        'jobJoin' => 'JobSearchRowBasic',
        'projectTaskJoin' => 'ProjectTaskSearchRowBasic',
        'requestedByJoin' => 'EntitySearchRowBasic',
        'resourceJoin' => 'EntitySearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'vendorJoin' => 'VendorSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
