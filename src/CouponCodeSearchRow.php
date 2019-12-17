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
 * CouponCodeSearchRow
 */
class CouponCodeSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var CouponCodeSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "CouponCodeSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}
