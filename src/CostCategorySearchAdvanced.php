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
 * CostCategorySearchAdvanced
 */
class CostCategorySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CostCategorySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CostCategorySearchRow
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
		"criteria" => "CostCategorySearch",
		"columns" => "CostCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
