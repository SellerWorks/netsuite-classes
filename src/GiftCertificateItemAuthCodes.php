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
 * GiftCertificateItemAuthCodes
 */
class GiftCertificateItemAuthCodes {
	/**
	 * @access public
	 * @var string
	 */
	public $authCode;
	/**
	 * @access public
	 * @var boolean
	 */
	public $used;

	static $paramtypesmap = array(
		"authCode" => "string",
		"used" => "boolean",
	);
}
