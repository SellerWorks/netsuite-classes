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
 * JobSearch
 */
class JobSearch extends SearchRecord {
	/**
	 * @access public
	 * @var JobSearchBasic
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
	 * @var ContactSearchBasic
	 */
	public $contactPrimaryJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var ProjectTaskSearchBasic
	 */
	public $projectTaskJoin;
	/**
	 * @access public
	 * @var ResourceAllocationSearchBasic
	 */
	public $resourceAllocationJoin;
	/**
	 * @access public
	 * @var TaskSearchBasic
	 */
	public $taskJoin;
	/**
	 * @access public
	 * @var TimeBillSearchBasic
	 */
	public $timeJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "JobSearchBasic",
		"billingAccountJoin" => "BillingAccountSearchBasic",
		"billingScheduleJoin" => "BillingScheduleSearchBasic",
		"contactPrimaryJoin" => "ContactSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"projectTaskJoin" => "ProjectTaskSearchBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchBasic",
		"taskJoin" => "TaskSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
