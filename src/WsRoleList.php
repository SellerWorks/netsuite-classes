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
 * WsRoleList
 */
class WsRoleList {
	/**
	 * @access public
	 * @var WsRole[]
	 */
	public $wsRole;

	static $paramtypesmap = array(
		"wsRole" => "WsRole[]",
	);
}
