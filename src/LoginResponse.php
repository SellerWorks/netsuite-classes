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
 * LoginResponse
 */
class LoginResponse {
	/**
	 * @access public
	 * @var SessionResponse
	 */
	public $sessionResponse;

	static $paramtypesmap = array(
		"sessionResponse" => "SessionResponse",
	);
}
