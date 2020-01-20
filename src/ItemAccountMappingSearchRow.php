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
 * ItemAccountMappingSearchRow
 */
class ItemAccountMappingSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var ItemAccountMappingSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ClassificationSearchRowBasic
	 */
	public $classJoin;
	/**
	 * @access public
	 * @var DepartmentSearchRowBasic
	 */
	public $departmentJoin;
	/**
	 * @access public
	 * @var AccountSearchRowBasic
	 */
	public $destinationAccountJoin;
	/**
	 * @access public
	 * @var LocationSearchRowBasic
	 */
	public $locationJoin;
	/**
	 * @access public
	 * @var AccountSearchRowBasic
	 */
	public $sourceAccountJoin;
	/**
	 * @access public
	 * @var SubsidiarySearchRowBasic
	 */
	public $subsidiaryJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ItemAccountMappingSearchRowBasic",
		"classJoin" => "ClassificationSearchRowBasic",
		"departmentJoin" => "DepartmentSearchRowBasic",
		"destinationAccountJoin" => "AccountSearchRowBasic",
		"locationJoin" => "LocationSearchRowBasic",
		"sourceAccountJoin" => "AccountSearchRowBasic",
		"subsidiaryJoin" => "SubsidiarySearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
