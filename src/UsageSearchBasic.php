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
 * UsageSearchBasic
 */
class UsageSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $date;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subscription;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subscriptionLine;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subscriptionPlan;

	static $paramtypesmap = array(
		"customer" => "SearchMultiSelectField",
		"date" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"quantity" => "SearchDoubleField",
		"subscription" => "SearchMultiSelectField",
		"subscriptionLine" => "SearchMultiSelectField",
		"subscriptionPlan" => "SearchMultiSelectField",
	);
}
