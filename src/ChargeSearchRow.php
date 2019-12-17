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
 * ChargeSearchRow.
 */
class ChargeSearchRow extends SearchRow
{
    /**
     * @var ChargeSearchRowBasic
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
     * @var EmployeeSearchRowBasic
     */
    public $chargeEmployeeJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $invoiceJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var JobSearchRowBasic
     */
    public $jobJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $salesOrderJoin;
    /**
     * @var TimeBillSearchRowBasic
     */
    public $timeJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @var UsageSearchRowBasic
     */
    public $usageJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'ChargeSearchRowBasic',
        'billingAccountJoin' => 'BillingAccountSearchRowBasic',
        'billingScheduleJoin' => 'BillingScheduleSearchRowBasic',
        'chargeEmployeeJoin' => 'EmployeeSearchRowBasic',
        'customerJoin' => 'CustomerSearchRowBasic',
        'invoiceJoin' => 'TransactionSearchRowBasic',
        'itemJoin' => 'ItemSearchRowBasic',
        'jobJoin' => 'JobSearchRowBasic',
        'salesOrderJoin' => 'TransactionSearchRowBasic',
        'timeJoin' => 'TimeBillSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'usageJoin' => 'UsageSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
