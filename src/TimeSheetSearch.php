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
 * TimeSheetSearch
 */
class TimeSheetSearch extends SearchRecord {
	/**
	 * @access public
	 * @var TimeSheetSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $employeeJoin;
	/**
	 * @access public
	 * @var TimeBillSearchBasic
	 */
	public $timeBillJoin;
	/**
	 * @access public
	 * @var TimeEntrySearchBasic
	 */
	public $timeEntryJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "TimeSheetSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"timeBillJoin" => "TimeBillSearchBasic",
		"timeEntryJoin" => "TimeEntrySearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
