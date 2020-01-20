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
 * CustomListSearchAdvanced
 */
class CustomListSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CustomListSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CustomListSearchRow
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
		"criteria" => "CustomListSearch",
		"columns" => "CustomListSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
