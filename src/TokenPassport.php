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
 * TokenPassport
 */
class TokenPassport {
	/**
	 * @access public
	 * @var string
	 */
	public $account;
	/**
	 * @access public
	 * @var string
	 */
	public $consumerKey;
	/**
	 * @access public
	 * @var string
	 */
	public $token;
	/**
	 * @access public
	 * @var string
	 */
	public $nonce;
	/**
	 * @access public
	 * @var integer
	 */
	public $timestamp;
	/**
	 * @access public
	 * @var TokenPassportSignature
	 */
	public $signature;

	static $paramtypesmap = array(
		"account" => "string",
		"consumerKey" => "string",
		"token" => "string",
		"nonce" => "string",
		"timestamp" => "integer",
		"signature" => "TokenPassportSignature",
	);
}
