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
 * Pricing
 */
class Pricing {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $priceLevel;
	/**
	 * @access public
	 * @var float
	 */
	public $discount;
	/**
	 * @access public
	 * @var PriceList
	 */
	public $priceList;

	static $paramtypesmap = array(
		"currency" => "RecordRef",
		"priceLevel" => "RecordRef",
		"discount" => "float",
		"priceList" => "PriceList",
	);
}
