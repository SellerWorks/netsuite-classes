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
 * UsageSearch
 */
class UsageSearch extends SearchRecord {
	/**
	 * @access public
	 * @var UsageSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ChargeSearchBasic
	 */
	public $chargeJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $subscriptionPlanJoin;

	static $paramtypesmap = array(
		"basic" => "UsageSearchBasic",
		"chargeJoin" => "ChargeSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"subscriptionPlanJoin" => "ItemSearchBasic",
	);
}
