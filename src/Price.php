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
 * Price
 */
class Price {
	/**
	 * @access public
	 * @var float
	 */
	public $value;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;

	static $paramtypesmap = array(
		"value" => "float",
		"quantity" => "float",
	);
}
