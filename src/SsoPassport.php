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
 * SsoPassport
 */
class SsoPassport {
	/**
	 * @access public
	 * @var string
	 */
	public $authenticationToken;
	/**
	 * @access public
	 * @var string
	 */
	public $partnerId;
	/**
	 * @access public
	 * @var string
	 */
	public $partnerAccount;
	/**
	 * @access public
	 * @var string
	 */
	public $partnerUserId;

	static $paramtypesmap = array(
		"authenticationToken" => "string",
		"partnerId" => "string",
		"partnerAccount" => "string",
		"partnerUserId" => "string",
	);
}
