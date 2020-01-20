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
 * ItemAccountMappingSearch
 */
class ItemAccountMappingSearch extends SearchRecord {
	/**
	 * @access public
	 * @var ItemAccountMappingSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ClassificationSearchBasic
	 */
	public $classJoin;
	/**
	 * @access public
	 * @var DepartmentSearchBasic
	 */
	public $departmentJoin;
	/**
	 * @access public
	 * @var AccountSearchBasic
	 */
	public $destinationAccountJoin;
	/**
	 * @access public
	 * @var LocationSearchBasic
	 */
	public $locationJoin;
	/**
	 * @access public
	 * @var AccountSearchBasic
	 */
	public $sourceAccountJoin;
	/**
	 * @access public
	 * @var SubsidiarySearchBasic
	 */
	public $subsidiaryJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ItemAccountMappingSearchBasic",
		"classJoin" => "ClassificationSearchBasic",
		"departmentJoin" => "DepartmentSearchBasic",
		"destinationAccountJoin" => "AccountSearchBasic",
		"locationJoin" => "LocationSearchBasic",
		"sourceAccountJoin" => "AccountSearchBasic",
		"subsidiaryJoin" => "SubsidiarySearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
