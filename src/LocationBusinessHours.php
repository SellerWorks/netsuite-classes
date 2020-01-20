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
 * LocationBusinessHours
 */
class LocationBusinessHours {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startTime;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endTime;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isSunday;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isMonday;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isTuesday;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isWednesday;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isThursday;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isFriday;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isSaturday;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $sameDayPickupCutOffTime;

	static $paramtypesmap = array(
		"startTime" => "dateTime",
		"endTime" => "dateTime",
		"isSunday" => "boolean",
		"isMonday" => "boolean",
		"isTuesday" => "boolean",
		"isWednesday" => "boolean",
		"isThursday" => "boolean",
		"isFriday" => "boolean",
		"isSaturday" => "boolean",
		"sameDayPickupCutOffTime" => "dateTime",
	);
}
