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
 * BudgetSearchRow
 */
class BudgetSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var BudgetSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "BudgetSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
