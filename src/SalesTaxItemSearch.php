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
 * SalesTaxItemSearch
 */
class SalesTaxItemSearch extends SearchRecord {
	/**
	 * @access public
	 * @var SalesTaxItemSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var TaxTypeSearchBasic
	 */
	public $taxTypeJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "SalesTaxItemSearchBasic",
		"taxTypeJoin" => "TaxTypeSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
