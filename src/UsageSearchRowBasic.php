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
 * UsageSearchRowBasic
 */
class UsageSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $date;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subscription;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subscriptionLine;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subscriptionPlan;

	static $paramtypesmap = array(
		"customer" => "SearchColumnSelectField[]",
		"date" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"quantity" => "SearchColumnDoubleField[]",
		"subscription" => "SearchColumnSelectField[]",
		"subscriptionLine" => "SearchColumnSelectField[]",
		"subscriptionPlan" => "SearchColumnSelectField[]",
	);
}
