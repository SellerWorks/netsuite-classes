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
 * GiftCertificateItemAuthCodesList
 */
class GiftCertificateItemAuthCodesList {
	/**
	 * @access public
	 * @var GiftCertificateItemAuthCodes[]
	 */
	public $authCodes;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"authCodes" => "GiftCertificateItemAuthCodes[]",
		"replaceAll" => "boolean",
	);
}
