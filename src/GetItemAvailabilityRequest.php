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
 * GetItemAvailabilityRequest
 */
class GetItemAvailabilityRequest {
	/**
	 * @access public
	 * @var ItemAvailabilityFilter
	 */
	public $itemAvailabilityFilter;

	static $paramtypesmap = array(
		"itemAvailabilityFilter" => "ItemAvailabilityFilter",
	);
}
