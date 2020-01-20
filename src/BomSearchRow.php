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
 * BomSearchRow
 */
class BomSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var BomSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var AssemblyItemBomSearchRowBasic
	 */
	public $assemblyItemJoin;
	/**
	 * @access public
	 * @var BomRevisionSearchRowBasic
	 */
	public $revisionJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $transactionJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "BomSearchRowBasic",
		"assemblyItemJoin" => "AssemblyItemBomSearchRowBasic",
		"revisionJoin" => "BomRevisionSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
