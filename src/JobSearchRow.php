<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * JobSearchRow
 */
class JobSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var JobSearchRowBasic
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
	 * @var ContactSearchRowBasic
	 */
	public $contactPrimaryJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var ProjectTaskSearchRowBasic
	 */
	public $projectTaskJoin;
	/**
	 * @access public
	 * @var ResourceAllocationSearchRowBasic
	 */
	public $resourceAllocationJoin;
	/**
	 * @access public
	 * @var TaskSearchRowBasic
	 */
	public $taskJoin;
	/**
	 * @access public
	 * @var TimeBillSearchRowBasic
	 */
	public $timeJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "JobSearchRowBasic",
		"billingAccountJoin" => "BillingAccountSearchRowBasic",
		"billingScheduleJoin" => "BillingScheduleSearchRowBasic",
		"contactPrimaryJoin" => "ContactSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"projectTaskJoin" => "ProjectTaskSearchRowBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
		"taskJoin" => "TaskSearchRowBasic",
		"timeJoin" => "TimeBillSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
