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
 * CustomerCategorySearchAdvanced
 */
class CustomerCategorySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CustomerCategorySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CustomerCategorySearchRow
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
		"criteria" => "CustomerCategorySearch",
		"columns" => "CustomerCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
