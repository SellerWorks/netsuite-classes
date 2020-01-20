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
 * ChangeEmail
 */
class ChangeEmail {
	/**
	 * @access public
	 * @var string
	 */
	public $currentPassword;
	/**
	 * @access public
	 * @var string
	 */
	public $newEmail;
	/**
	 * @access public
	 * @var string
	 */
	public $newEmail2;
	/**
	 * @access public
	 * @var boolean
	 */
	public $justThisAccount;

	static $paramtypesmap = array(
		"currentPassword" => "string",
		"newEmail" => "string",
		"newEmail2" => "string",
		"justThisAccount" => "boolean",
	);
}
