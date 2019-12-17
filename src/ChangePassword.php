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
 * ChangePassword
 */
class ChangePassword {
	/**
	 * @access public
	 * @var string
	 */
	public $currentPassword;
	/**
	 * @access public
	 * @var string
	 */
	public $newPassword;
	/**
	 * @access public
	 * @var string
	 */
	public $newPassword2;

	static $paramtypesmap = array(
		"currentPassword" => "string",
		"newPassword" => "string",
		"newPassword2" => "string",
	);
}
