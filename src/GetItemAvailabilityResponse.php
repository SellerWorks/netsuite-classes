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
 * GetItemAvailabilityResponse
 */
class GetItemAvailabilityResponse {
	/**
	 * @access public
	 * @var GetItemAvailabilityResult
	 */
	public $getItemAvailabilityResult;

	static $paramtypesmap = array(
		"getItemAvailabilityResult" => "GetItemAvailabilityResult",
	);
}
