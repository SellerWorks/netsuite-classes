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
 * UpdateInviteeStatusRequest
 */
class UpdateInviteeStatusRequest {
	/**
	 * @access public
	 * @var UpdateInviteeStatusReference
	 */
	public $updateInviteeStatusReference;

	static $paramtypesmap = array(
		"updateInviteeStatusReference" => "UpdateInviteeStatusReference",
	);
}
