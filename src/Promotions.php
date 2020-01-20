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
 * Promotions
 */
class Promotions {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $couponCode;

	static $paramtypesmap = array(
		"promoCode" => "RecordRef",
		"couponCode" => "RecordRef",
	);
}
