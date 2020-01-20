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
 * Subscriptions
 */
class Subscriptions {
	/**
	 * @access public
	 * @var boolean
	 */
	public $subscribed;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subscription;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;

	static $paramtypesmap = array(
		"subscribed" => "boolean",
		"subscription" => "RecordRef",
		"lastModifiedDate" => "dateTime",
	);
}
