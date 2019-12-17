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
 * SessionResponse
 */
class SessionResponse {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $userId;
	/**
	 * @access public
	 * @var WsRoleList
	 */
	public $wsRoleList;

	static $paramtypesmap = array(
		"status" => "Status",
		"userId" => "RecordRef",
		"wsRoleList" => "WsRoleList",
	);
}
