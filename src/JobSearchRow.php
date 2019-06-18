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
 * JobSearchRow.
 */
class JobSearchRow extends SearchRow
{
    /**
     * @var JobSearchRowBasic
     */
    public $basic;
    /**
     * @var BillingAccountSearchRowBasic
     */
    public $billingAccountJoin;
    /**
     * @var BillingScheduleSearchRowBasic
     */
    public $billingScheduleJoin;
    /**
     * @var ContactSearchRowBasic
     */
    public $contactPrimaryJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var ProjectTaskSearchRowBasic
     */
    public $projectTaskJoin;
    /**
     * @var ResourceAllocationSearchRowBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var TaskSearchRowBasic
     */
    public $taskJoin;
    /**
     * @var TimeBillSearchRowBasic
     */
    public $timeJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'JobSearchRowBasic',
        'billingAccountJoin' => 'BillingAccountSearchRowBasic',
        'billingScheduleJoin' => 'BillingScheduleSearchRowBasic',
        'contactPrimaryJoin' => 'ContactSearchRowBasic',
        'customerJoin' => 'CustomerSearchRowBasic',
        'projectTaskJoin' => 'ProjectTaskSearchRowBasic',
        'resourceAllocationJoin' => 'ResourceAllocationSearchRowBasic',
        'taskJoin' => 'TaskSearchRowBasic',
        'timeJoin' => 'TimeBillSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
