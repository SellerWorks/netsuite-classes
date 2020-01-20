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
 * ExpenseCategorySearchAdvanced
 */
class ExpenseCategorySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ExpenseCategorySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ExpenseCategorySearchRow
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
		"criteria" => "ExpenseCategorySearch",
		"columns" => "ExpenseCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
