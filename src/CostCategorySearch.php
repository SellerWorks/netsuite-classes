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
 * CostCategorySearch
 */
class CostCategorySearch extends SearchRecord {
	/**
	 * @access public
	 * @var CostCategorySearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var AccountSearchBasic
	 */
	public $accountJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $transactionJoin;

	static $paramtypesmap = array(
		"basic" => "CostCategorySearchBasic",
		"accountJoin" => "AccountSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
	);
}
