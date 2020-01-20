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
 * VendorRolesList
 */
class VendorRolesList {
	/**
	 * @access public
	 * @var VendorRoles[]
	 */
	public $roles;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"roles" => "VendorRoles[]",
		"replaceAll" => "boolean",
	);
}
