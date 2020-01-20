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
 * LocationBusinessHoursList
 */
class LocationBusinessHoursList {
	/**
	 * @access public
	 * @var LocationBusinessHours[]
	 */
	public $locationBusinessHours;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"locationBusinessHours" => "LocationBusinessHours[]",
		"replaceAll" => "boolean",
	);
}
