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
 * PricingGroupSearch
 */
class PricingGroupSearch extends SearchRecord {
	/**
	 * @access public
	 * @var PricingGroupSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "PricingGroupSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}
