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
 * ItemAvailabilityFilter
 */
class ItemAvailabilityFilter {
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $item;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastQtyAvailableChange;

	static $paramtypesmap = array(
		"item" => "RecordRefList",
		"lastQtyAvailableChange" => "dateTime",
	);
}
