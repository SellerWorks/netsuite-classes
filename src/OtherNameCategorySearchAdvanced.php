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
 * OtherNameCategorySearchAdvanced
 */
class OtherNameCategorySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var OtherNameCategorySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var OtherNameCategorySearchRow
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
		"criteria" => "OtherNameCategorySearch",
		"columns" => "OtherNameCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
