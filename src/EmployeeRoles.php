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
 * EmployeeRoles
 */
class EmployeeRoles {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $selectedRole;

	static $paramtypesmap = array(
		"selectedRole" => "RecordRef",
	);
}
