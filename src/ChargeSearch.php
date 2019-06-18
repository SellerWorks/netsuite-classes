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
 * ChargeSearch.
 */
class ChargeSearch extends SearchRecord
{
    /**
     * @var ChargeSearchBasic
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
     * @var EmployeeSearchBasic
     */
    public $chargeEmployeeJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $invoiceJoin;
    /**
     * @var ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var JobSearchBasic
     */
    public $jobJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $salesOrderJoin;
    /**
     * @var TimeBillSearchBasic
     */
    public $timeJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var UsageSearchBasic
     */
    public $usageJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'ChargeSearchBasic',
        'billingAccountJoin' => 'BillingAccountSearchBasic',
        'billingScheduleJoin' => 'BillingScheduleSearchBasic',
        'chargeEmployeeJoin' => 'EmployeeSearchBasic',
        'customerJoin' => 'CustomerSearchBasic',
        'invoiceJoin' => 'TransactionSearchBasic',
        'itemJoin' => 'ItemSearchBasic',
        'jobJoin' => 'JobSearchBasic',
        'salesOrderJoin' => 'TransactionSearchBasic',
        'timeJoin' => 'TimeBillSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'usageJoin' => 'UsageSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
