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
 * AccountingTransactionSearchRow
 */
class AccountingTransactionSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var AccountingTransactionSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var AccountSearchRowBasic
	 */
	public $accountJoin;
	/**
	 * @access public
	 * @var RevRecScheduleSearchRowBasic
	 */
	public $revRecScheduleJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $transactionJoin;

	static $paramtypesmap = array(
		"basic" => "AccountingTransactionSearchRowBasic",
		"accountJoin" => "AccountSearchRowBasic",
		"revRecScheduleJoin" => "RevRecScheduleSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
	);
}
