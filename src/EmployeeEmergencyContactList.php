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
 * EmployeeEmergencyContactList
 */
class EmployeeEmergencyContactList {
	/**
	 * @access public
	 * @var EmployeeEmergencyContact[]
	 */
	public $employeeEmergencyContact;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"employeeEmergencyContact" => "EmployeeEmergencyContact[]",
		"replaceAll" => "boolean",
	);
}
