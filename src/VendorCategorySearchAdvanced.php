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
 * VendorCategorySearchAdvanced
 */
class VendorCategorySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var VendorCategorySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var VendorCategorySearchRow
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
		"criteria" => "VendorCategorySearch",
		"columns" => "VendorCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
