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
 * ResourceAllocationSearchRow
 */
class ResourceAllocationSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var ResourceAllocationSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $employeeJoin;
	/**
	 * @access public
	 * @var JobSearchRowBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var ProjectTaskSearchRowBasic
	 */
	public $projectTaskJoin;
	/**
	 * @access public
	 * @var EntitySearchRowBasic
	 */
	public $requestedByJoin;
	/**
	 * @access public
	 * @var EntitySearchRowBasic
	 */
	public $resourceJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var VendorSearchRowBasic
	 */
	public $vendorJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ResourceAllocationSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"projectTaskJoin" => "ProjectTaskSearchRowBasic",
		"requestedByJoin" => "EntitySearchRowBasic",
		"resourceJoin" => "EntitySearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
