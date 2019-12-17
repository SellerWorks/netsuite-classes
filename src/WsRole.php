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
 * WsRole
 */
class WsRole {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $role;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDefault;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isLoggedInRole;

	static $paramtypesmap = array(
		"role" => "RecordRef",
		"isDefault" => "boolean",
		"isInactive" => "boolean",
		"isLoggedInRole" => "boolean",
	);
}
