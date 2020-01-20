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
 * EmployeeDirectDepositList
 */
class EmployeeDirectDepositList {
	/**
	 * @access public
	 * @var EmployeeDirectDeposit[]
	 */
	public $employeeDirectDeposit;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"employeeDirectDeposit" => "EmployeeDirectDeposit[]",
		"replaceAll" => "boolean",
	);
}
