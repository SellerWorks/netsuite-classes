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
 * CostCategorySearchRow
 */
class CostCategorySearchRow extends SearchRow {
	/**
	 * @access public
	 * @var CostCategorySearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var AccountSearchRowBasic
	 */
	public $accountJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $transactionJoin;

	static $paramtypesmap = array(
		"basic" => "CostCategorySearchRowBasic",
		"accountJoin" => "AccountSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
	);
}
