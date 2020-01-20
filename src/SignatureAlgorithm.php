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
 * SignatureAlgorithm
 */
class SignatureAlgorithm {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const HMAC_SHA256 = "HMAC_SHA256";
	/**
	 * @var string
	 */
	const HMAC_SHA1 = "HMAC_SHA1";
}
