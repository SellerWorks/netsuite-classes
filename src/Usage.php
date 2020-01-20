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
 * Usage
 */
class Usage extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subscriptionPlan;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customer;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $usageSubscription;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $usageSubscriptionLine;
	/**
	 * @access public
	 * @var float
	 */
	public $usageQuantity;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $usageDate;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"memo" => "string",
		"item" => "RecordRef",
		"subscriptionPlan" => "RecordRef",
		"customer" => "RecordRef",
		"usageSubscription" => "RecordRef",
		"usageSubscriptionLine" => "RecordRef",
		"usageQuantity" => "float",
		"usageDate" => "dateTime",
		"internalId" => "string",
		"externalId" => "string",
	);
}
