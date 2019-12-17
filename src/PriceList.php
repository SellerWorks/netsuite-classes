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
 * PriceList
 */
class PriceList {
	/**
	 * @access public
	 * @var Price[]
	 */
	public $price;

	static $paramtypesmap = array(
		"price" => "Price[]",
	);
}
