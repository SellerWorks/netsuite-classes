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
 * JobSearch.
 */
class JobSearch extends SearchRecord
{
    /**
     * @var JobSearchBasic
     */
    public $basic;
    /**
     * @var BillingAccountSearchBasic
     */
    public $billingAccountJoin;
    /**
     * @var BillingScheduleSearchBasic
     */
    public $billingScheduleJoin;
    /**
     * @var ContactSearchBasic
     */
    public $contactPrimaryJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var ProjectTaskSearchBasic
     */
    public $projectTaskJoin;
    /**
     * @var ResourceAllocationSearchBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var TaskSearchBasic
     */
    public $taskJoin;
    /**
     * @var TimeBillSearchBasic
     */
    public $timeJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'JobSearchBasic',
        'billingAccountJoin' => 'BillingAccountSearchBasic',
        'billingScheduleJoin' => 'BillingScheduleSearchBasic',
        'contactPrimaryJoin' => 'ContactSearchBasic',
        'customerJoin' => 'CustomerSearchBasic',
        'projectTaskJoin' => 'ProjectTaskSearchBasic',
        'resourceAllocationJoin' => 'ResourceAllocationSearchBasic',
        'taskJoin' => 'TaskSearchBasic',
        'timeJoin' => 'TimeBillSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
