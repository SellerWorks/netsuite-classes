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
 * EmployeeHrEducationList
 */
class EmployeeHrEducationList {
	/**
	 * @access public
	 * @var EmployeeHrEducation[]
	 */
	public $employeeHrEducation;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"employeeHrEducation" => "EmployeeHrEducation[]",
		"replaceAll" => "boolean",
	);
}
