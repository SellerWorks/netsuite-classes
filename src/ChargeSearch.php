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
 * ChargeSearch
 */
class ChargeSearch extends SearchRecord {
	/**
	 * @access public
	 * @var ChargeSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var BillingAccountSearchBasic
	 */
	public $billingAccountJoin;
	/**
	 * @access public
	 * @var BillingScheduleSearchBasic
	 */
	public $billingScheduleJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $chargeEmployeeJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $invoiceJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var JobSearchBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $salesOrderJoin;
	/**
	 * @access public
	 * @var TimeBillSearchBasic
	 */
	public $timeJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $transactionJoin;
	/**
	 * @access public
	 * @var UsageSearchBasic
	 */
	public $usageJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ChargeSearchBasic",
		"billingAccountJoin" => "BillingAccountSearchBasic",
		"billingScheduleJoin" => "BillingScheduleSearchBasic",
		"chargeEmployeeJoin" => "EmployeeSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"invoiceJoin" => "TransactionSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"salesOrderJoin" => "TransactionSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"usageJoin" => "UsageSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
