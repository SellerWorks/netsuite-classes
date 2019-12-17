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
 * TimeSheetSearchRow
 */
class TimeSheetSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var TimeSheetSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $employeeJoin;
	/**
	 * @access public
	 * @var TimeBillSearchRowBasic
	 */
	public $timeBillJoin;
	/**
	 * @access public
	 * @var TimeEntrySearchRowBasic
	 */
	public $timeEntryJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "TimeSheetSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"timeBillJoin" => "TimeBillSearchRowBasic",
		"timeEntryJoin" => "TimeEntrySearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
