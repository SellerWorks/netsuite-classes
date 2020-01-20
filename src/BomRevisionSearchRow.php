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
 * BomRevisionSearchRow
 */
class BomRevisionSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var BomRevisionSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var BomSearchRowBasic
	 */
	public $billOfMaterialsJoin;
	/**
	 * @access public
	 * @var BomRevisionComponentSearchRowBasic
	 */
	public $componentJoin;
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
		"basic" => "BomRevisionSearchRowBasic",
		"billOfMaterialsJoin" => "BomSearchRowBasic",
		"componentJoin" => "BomRevisionComponentSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
