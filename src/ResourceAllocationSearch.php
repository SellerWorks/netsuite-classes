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
 * ResourceAllocationSearch.
 */
class ResourceAllocationSearch extends SearchRecord
{
    /**
     * @var ResourceAllocationSearchBasic
     */
    public $basic;
    /**
     * @var CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $employeeJoin;
    /**
     * @var JobSearchBasic
     */
    public $jobJoin;
    /**
     * @var ProjectTaskSearchBasic
     */
    public $projectTaskJoin;
    /**
     * @var EntitySearchBasic
     */
    public $requestedByJoin;
    /**
     * @var EntitySearchBasic
     */
    public $resourceJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var VendorSearchBasic
     */
    public $vendorJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'ResourceAllocationSearchBasic',
        'customerJoin' => 'CustomerSearchBasic',
        'employeeJoin' => 'EmployeeSearchBasic',
        'jobJoin' => 'JobSearchBasic',
        'projectTaskJoin' => 'ProjectTaskSearchBasic',
        'requestedByJoin' => 'EntitySearchBasic',
        'resourceJoin' => 'EntitySearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'vendorJoin' => 'VendorSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
