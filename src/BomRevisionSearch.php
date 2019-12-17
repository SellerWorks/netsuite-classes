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
 * BomRevisionSearch
 */
class BomRevisionSearch extends SearchRecord {
	/**
	 * @access public
	 * @var BomRevisionSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var BomSearchBasic
	 */
	public $billOfMaterialsJoin;
	/**
	 * @access public
	 * @var BomRevisionComponentSearchBasic
	 */
	public $componentJoin;
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
		"basic" => "BomRevisionSearchBasic",
		"billOfMaterialsJoin" => "BomSearchBasic",
		"componentJoin" => "BomRevisionComponentSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
