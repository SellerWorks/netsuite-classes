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
 * TokenPassportSignature
 */
class TokenPassportSignature {
	/**
	 * @access public
	 * @var string
	 */
	public $_;
	/**
	 * @access public
	 * @var string
	 */
	public $algorithm;

	static $paramtypesmap = array(
		"_" => "string",
		"algorithm" => "string",
	);
}
