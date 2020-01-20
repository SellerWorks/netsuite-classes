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
 * SiteCategorySearch
 */
class SiteCategorySearch extends SearchRecord {
	/**
	 * @access public
	 * @var SiteCategorySearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $shopperJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "SiteCategorySearchBasic",
		"shopperJoin" => "CustomerSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}
