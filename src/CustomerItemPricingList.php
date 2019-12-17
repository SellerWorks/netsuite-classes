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
 * CustomerItemPricingList
 */
class CustomerItemPricingList {
	/**
	 * @access public
	 * @var CustomerItemPricing[]
	 */
	public $itemPricing;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"itemPricing" => "CustomerItemPricing[]",
		"replaceAll" => "boolean",
	);
}
