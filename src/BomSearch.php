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
 * BomSearch
 */
class BomSearch extends SearchRecord {
	/**
	 * @access public
	 * @var BomSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var AssemblyItemBomSearchBasic
	 */
	public $assemblyItemJoin;
	/**
	 * @access public
	 * @var BomRevisionSearchBasic
	 */
	public $revisionJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $transactionJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "BomSearchBasic",
		"assemblyItemJoin" => "AssemblyItemBomSearchBasic",
		"revisionJoin" => "BomRevisionSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
