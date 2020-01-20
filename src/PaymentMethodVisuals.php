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
 * PaymentMethodVisuals
 */
class PaymentMethodVisuals {
	/**
	 * @access public
	 * @var string
	 */
	public $flags;
	/**
	 * @access public
	 * @var string
	 */
	public $location;

	static $paramtypesmap = array(
		"flags" => "string",
		"location" => "string",
	);
}
