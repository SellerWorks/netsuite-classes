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
 * PaycheckSearchRow
 */
class PaycheckSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var PaycheckSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $employeeJoin;
	/**
	 * @access public
	 * @var PayrollItemSearchRowBasic
	 */
	public $payrollItemJoin;

	static $paramtypesmap = array(
		"basic" => "PaycheckSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"payrollItemJoin" => "PayrollItemSearchRowBasic",
	);
}
