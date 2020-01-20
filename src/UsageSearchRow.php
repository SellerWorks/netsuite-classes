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
 * UsageSearchRow
 */
class UsageSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var UsageSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ChargeSearchRowBasic
	 */
	public $chargeJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $subscriptionPlanJoin;

	static $paramtypesmap = array(
		"basic" => "UsageSearchRowBasic",
		"chargeJoin" => "ChargeSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"subscriptionPlanJoin" => "ItemSearchRowBasic",
	);
}
