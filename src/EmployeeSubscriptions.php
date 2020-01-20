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
 * EmployeeSubscriptions
 */
class EmployeeSubscriptions {
	/**
	 * @access public
	 * @var string
	 */
	public $subscribed;
	/**
	 * @access public
	 * @var string
	 */
	public $subscription;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;

	static $paramtypesmap = array(
		"subscribed" => "string",
		"subscription" => "string",
		"lastModifiedDate" => "dateTime",
	);
}
