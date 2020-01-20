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
 * PartnerPromoCode
 */
class PartnerPromoCode {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var string
	 */
	public $discount;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;

	static $paramtypesmap = array(
		"promoCode" => "RecordRef",
		"discount" => "string",
		"endDate" => "dateTime",
	);
}
