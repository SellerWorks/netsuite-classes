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
 * PromotionsList
 */
class PromotionsList {
	/**
	 * @access public
	 * @var Promotions[]
	 */
	public $promotions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"promotions" => "Promotions[]",
		"replaceAll" => "boolean",
	);
}
