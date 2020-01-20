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
 * SalesTaxItemSearchAdvanced
 */
class SalesTaxItemSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var SalesTaxItemSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var SalesTaxItemSearchRow
	 */
	public $columns;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchId;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchScriptId;

	static $paramtypesmap = array(
		"criteria" => "SalesTaxItemSearch",
		"columns" => "SalesTaxItemSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
