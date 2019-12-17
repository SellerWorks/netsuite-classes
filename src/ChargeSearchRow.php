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
 * ChargeSearchRow
 */
class ChargeSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var ChargeSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var BillingAccountSearchRowBasic
	 */
	public $billingAccountJoin;
	/**
	 * @access public
	 * @var BillingScheduleSearchRowBasic
	 */
	public $billingScheduleJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $chargeEmployeeJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $invoiceJoin;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var JobSearchRowBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $salesOrderJoin;
	/**
	 * @access public
	 * @var TimeBillSearchRowBasic
	 */
	public $timeJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $transactionJoin;
	/**
	 * @access public
	 * @var UsageSearchRowBasic
	 */
	public $usageJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ChargeSearchRowBasic",
		"billingAccountJoin" => "BillingAccountSearchRowBasic",
		"billingScheduleJoin" => "BillingScheduleSearchRowBasic",
		"chargeEmployeeJoin" => "EmployeeSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"invoiceJoin" => "TransactionSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"salesOrderJoin" => "TransactionSearchRowBasic",
		"timeJoin" => "TimeBillSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"usageJoin" => "UsageSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
