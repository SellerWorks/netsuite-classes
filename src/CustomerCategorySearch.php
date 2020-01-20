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
 * CustomerCategorySearch
 */
class CustomerCategorySearch extends SearchRecord {
	/**
	 * @access public
	 * @var CustomerCategorySearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "CustomerCategorySearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}
